<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VehicleModel;
use App\Models\Brand;
use App\Models\Vehicle;
use App\Models\Category;
use App\Models\MultiImage;

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
}