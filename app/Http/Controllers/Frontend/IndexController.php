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

    public function Master(){

        $category_1 = Category::skip(0)->first();
        $category_1_model = VehicleModel::where('category_id',$category_1->id)->orderBy('model_name','ASC')->get();

        $category_2 = Category::skip(1)->first();
        $category_2_model = VehicleModel::where('category_id',$category_2->id)->orderBy('model_name','ASC')->get();
        
        $category_3= Category::skip(2)->first();
        $category_3_model = VehicleModel::where('category_id',$category_3->id)->orderBy('model_name','ASC')->get();
        
        $category_4= Category::skip(3)->first();
        $category_4_model = VehicleModel::where('category_id',$category_4->id)->orderBy('model_name','ASC')->get();
        
       
   
        return view('frontend.index',compact('category_1','category_1_model','category_2','category_2_model',
        'category_3','category_3_model','category_4','category_4_model'));
    }
    
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

    public function ContactAdmin(){
        return view('frontend.contact.contact');
    }

    public function AllBrandShow(){
        return view('frontend.index.all_brand_show');
    }
}