<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Testimonial;

use Auth;
use Image;

class TestimonialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function TestiMonial()
    {   $testimonials = Testimonial::latest()->paginate(6);
        return view('admin/testimonial/index',compact('testimonials'));
    }

    public function AddTestiMonial()
    {
        return view('admin/testimonial/testimonial_add');
    }

    public function StoreTestiMonial(Request $request)
    {
        // $validatedData = $request->validate([
        //     'heading' => 'required',
        // ],
        // [
        //     'heading.required' => 'Please Input Heading',
             
        // ]);
        
        // Image Intervansion use
        $testimonial_image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$testimonial_image->getClientOriginalExtension();
        Image::make($testimonial_image)->resize(600, 600)->save('image/testimonials/'.$name_gen);
        $last_img = 'image/testimonials/'.$name_gen;

        Testimonial::insert([
                'title' => $request->title,
                'designation' => $request->designation,
                'description' => $request->description,
                'image' =>$last_img,
                
                 'created_at' => Carbon::now()
            ]);

        $notification = array(
            'message' => 'Testimonial Added Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->route('testimonial/all')->with($notification);
    }

    public function EditTestiMonial($id)
    {
        $edit_testimonials = Testimonial::find($id);
        return view('admin/testimonial/edit',compact('edit_testimonials'));
    }


    public function UpdateTestiMonial(Request $request, $id)
    {
        // $validatedData = $request->validate([
        //     'title' => 'required|min:4',
        //     'description' => 'required|max:250',
        //     'image' => 'image|mimes:jpeg,png,jpg',
            
        // ],
        // [
        //     'title.required' => 'Please Input Slider Title',
        //     'title.min' => 'Slider Title Less Then 4 Chars', 
        //     'description.required' => 'Please Input Slider Description', 
        //     'description.max' => 'Slider Description will be Max 250', 
        //     // 'image.min' => 'Please Select Slider Image',
        // ]);

       
        
        // Image Intervansion use
        $change_testimonials_image = $request->old_testimonials_image;
        $testimonial_image = $request->file('image');
        if ($testimonial_image) {
            $name_gen = hexdec(uniqid());
        $img_ext = strtolower($testimonial_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/testimonials/';
        $team_last_img = $up_location.$img_name;
        $testimonial_image->move($up_location,$img_name);

        unlink($change_testimonials_image);
        Testimonial::find($id)->update([
            'title' => $request->title,
            'designation' => $request->designation,
            'description' => $request->description,
            'image' =>$team_last_img,
            'created_at' =>Carbon::now()
        ]);

        $notification = array(
            'message' => 'Testimonial Updated Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->route('testimonial/all')->with($notification);

        }else{

            Testimonial::find($id)->update([
                'title' => $request->title,
                'designation' => $request->designation,
                'description' => $request->description,
                'created_at' =>Carbon::now()
            ]);
            
            $notification = array(
                'message' => 'Testimonial Updated Successfully', 
                'alert-type' => 'success'
                );

            return redirect()->route('testimonial/all')->with($notification);
        }

    }


    public function DeleteTestiMonial($id)
    {
        $delete_testimonial_image = Testimonial::find($id);
        $delete_image =$delete_testimonial_image->image;
        unlink($delete_image);

        Testimonial::find($id)->delete();

        $notification = array(
            'message' => 'Testimonial Deleted Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->back()->with($notification);
    }

}
