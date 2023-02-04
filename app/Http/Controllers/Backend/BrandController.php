<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function AllBikeBrand(){
        $brands = Brand::latest()->get();
        return view('Backend.BikeBrand.all_bike_brand',compact('brands'));
    }

    public function AddBikeBrand(){
        return view('Backend.BikeBrand.add_bike_brand');
    }
}