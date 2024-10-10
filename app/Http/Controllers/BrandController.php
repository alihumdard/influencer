<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\BrandDetail;
use Illuminate\Support\Facades\Hash;

class BrandController extends Controller
{

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'brand_name' => 'required|string|max:255',
            'contact_person_name' => 'required|string|max:255',
            'contact_person_designation' => 'required|string|max:255',
            'brand_type' => 'required|string',
            'business_type' => 'required|string',
            'address_1' => 'required|string',
            'address_2' => 'nullable|string',
        ]);
    
        BrandDetail::create([
            'user_id' => auth()->id(), 
            'brand_name' => $validatedData['brand_name'],
            'contact_person_name' => $validatedData['contact_person_name'],
            'contact_person_designation' => $validatedData['contact_person_designation'],
            'brand_type' => $validatedData['brand_type'],
            'business_type' => $validatedData['business_type'],
            'address_1' => $validatedData['address_1'],
            'address_2' => $validatedData['address_2'],
            'created_by' => auth()->id(),
            'updated_by' => auth()->id(),
        ]);
    
        return redirect()->route('admin.index')->with('success', 'Brand details saved successfully.');
    }
    
}
