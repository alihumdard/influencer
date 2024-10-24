<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ContentCategory;

class ContentCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContentCategory::insert([
            ['title' => 'Technology', 'status' => true, 'created_by' => 1],
            ['title' => 'Health', 'status' => true, 'created_by' => 1],
            ['title' => 'Education', 'status' => true, 'created_by' => 1],
            // Add more categories as needed
        ]);
    }
}
