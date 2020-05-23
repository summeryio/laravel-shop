<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products  = factory(\App\Models\Product::class, 30)->create();

        foreach ($products as $product) {
            $skus = factory(\App\Models\ProductSku::class, 3)->create(['product_id' => $product->id]);
            $product->update(['price' => $skus->min('price')]);
        }
    }
}
