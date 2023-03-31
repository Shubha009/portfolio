<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Illuminate\Support\Carbon;
use App\Models\About;
use Auth;


class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AllAbout()
    {
        $abouts = About::latest()->paginate(5);
        return view('admin/about/index',compact('abouts'));
    }

    public function AddAbout()
    {
        return view('admin/about/addabout');
    }



    public function StoreAbout(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'short_dis' => 'required',
            'long_dis' => 'required',
            
        ],
        [
            'title.required' => 'Please Input About Title',
            'short_dis.required' => 'Please Input About Short Description', 
            'long_dis.required' => 'Please Input About Long Description', 
            
        ]);

        About::insert([
                'title' => $request->title,
                'short_dis' => $request->short_dis,
                'long_dis' => $request->long_dis,
                 'created_at' => Carbon::now()
            ]);

            $notification = array(
                'message' => 'About Added Successfully', 
                'alert-type' => 'success'
            );
    
        return redirect()->route('all/about')->with($notification);
    }

    public function EditeAbout($id)
    {
        $edites = About::find($id);
        return view('admin/about/edite',compact('edites'));
    }


    public function UpdateAbout(Request $request,$id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'short_dis' => 'required',
            'long_dis' => 'required',
            
        ],
        [
            'title.required' => 'Please Input About Title',
            'short_dis.required' => 'Please Input About Short Description', 
            'long_dis.required' => 'Please Input About Long Description', 
            
        ]);
        
        $update = About::find($id)->update([
                'title' => $request->title,
                'short_dis' => $request->short_dis,
                'long_dis' => $request->long_dis,
                 'created_at' => Carbon::now()
            ]);

            $notification = array(
                'message' => 'About Updated Successfully', 
                'alert-type' => 'success'
            );

        return redirect()->route('all/about')->with($notification);;
    }

    public function DeleteAbout($id)
    {
        About::find($id)->delete();

        $notification = array(
            'message' => 'About Deleted Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }




}
