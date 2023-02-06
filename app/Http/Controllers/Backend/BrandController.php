<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Image;

class BrandController extends Controller
{
    public function AllBrand(){
        $brands = Brand::latest()->get();
        return view('Backend.Brand.all_brand',compact('brands'));
    }

    public function AddBrand(){
        return view('Backend.Brand.add_brand');
    }

    public function StoreBrand(Request $request){
        $logo = $request->file('brand_logo');
        $img_name_gen = hexdec(uniqid()).'.'.$logo->getClientOriginalExtension();
        Image::make($logo)->resize(300,300)->save('upload/brandImage/'.$img_name_gen);
        $save_img_url = 'upload/brandImage/'.$img_name_gen;

        Brand::insert([
            'brand_name'=>$request->brand_name,
            'brand_slug'=>strtolower(str_replace(' ','-',$request->brand_name)),
            'brand_logo'=>$save_img_url,
        ]);

        $notification = array(
            'message' => 'Brand Inserted Successfully',
            'alert-type'=> 'success' 
        );
        
        return redirect()->route('all.brand')->with($notification);
    }

    public function EditBrand($id){
        $brands = Brand::findOrFail($id);
        return view('Backend.Brand.edit_brand', compact('brands'));
    }
}