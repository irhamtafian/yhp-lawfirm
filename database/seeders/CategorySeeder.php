<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Event'],
            ['name' => 'News'],
        ];

        foreach ($categories as $category) {
            $category['slug'] = Str::slug($category['name']);
            Category::create($category);
        }
    }
}