<?php

namespace Modules\Product\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $products = [
            [
                'name' => 'Apple iPhone 15',
                'slug' => Str::slug('Apple iPhone 15'),
                'description' => 'Latest iPhone model with improved camera and performance.',
                'price' => 999.99,
                'stock' => 50,
                'sku' => 'IPH15-001',
                'is_active' => true,
                'image' => 'products/iphone15.jpg',
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'name' => 'Samsung Galaxy S23',
                'slug' => Str::slug('Samsung Galaxy S23'),
                'description' => 'High-end Android smartphone with excellent display.',
                'price' => 899.99,
                'stock' => 40,
                'sku' => 'SGS23-001',
                'is_active' => true,
                'image' => 'products/galaxy-s23.jpg',
                'category_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'name' => 'MacBook Pro 16"',
                'slug' => Str::slug('MacBook Pro 16"'),
                'description' => 'Powerful laptop for professionals with M2 chip.',
                'price' => 2499.99,
                'stock' => 15,
                'sku' => 'MBP16-001',
                'is_active' => true,
                'image' => 'products/macbook-pro16.jpg',
                'category_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'name' => 'Dell XPS 13',
                'slug' => Str::slug('Dell XPS 13'),
                'description' => 'Compact laptop with powerful performance.',
                'price' => 1299.99,
                'stock' => 20,
                'sku' => 'DX13-001',
                'is_active' => true,
                'image' => 'products/dell-xps13.jpg',
                'category_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'name' => 'Sony WH-1000XM5',
                'slug' => Str::slug('Sony WH-1000XM5'),
                'description' => 'Noise-cancelling wireless headphones.',
                'price' => 399.99,
                'stock' => 60,
                'sku' => 'SONYWH-001',
                'is_active' => true,
                'image' => 'products/sony-wh1000xm5.jpg',
                'category_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'name' => 'Bose QuietComfort 45',
                'slug' => Str::slug('Bose QuietComfort 45'),
                'description' => 'High-quality noise-cancelling headphones.',
                'price' => 349.99,
                'stock' => 50,
                'sku' => 'BOSEQC45-001',
                'is_active' => true,
                'image' => 'products/bose-qc45.jpg',
                'category_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'name' => 'Logitech MX Master 3',
                'slug' => Str::slug('Logitech MX Master 3'),
                'description' => 'Ergonomic wireless mouse for productivity.',
                'price' => 99.99,
                'stock' => 100,
                'sku' => 'LOGMX3-001',
                'is_active' => true,
                'image' => 'products/logitech-mx3.jpg',
                'category_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'name' => 'Apple Magic Keyboard',
                'slug' => Str::slug('Apple Magic Keyboard'),
                'description' => 'Wireless keyboard compatible with Mac devices.',
                'price' => 129.99,
                'stock' => 80,
                'sku' => 'AMK-001',
                'is_active' => true,
                'image' => 'products/apple-magic-keyboard.jpg',
                'category_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'name' => 'Canon EOS R6',
                'slug' => Str::slug('Canon EOS R6'),
                'description' => 'Full-frame mirrorless camera with excellent autofocus.',
                'price' => 2499.99,
                'stock' => 10,
                'sku' => 'CANONEOSR6-001',
                'is_active' => true,
                'image' => 'products/canon-eos-r6.jpg',
                'category_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'name' => 'Nikon Z6 II',
                'slug' => Str::slug('Nikon Z6 II'),
                'description' => 'High-performance full-frame mirrorless camera.',
                'price' => 1999.99,
                'stock' => 12,
                'sku' => 'NIKONZ6-001',
                'is_active' => true,
                'image' => 'products/nikon-z6ii.jpg',
                'category_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'name' => 'Samsung Galaxy Tab S8',
                'slug' => Str::slug('Samsung Galaxy Tab S8'),
                'description' => 'High-end Android tablet for work and entertainment.',
                'price' => 799.99,
                'stock' => 30,
                'sku' => 'SGTABS8-001',
                'is_active' => true,
                'image' => 'products/galaxy-tab-s8.jpg',
                'category_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
            [
                'name' => 'iPad Pro 12.9"',
                'slug' => Str::slug('iPad Pro 12.9"'),
                'description' => 'Powerful tablet with M2 chip for professionals.',
                'price' => 1099.99,
                'stock' => 25,
                'sku' => 'IPADPRO12-001',
                'is_active' => true,
                'image' => 'products/ipad-pro-12.jpg',
                'category_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'deleted_at' => null,
            ],
        ];

        DB::table('products')->insert($products);
    }
}
