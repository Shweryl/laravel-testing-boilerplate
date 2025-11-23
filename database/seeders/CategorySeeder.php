<?php

namespace Database\Seeders;

use App\Domains\Auth\Models\Category;
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
        Category::create([
            'name' => 'Electronics',
            'description' => 'Devices and gadgets',
            'slug' => 'electronics',
        ]);

        Category::create([
            'name' => 'Books',
            'description' => 'Various kinds of books',
            'slug' => 'books',
        ]);

        Category::create([
            'name' => 'Clothing',
            'description' => 'Apparel and accessories',
            'slug' => 'clothing',
        ]);
    }
}
