<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            'category_name' => "Web Developing"
        ]);
        Category::insert([
            'category_name' => "App Developing"
        ]);
        Category::insert([
            'category_name' => "Server Developing"
        ]);
    }
}
