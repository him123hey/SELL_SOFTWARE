<?php

namespace Database\Seeders;
use App\Models\Product;
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
        // product seeder
        $data = [
            // products
            [
                'product_name' => 'product1',
                'product_img' => 'images/software1.jpeg',
            ],
            [
                'product_name' => 'product2',
                'product_img' => 'images/software2.png',
            ],
            [
                'product_name' => 'product3',
                'product_img' => 'images/software3.jpeg',
            ],
        ];

        foreach($data as $dataRow){
            Product::create($dataRow);
        }
    }
}
