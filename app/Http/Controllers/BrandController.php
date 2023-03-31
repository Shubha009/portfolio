<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;
use App\Models\Brand;

use Illuminate\Support\Carbon;
use Auth;
use Image;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function AllBrand()
    {
        $brands = Brand::latest()->paginate(5);
        // $trashBrand = Brand::onlyTrashed()->latest()->paginate(3);
        return view('admin/Brand/index',compact('brands'));
    }


    public function AddBrand(Request $request)
    {
        $validatedData = $request->validate([
            'brand_name' => 'required|unique:brands|min:4',
            'brand_image' => 'required|mimes:jpg,jpeg,png',
            
        ],
        [
            'brand_name.required' => 'Please Input Brand Name',
            'brand_name.max' => 'Brand Name Less Then 15 Chars', 
            'brand_image.required' => 'Please Select Brand Image', 
            'brand_image.min' => 'Brand Name Less Then 4 Chars',
        ]);

        // Manual Image insert
        /* 
        $brand_image = $request->file('brand_image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($brand_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/brand/';
        $last_img = $up_location.$img_name;
        $brand_image->move($up_location,$img_name); 
        
        */
        
        // Image Intervansion use
        $brand_image = $request->file('brand_image');
        $name_gen = hexdec(uniqid()).'.'.$brand_image->getClientOriginalExtension();
        Image::make($brand_image)->resize(300, 300)->save('image/brand/'.$name_gen);
        $last_img = 'image/brand/'.$name_gen;

        Brand::insert([
            'brand_name' => $request->brand_name,
            'brand_image' =>$last_img,
            'created_at' =>Carbon::now()
        ]);

        $notification = array(
            'message' => 'Brand Name Added Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
        
    }

    public function Edite($id)
    {
        $brands = Brand::find($id);
        return view('admin/brand/edite',compact('brands'));
    }

    public function Update(Request $request,$id)
    {
        $validatedData = $request->validate([
            'brand_name' => 'required|min:4',
            'brand_image' => 'image|mimes:jpeg,png,jpg',
            ],

            [
            'brand_name.required' => 'Please Input Brand Name',
            'brand_name.max' => 'Brand Name Less Then 15 Chars', 
             
            'brand_image.min' => 'Brand Name Less Then 4 Chars',
            ]);

        
        $change_image = $request->old_image;
        $brand_image = $request->file('brand_image');
        if ($brand_image) {
            $name_gen = hexdec(uniqid());
        $img_ext = strtolower($brand_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/brand/';
        $last_img = $up_location.$img_name;
        $brand_image->move($up_location,$img_name);

        unlink($change_image);
        Brand::find($id)->update([
            'brand_name' => $request->brand_name,
            'brand_image' =>$last_img,
            'created_at' =>Carbon::now()
        ]);

        $notification = array(
            'message' => 'Brand Name Updated Successfully', 
            'alert-type' => 'success'
        );

            return redirect()->route('brand/all')->with($notification);

        }else{

            Brand::find($id)->update([
                'brand_name' => $request->brand_name,
                'created_at' =>Carbon::now()
            ]);
    
            $notification = array(
            'message' => 'Brand Name Updated Successfully', 
            'alert-type' => 'success'
            );

            return redirect()->route('brand/all')->with($notification);

        }
        
        
    }
    
    public function Delete($id)
    {
        $image = Brand::find($id);
        $delete_image =$image->brand_image;
        unlink($delete_image);

        Brand::find($id)->delete();

        $notification = array(
            'message' => 'Brand Deleted Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->back()->with('$notification');
    }

    // public function SoftDelete($id)
    // {
    //     $image = Brand::find($id);
    //     $delete_image =$image->brand_image;
    //     // unlink($delete_image);

    //     Brand::find($id)->delete();
    //     return redirect()->back()->with('success','Brand Deleted Successfully');
    // }


    // public function Restore($id)
    // {
    //     $restore = Brand::withTrashed()->find($id)->restore();
    //     return redirect()->back()->with('success','Brand Restore Successfully');
    // }

    // public function PDelete($id)
    // {
    //     $pdelete = Brand::withTrashed()->find($id)->forceDelete();
    //     return redirect()->back()->with('success','Category Permanently Deleted ');
    // }






}
