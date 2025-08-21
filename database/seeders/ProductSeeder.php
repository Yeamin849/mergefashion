<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * php artisan make:seed ProductSeeder
     * php artisan db:seed --class=ProductSeeder
     */
    public function run(): void
    {
        $products = [
            [
                'pro_id' => '1025',
                'pro_cat' => 'Casual',
                'pro_cover' => 'https://dummyimage.com/300x200/000/fff&text=Casual%20Shoes',
                'pro_name' => 'Casual Shoes',
                'pro_images' => 'https://dummyimage.com/300x200/000/fff&text=Casual%20Shoes1, https://dummyimage.com/300x200/000/fff&text=Casual%20Shoes2',
                'content' => 'New product',
                'discount' => '10',
                'r_price' => '1000',
                'c_price' => '900',
            ],
            [
                'pro_id' => '1026',
                'pro_cat' => 'Loafer',
                'pro_cover' => 'https://dummyimage.com/300x200/000/fff&text=Loafer%20Shoes',
                'pro_name' => 'Loafer Shoes',
                'pro_images' => 'https://dummyimage.com/300x200/000/fff&text=Loafer%20Shoes1, https://dummyimage.com/300x200/000/fff&text=Loafer%20Shoes2',
                'content' => 'New product',
                'discount' => '27',
                'r_price' => '3000',
                'c_price' => '2450',
            ],
            [
                'pro_id' => '1027',
                'pro_cat' => 'Sandals',
                'pro_cover' => 'https://dummyimage.com/300x200/000/fff&text=Sandals%20Shoes',
                'pro_name' => 'Sandals Shoes',
                'pro_images' => 'https://dummyimage.com/300x200/000/fff&text=Sandals%20Shoes1, https://dummyimage.com/300x200/000/fff&text=Sandals%20Shoes2',
                'content' => 'New product',
                'discount' => '15',
                'r_price' => '1650',
                'c_price' => '1200',
            ]
        ];

        foreach ($products as $key => $value) {
            Products::create($value);
        }
    }
}
