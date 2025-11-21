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
            'slug' => 'electronics',
        ]);

        Category::create([
            'name' => 'Books',
            'slug' => 'books',
        ]);

        Category::create([
            'name' => 'Clothing',
            'slug' => 'clothing',
        ]);
    }
}
