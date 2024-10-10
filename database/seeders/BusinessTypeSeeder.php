<?php

namespace Database\Seeders;

use App\Models\BusinessType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BusinessType::create([
            'name'=>'Sole Proprietorship'
        ]);
        BusinessType::create([
            'name'=>'Partnership'
        ]);
        BusinessType::create([
            'name'=>'Limited Liability Company'
        ]);
        BusinessType::create([
            'name'=>'Corporation'
        ]);
    }
}
