<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Electronics'],
            ['name' => 'Books'],
            ['name' => 'Clothing'],
            ['name' => 'Furniture'],
            ['name' => 'Toys'],
            ['name' => 'Sports'],
            ['name' => 'Food'],
            ['name' => 'Others'],
            ['name' => 'Groceries'],
            ['name' => 'Automobiles'],

        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
