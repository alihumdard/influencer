<?php

namespace Database\Seeders;

use App\Models\BrandType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BrandType::create([
            'name'=>'Geographic brand'
        ]);
        BrandType::create([
            'name'=>'Product branding'
        ]);
        BrandType::create([
            'name'=>'Personal branding'
        ]);
        BrandType::create([
            'name'=>'Corporate branding'
        ]);
        BrandType::create([
            'name'=>'Service branding'
        ]);
        BrandType::create([
            'name'=>'Event brands'
        ]);
        BrandType::create([
            'name'=>'Online branding'
        ]);
        BrandType::create([
            'name'=>'Corporate brands'
        ]);
    }
}
