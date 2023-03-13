<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VehicleModel;
use App\Models\Brand;
use App\Models\Vehicle;
use App\Models\Category;
use App\Models\MultiImage;
use App\Models\Rating;
use App\Models\Review;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FilterController extends Controller
{
    public function FilterBikesAndScooters(){

        $models = VehicleModel::query();

        if (!empty($_GET['brand'])){
            $slugs = explode(',',$_GET['brand']);
            $brandId = Brand::select('id')->whereIn('brand_slug',$slugs)->pluck('id')->toArray();
            $models = VehicleModel::whereIn('brand_id',$brandId)->orderBy('id','DESC')->get();
        }
        else {
            $models = VehicleModel::orderBy('id','DESC')->get();
        }

        
        $brands = Brand::latest()->get();
        
        return view('frontend.index.search.filter_all_bikes&scooters',compact('models','brands'));
    }

    public function AllFilter(Request $request){
        $data = $request->all();

        //filter for brand

        $brandUrl = "";

        if(!empty($data['brand'])) {
            foreach($data['brand'] as $brand){
                if(empty($brandUrl)) {
                    $brandUrl .= '&brand='.$brand;
                }else {
                    $brandUrl .= ','.$brand;
                }
            }
        }

        return redirect()->route('all.filter.bikes&scooters',$brandUrl);
    }
}