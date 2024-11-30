<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Product 1',
                'description' => 'This is a description for Product 1.',
                'price' => 19.99,
                'stock' => 100,
                'sku' => 'PROD1',
                'type' => 'simple',
            ],
            [
                'name' => 'Product 2',
                'description' => 'This is a description for Product 2.',
                'price' => 29.99,
                'stock' => 50,
                'sku' => 'PROD2',
                'type' => 'simple',
            ],
            [
                'name' => 'Product 3',
                'description' => 'This is a description for Product 3.',
                'price' => 9.99,
                'stock' => 200,
                'sku' => 'PROD3',
                'type' => 'simple',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
