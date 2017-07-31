<?php

namespace CodeProject\Http\Controllers;

use CodeProject\Entities\Product;
use CodeProject\Repositories\ProductRepository;
use CodeProject\Repositories\ProductRepositoryEloquent;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(ProductRepository $repository)
    {
        return $repository->all();
    }

    public function store(Request $request)
    {
        return Product::create($request->all());
    }

    public function show($id)
    {
        return Product::find($id);
    }

    public function destroy($id)
    {
        Product::find($id)->delete();
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->save();
    }
}
