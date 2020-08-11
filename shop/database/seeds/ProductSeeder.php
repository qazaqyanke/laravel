<?php

use App\Product;
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
        $products = new Product([
            'image' => 'https://lh3.googleusercontent.com/VSwHQjcAttxsLE47RuS4PqpC4LT7lCoSjE7Hx5AW_yCxtDvcnsHHvm5CTuL5BPN-uRTP',
            'title' => 'Minecraft game for kids',
            'description' => 'autistic screaming',
            'price' => 59.99,
        ]);

        $products->save();

        $products = new Product([
            'image' => 'https://cdn-products.eneba.com/resized-products/lvoic2oakbklg2dytgpa_390x400_1x-0.jpg',
            'title' =>'Lorem ipsum',
            'description' => 'autistic screaming',
            'price' => 59.99,
        ]);

        $products->save();

        $products = new Product([
            'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/9/93/Horizon_Zero_Dawn.jpg/250px-Horizon_Zero_Dawn.jpg',
            'title' => 'Lorem Ipsum',
            'description' => 'autistic screaming',
            'price' => 59.99,
        ]);

        $products->save();

        $products = new Product([
            'image' => 'https://upload.wikimedia.org/wikipedia/az/thumb/2/20/GTA_5_Cover.jpg/250px-GTA_5_Cover.jpg',
            'title' => 'Lorem ipsum',
            'description' => 'autistic screaming',
            'price' => 59.99,
        ]);

        $products->save();

    }
}
