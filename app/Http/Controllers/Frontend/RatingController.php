<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function AddRating(Request $request){
        $user_rating = $request->product_rating;
        dd($user_rating);
    }
}