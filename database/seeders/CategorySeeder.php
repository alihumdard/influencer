<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            [
                'title' => 'Electronics',
                'slug' => Str::slug('Electronics'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Fashion',
                'slug' => Str::slug('Fashion'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Home & Garden',
                'slug' => Str::slug('Home & Garden'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Health & Beauty',
                'slug' => Str::slug('Health & Beauty'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sports & Outdoors',
                'slug' => Str::slug('Sports & Outdoors'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Toys & Hobbies',
                'slug' => Str::slug('Toys & Hobbies'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Automotive',
                'slug' => Str::slug('Automotive'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Books',
                'slug' => Str::slug('Books'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Baby Products',
                'slug' => Str::slug('Baby Products'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Groceries',
                'slug' => Str::slug('Groceries'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Jewelry',
                'slug' => Str::slug('Jewelry'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Music & Movies',
                'slug' => Str::slug('Music & Movies'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Office Supplies',
                'slug' => Str::slug('Office Supplies'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pet Supplies',
                'slug' => Str::slug('Pet Supplies'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
