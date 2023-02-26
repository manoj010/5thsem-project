<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\VehicleModel;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ReviewController extends Controller
{
    public function AddReview($model_slug){
        $models = VehicleModel::where('model_slug',$model_slug)->first();
        

        if($models){
           
            return view("frontend.index.review",compact('models'));
            
        }
         else{
         $notification = array(
              'message' => 'The link you follow was broken So you need you login first',
              'alert-type'=> 'error' 
          );
          
          return redirect()->back()->with($notification);

        }
    }

    public function PostReview(Request $request){
        $model_id = $request->model_id;
        $user_review = $request->user_review;
        
        $review_check = Review::where('user_id',Auth::id())->where('model_id',$model_id)->first();
        

        if($review_check){
            $review_check->user_review = $user_review;
            $review_check->update();
            
        }else{
            Review::insert([
                'user_id' => Auth::id(),
                'model_id' => $model_id,
                'user_review' => $user_review,
                'created_at'=>Carbon::now(),
            ]);
           

            $notification = array(
                'message' => 'Thank You for writing a review',
                'alert-type'=> 'success' 
            );
            
            return redirect()->back()->with($notification);
        }
    }

    public function EditReview()
}