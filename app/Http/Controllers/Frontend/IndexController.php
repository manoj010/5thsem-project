<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VehicleModel;
use App\Models\Brand;
use App\Models\Vehicle;
use App\Models\Category;
use App\Models\MultiImage;

class IndexController extends Controller
{
    public function ModelDetails($id,$slug){
        $models= VehicleModel::findOrFail($id);
        
        $multiImg = MultiImage::where('model_id',$id)->get();

        return view('frontend.index.model_details',compact('models','multiImg'));
    }
    
    public function CategoryBike($id,$slug){
        $categories = Category::where('id',$id)->get();
        
        $models = VehicleModel::where('category_id',$id)->get();
        
    
       return view('frontend.index.bike_categories',compact('categories','models'));
    }
}