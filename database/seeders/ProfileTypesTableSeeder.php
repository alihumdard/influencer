<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProfileType;

class ProfileTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProfileType::insert([
            ['title' => 'Admin', 'status' => true, 'created_by' => 1],
            ['title' => 'User', 'status' => true, 'created_by' => 1],
            ['title' => 'Manager', 'status' => true, 'created_by' => 1],
            // Add more profile types as needed
        ]);
    }
}
