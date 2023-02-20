<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class WishlistController extends Controller
{
    public function AddWishlist(Request $request, $id){
        
        if(Auth::check()){
            $IsUser = Wishlist::where('user_id',Auth::id())->where('model_id',$id)->first();
            if(!$User) {
                Wishlist::insert([
                    'user_id' =>Auth::id(),
                    'model_id' =>$product_id,
                    'created_at' => Carbon::now(),
                ]);
                return response()->json(['success'=> 'Successfully Added On Your Wishlist']);
            }else {
                return response()->json(['error'=> 'This Model has already on Your wishlist']);
            }
        }
        else {
            return response()->json(['error'=> 'At First Login Your Account']);
        }
    }
}