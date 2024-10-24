<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gender;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gender::insert([
            ['title' => 'Male', 'status' => true, 'created_by' => 1],
            ['title' => 'Female', 'status' => true, 'created_by' => 1],
            ['title' => 'Other', 'status' => true, 'created_by' => 1],
            // Add more genders as needed
        ]);
    }
}
