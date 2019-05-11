<?php


namespace App\Http\Controllers;
use App\Product;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function show($id)
    {
        // $product = Product::find($id);
        // $stores = $product->stores;

        // $product->stores = $stores;

        // return response()->json($product);
    }
}
