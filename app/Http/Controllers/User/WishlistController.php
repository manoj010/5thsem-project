<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class WishlistController extends Controller
{
    public function WishlistModels(){
        $wishlist = Wishlist::where('user_id',Auth::id())->get();

        return view('frontend.index.wishlist',compact('wishlist'));

    }

    public function AddToWishList(Request $request, $id){
        dd($id);
    }
}