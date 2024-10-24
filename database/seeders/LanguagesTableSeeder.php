<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::insert([
            ['name' => 'English', 'country' => 'United States', 'status' => true, 'created_by' => 1],
            ['name' => 'Spanish', 'country' => 'Spain', 'status' => true, 'created_by' => 1],
            ['name' => 'French', 'country' => 'France', 'status' => true, 'created_by' => 1],
            // Add more entries as needed
        ]);
    }
}