<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VehicleModel;
use App\Models\Brand;
use App\Models\Vehicle;
use App\Models\Category;
use App\Models\MultiImage;
use Image;

class ModelController extends Controller
{
    public function AllModel(){
        $models = VehicleModel::latest()->get();
        return view('Backend.VehicleModel.all_model',compact('models'));
    }
    public function AddModel(){
        $brands = Brand::latest()->get();
        $vehicles = Vehicle::latest()->get();
        $categories = Category::latest()->get();
        return view('Backend.VehicleModel.add_model',compact('brands','vehicles','categories'));
    }

    public function StoreModel(Request $request) {
        $image = $request->file('model_thumbnail');
        $img_name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(800,800)->save('upload/modelImage/mainImage/'.$img_name_gen);
        $save_img_url = 'upload/modelImage/mainImage/'.$img_name_gen;

        $model_id = VehicleModel::insertGetId([
            'brand_id' => $request->brand_id,
            'vehicle_id' => $request->vehicle_id,
            'category_id' => $request->category_id,
            'model_name' => $request->model_name,
            'model_slug' => strtolower(str_replace(' ','-',$request->model_name)),
            'model_thumbnail' => $save_img_url,
            'engine_type' => $request->engine_type,
            'displacement' => $request->displacement,
            'weight' => $request->weight,
            'max_power' => $request->max_power,
            'max_torque' => $request->max_torque,
            'mileage' => $request->mileage,
            'emission_type' => $request->emission_type,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        $multi_img = $request->file('multi_img');
        foreach($multi_img as $img){
            $multi_name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            Image::make($multi_img)->resize(800,800)->save('upload/modelImage/multiImage/'.$multi_name_gen);
            $save_multi_url = 'upload/modelImage/multiImage/'.$multi_name_gen;
        }

        MultiImage::insert([
            'model_id' => $model_id,
            'photo_name' => $save_multi_url,
        ]);

        
        $notification = array(
            'message' => 'Model Inserted Successfully',
            'alert-type'=> 'success' 
        );
        
        return redirect()->route('all.model')->with($notification);
        
        
    }
}