<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();

        $product->create([
            'category_id' => 9,
            'img_url' => 'images/product-1.jpg',
            'slug' => Str::slug('product-1'),
            'name' => 'Product 1',
            'description' => 'Ini adalah product 1',
            'price' => 56000,
            'stock' => 100
        ]);
        $product->create([
            'category_id' => 9,
            'img_url' => 'images/product-2.jpg',
            'slug' => Str::slug('product-2'),
            'name' => 'Product 2',
            'description' => 'Ini adalah product 2',
            'price' => 40000,
            'stock' => 100
        ]);
        $product->create([
            'category_id' => 9,
            'img_url' => 'images/product-3.jpg',
            'slug' => Str::slug('product-3'),
            'name' => 'Product 3',
            'description' => 'Ini adalah product 3',
            'price' => 48000,
            'stock' => 100
        ]);
        $product->create([
            'category_id' => 9,
            'img_url' => 'images/product-4.jpg',
            'slug' => Str::slug('product-4'),
            'name' => 'Product 4',
            'description' => 'Ini adalah product 4',
            'price' => 52000,
            'stock' => 100
        ]);
        $product->create([
            'category_id' => 9,
            'img_url' => 'images/product-5.jpg',
            'slug' => Str::slug('product-5'),
            'name' => 'Product 5',
            'description' => 'Ini adalah product 5',
            'price' => 60000,
            'stock' => 100
        ]);
        $product->create([
            'category_id' => 9,
            'img_url' => 'images/product-6.jpg',
            'slug' => Str::slug('product-6'),
            'name' => 'Product 6',
            'description' => 'Ini adalah product 6',
            'price' => 72000,
            'stock' => 100
        ]);
    }
}
