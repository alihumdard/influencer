<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Variant;
use Illuminate\Http\Request;

class ProductController extends Controller
{
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

            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webm,svg,webp|max:2048',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,webm,svg,webp|max:2048',
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
        ]);

        // Create the variants
        foreach ($validatedData['variant_name'] ?? [] as $index => $variant_name) {
            $variantImagePath = null;
            if (isset($validatedData['variant_attr_images'][$index]) && $request->hasFile("variant_attr_images.$index")) {
                $variantImage = $request->file("variant_attr_images.$index");
                $variantImagePath = $variantImage->store('variants_images', 'public');
            }

            Variant::create([
                'product_id' => $product->id,
                'variant_name' => $variant_name,
                'variant_value' => $validatedData['variant_value'][$index],
                'variant_price' => $validatedData['variant_price'][$index],
                'variant_cut_price' => $validatedData['variant_cut_price'][$index],
                'variant_inventory' => $validatedData['variant_inventory'][$index],
                'variant_weight' => $validatedData['variant_weight'][$index],
                'variant_barcode' => $validatedData['variant_barcode'][$index],
                'variant_sku' => $validatedData['variant_sku'][$index],
                'variant_attr_image' => $variantImagePath, // Save the variant image path
            ]);
        }

        return response()->json(['message' => 'Product and variants created successfully!'], 201);
    }
}
