<?php


namespace App\Http\Controllers;
use App\Store;
use Illuminate\Support\Facades\DB;

class StoresController extends Controller
{
    public function index()
    {
        $stores = Store::all();
        return response()->json($stores);
    }
}
