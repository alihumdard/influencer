<?php

namespace App\Http\Controllers;

use App\Models\Compaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;
use App\Models\Variant;
use Str;

class ProductController extends Controller
{

    public function products()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = auth()->user();
        if ($user) {
            $page_name = 'products';
            if (!view_permission($page_name)) {
                return redirect()->back();
            }

            if ($user->role == user_roles('1')) {
                $products = Product::with('categories')->get();
            } elseif ($user->role == user_roles('2')) {
                $products = Product::with('categories')->where('created_by', $user->id)->get();
            }
            $data['products'] = $products;
            $data['user'] = $user;
            return view('pages.products.listing', $data);
        } else {
            return redirect()->route('home');
        }
    }


    public function store_product(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'nullable|integer',
            'cut_price' => 'required|numeric',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'SKU' => 'required|string|max:255',
            'barcode' => 'nullable|string|max:255',
            'weight' => 'nullable|numeric|max:255',
            'stock_status' => 'required|string|max:50',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',

            'main_image' => 'nullable',
            'images.*' => 'nullable',
            // 'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webm,svg,webp|max:2048',
            // 'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webm,svg,webp|max:2048',
        ]);

        $mainImagePath = null;
        if ($request->hasFile('main_image')) {
            $mainImage = $request->file('main_image');
            $mainImageName = time() . '_' . uniqid('', true) . '.' . $mainImage->getClientOriginalExtension();
            $mainImage->storeAs('product_images/main_images', $mainImageName, 'public');
            $mainImagePath = 'product_images/main_images/' . $mainImageName;
        }

        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->storeAs('product_images', $imageName, 'public');
                $extImagePath = 'product_images/' . $imageName;
                $imagePaths[] = $extImagePath;
            }
        }

        // Create the product
        if($request->product_id){
            $product = Product::find($request->product_id);

            if ($product) {
                // Update individual fields
                $product->title = $validatedData['title'];
                $product->category_id = $validatedData['category_id'];
                $product->cut_price = $validatedData['cut_price'];
                $product->price = $validatedData['price'];
                $product->stock = $validatedData['stock'];
                $product->SKU = $validatedData['SKU'];
                $product->barcode = $validatedData['barcode'];
                $product->weight = $validatedData['weight'];
                $product->stock_status = $validatedData['stock_status'];
                $product->short_description = $validatedData['short_description'];
                $product->description = $validatedData['description'];
                $product->main_image = $mainImagePath;
                $product->product_images = $imagePaths; // Store image paths as JSON
                $product->updated_by = auth()->id();
            
                // Save the updated product
                $product->save();
            }
            
        }else{
            $product = Product::create([
                'title' => $validatedData['title'],
                'category_id' => $validatedData['category_id'],
                'cut_price' => $validatedData['cut_price'],
                'price' => $validatedData['price'],
                'stock' => $validatedData['stock'],
                'SKU' => $validatedData['SKU'],
                'barcode' => $validatedData['barcode'],
                'weight' => $validatedData['weight'],
                'stock_status' => $validatedData['stock_status'],
                'short_description' => $validatedData['short_description'],
                'description' => $validatedData['description'],
                'main_image' => $mainImagePath,
                'product_images' => $imagePaths, // Store image paths as JSON
                'created_by' => auth()->id(),
            ]);
        }

        $campaign = Compaign::findOrFail($request->campaign_id);
        $campaign->products()->syncWithoutDetaching([$product->id]);

        $product->variants()->whereNotIn('id',$request->variant_id)->delete();


        // Create the variants
        foreach ($request->variant_name?? [] as $index => $variant_name) {
            $variantImagePath = null;
            if (isset($request->variant_attr_images[$index]) && $request->hasFile("variant_attr_images.$index")) {
                $variantImage = $request->file("variant_attr_images.$index");
                $variantImagePath = $variantImage->store('variants_images', 'public');
            }

            Variant::updateOrCreate(['id'=> $request->variant_id[$index]], [
                'product_id' => $product->id,
                'variant_name' => $variant_name,
                'variant_value' => $request->variant_value[$index],
                'variant_price' => $request->variant_price[$index],
                'variant_cut_price' => $request->variant_cut_price[$index],
                'variant_inventory' => $request->variant_inventory[$index],
                'variant_weight' => $request->variant_weight[$index],
                'variant_barcode' => $request->variant_barcode[$index],
                'variant_sku' => $request->variant_sku[$index],
                'variant_attr_image' => $variantImagePath, // Save the variant image path
            ]);
        }

        return response()->json(['message' => 'Product and variants created successfully!'], 201);
    }

    public function product_list_delete(Request $request)
    {
        $product=Product::findOrFail($request->product_id);
        $product->delete();
        return response()->json(['success' => true, 'message' => 'Product deleted successfully.']);
    }


    function product_duplicate(Request $request)
    {
        $product=Product::findOrFail($request->product_id);

        $newProduct = $product->replicate();
        $newProduct->sku=\Illuminate\Support\Str::random(10);
        $newProduct->barcode=\Illuminate\Support\Str::random(10);
        $newProduct->save();

        $campaigns = $product->campaign;
        $newProduct->campaign()->attach($campaigns->pluck('id'));

        return response()->json(['success' => true, 'message' => 'Product duplicated successfully.']);
    }


    public function product_get(Request $request)
    {
    return $getproduct=Product::with('variants')->findOrFail($request->product_id);
    }


    
        public function product_search(Request $request)
{
    if ($request->ajax()) {
        $products = Product::where('title', 'like', '%' . $request->search . '%')->get();

        // Return the view with search results
        return view('pages.compaign.product_search', compact('products'))->render();
    }
}

    }

