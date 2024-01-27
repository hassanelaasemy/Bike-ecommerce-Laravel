<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Trailblazer MTB',
            'Category_Name' => 'Mountain',
            'description' => 'A versatile mountain bike for all terrains.',
            'Brand' => 'Trail Master',
            'image' => 'https://hpcbikes.com/cdn/shop/products/Trailblazerc1website_1024x1024.jpg?v=1667424386',
            'price' => 899.99,
            'oldprice' => 999.99,
            'stock_quantity' => 50,
        ]);

        Product::create([
            'name' => 'Speedster Road Bike',
            'Category_Name' => 'Road',
            'description' => 'A lightweight road bike built for speed enthusiasts.',
            'Brand' => 'Speed Pro',
            'image' => 'https://www.damianharriscycles.co.uk/_images/product-photos/sc/zoom/scott-speedster-40-2023-road-bike-black-a.jpg',
            'price' => 1299.99,
            'oldprice' => 1499.99,
            'stock_quantity' => 30,
        ]);

        Product::create([
            'name' => 'City',
            'Category_Name' => 'City',
            'description' => 'A comfortable and practical bike for urban commuting.',
            'Brand' => 'City Rider',
            'image' => 'https://www.statebicycle.com/cdn/shop/products/3-speed_state_bicycle_co_city_bike_azure_blue_7.jpg?v=1684441305',
            'price' => 499.99,
            'oldprice' => 599.99,
            'stock_quantity' => 40,
        ]);





        Product::create([
            'name' => 'Treck T500',
            'Category_Name' => 'Mountain',
            'description' => 'Explore any trail with this rugged all-terrain mountain bike.',
            'Brand' => 'Adventure Seeker',
            'image' => 'https://images-na.ssl-images-amazon.com/images/I/61gYj6FnlCL.jpg',
            'price' => 749.99,
            'oldprice' => 899.99,
            'stock_quantity' => 35,
        ]);
        
        Product::create([
            'name' => 'Sprint Pro Road Bike',
            'Category_Name' => 'Road',
            'description' => 'For those who crave speed, the Sprint Pro is the ultimate road bike.',
            'Brand' => 'Velocity Racing',
            'image' => 'https://www.bikesdirect.com/products/motobecane/disc-brake-roadbikes/sprintcf-prodisc-blk-21.jpg',
            'price' => 1599.99,
            'oldprice' => 1799.99,
            'stock_quantity' => 25,
        ]);
        
        Product::create([
            'name' => 'Urban Commuter Plus',
            'Category_Name' => 'City',
            'description' => 'Upgrade your urban commute with the stylish and efficient Urban Commuter Plus.',
            'Brand' => 'Metro Wheels',
            'image' => 'https://www.prioritybicycles.com/cdn/shop/products/main_gotham.jpg?v=1650046380',
            'price' => 579.99,
            'oldprice' => 649.99,
            'stock_quantity' => 45,
        ]);
        
    }
}
