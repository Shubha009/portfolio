<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Carbon;
use Auth;
use Image;

class FrontendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function HomeSlider()
    {   $sliders = Slider::latest()->paginate(3);
        return view('admin/Slider/index',compact('sliders'));
    }

    public function AddSlider()
    {
        return view('admin/Slider/addslider');
    }

    public function StoreSlider(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:sliders|min:4',
            'description' => 'required|max:250',
            'image' => 'required|mimes:jpg,jpeg,png',
            
        ],
        [
            'title.required' => 'Please Input Slider Title',
            'title.min' => 'Slider Title Less Then 4 Chars', 
            'description.required' => 'Please Input Slider Description', 
            'description.max' => 'Slider Description will be Max 250', 
            'image.required' => 'Please Select Slider Image',
        ]);

       
        
        // Image Intervansion use
        $sliders_image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$sliders_image->getClientOriginalExtension();
        Image::make($sliders_image)->resize(1920, 1088)->save('image/slider/'.$name_gen);
        $last_img = 'image/slider/'.$name_gen;

        Slider::insert([
            'title' => $request->title,
            'description' => $request->description,
            'image' =>$last_img,
            'created_at' =>Carbon::now()
        ]);
        
        $notification = array(
            'message' => 'Slider Added Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->route('home/slider')->with($notification);
    }

    public function SliderEdite($id)
    {
        $sliders = Slider::find($id);
        return view('admin/Slider/edite',compact('sliders'));
    }

    public function SliderUpdate(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:4',
            'description' => 'required|max:1000',
            'image' => 'image|mimes:jpeg,png,jpg',
            
        ],
        [
            'title.required' => 'Please Input Slider Title',
            'title.min' => 'Slider Title Less Then 4 Chars', 
            'description.required' => 'Please Input Slider Description', 
            'description.max' => 'Slider Description will be Max 1000 Character', 
            // 'image.min' => 'Please Select Slider Image',
        ]);

       
        
        // Image Intervansion use
        $change_sliders = $request->old_slide;
        $slider_image = $request->file('image');
        if ($slider_image) {
            $name_gen = hexdec(uniqid());
        $img_ext = strtolower($slider_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/slider/';
        $last_img = $up_location.$img_name;
        $slider_image->move($up_location,$img_name);

        unlink($change_sliders);
        Slider::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' =>$last_img,
            'created_at' =>Carbon::now()
        ]);

        $notification = array(
            'message' => 'Slider Updated Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->route('home/slider')->with($notification);
        
        }else{

            Slider::find($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'created_at' =>Carbon::now()
            ]);

            $notification = array(
                'message' => 'Slider Updated Successfully', 
                'alert-type' => 'success'
                );
    
            return redirect()->route('home/slider')->with($notification);
        }
    }

    public function SliderDelete($id)
    {
        $Sliders = Slider::find($id);
        $delete_image =$Sliders->image;
        unlink($delete_image);

        Slider::find($id)->delete();

        $notification = array(
            'message' => 'Slider Deleted Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->back()->with($notification);
    }



}
