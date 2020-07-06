<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'MacBook Pro',
            'details' => '15 inch, 1TB HDD, 32GB RAM',
            'price' => 2499.99,
            'description' => 'MackBook Pro',
            'catagory_id' => 1,
            'image_path' => 'macbook-pro.png'
        ]);

        Product::create([
            'name' => 'Dell Vostro 3557',
            'details' => '15 inch, 1TB HDD, 8GB RAM',
            'price' => 1499.99,
            'description' => 'Dell Vostro 3557',
            'catagory_id' => 1,
            'image_path' => 'dell-v3557.png'
        ]);

        Product::create([
            'name' => 'iPhone 11 Pro',
            'details' => '6.1 inch, 64GB 4GB RAM',
            'price' => 649.99,
            'description' => 'iPhone 11 Pro',
            'catagory_id' => 2,
            'image_path' => 'iphone-11-pro.png'
        ]);

        Product::create([
            'name' => 'Redmi 610D ',
            'details' => '6.1 inch, 64GB 4GB RAM',
            'price' => 8.99,
            'description' => 'Remax 610D ',
            'catagory_id' => 2,
            'image_path' => 'remax-610d.jpg'
        ]);

    }
}
