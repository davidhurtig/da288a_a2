<?php


namespace App\Http\Controllers;
use App\Product;
use App\Store;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function show($id)
    {
        $product = Product::find($id);
        $reviews = $product->reviews;
        $stores = $product->stores;

        $product->reviews = $reviews;
        $product->stores = $stores;

        return response()->json($product);
    }

    public function create(Request $request)
    {
        $product = new Product;
        $product->title = $request->input("title");
        $product->brand = $request->input("brand");
        $product->price = $request->input("price");
        $product->image = $request->input("image");
        $product->description = $request->input("description");

        $product->save();

        foreach ($request->input("stores") as $value) {
            $store = Store::find($value);
            // Vet ej hur man får med created_at och updated_at i tabellen product_store
            // Bör finnas ett mer optimerat sätt att göra detta också
            $product->stores()->save($store);
        }

        $status = ['success' => true];

        return response()->json($status);
    }
}
