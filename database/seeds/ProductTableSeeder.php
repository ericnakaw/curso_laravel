<?php

use Illuminate\Database\Seeder;
use \CodeProject\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        factory(Product::class,10)->create();
    }
}
