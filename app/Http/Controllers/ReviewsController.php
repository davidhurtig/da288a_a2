<?php


namespace App\Http\Controllers;
use App\Review;
use Illuminate\Support\Facades\DB;

class ReviewsController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return response()->json($reviews);
    }
}
