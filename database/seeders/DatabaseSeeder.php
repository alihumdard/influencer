<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([BrandTypeSeeder::class]);
        $this->call([BusinessTypeSeeder::class]);
    }
}


/*

api/brand/AppDBController
api/influencer/AppDBController

admin/brand/AppDBController
admin/influencer/AppDBController



brand/api/AppDBController
brand/admin/AppDBController

influencer/api/AppDBController
influencer/admin/AppDBController

*/
