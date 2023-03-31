<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\TeamHeading;
use App\Models\About_Team;
use App\Models\AboutTeamMembar;
use Auth;
use Image;

class AboutTeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function TeamHeading()
    {   $team_headings = TeamHeading::latest()->paginate(3);
        return view('admin/team/index',compact('team_headings'));
    }
    
    public function AddHeading()
    {
        return view('admin/team/addheading');
    }

    public function StoreHeading(Request $request)
    {
        $validatedData = $request->validate([
            'heading' => 'required',
        ],
        [
            'heading.required' => 'Please Input Heading',
             
        ]);

        TeamHeading::insert([
                'heading' => $request->heading,
                 'created_at' => Carbon::now()
            ]);

            $notification = array(
                'message' => 'Heading Added Successfully', 
                'alert-type' => 'success'
            );
        return redirect()->route('team/heading')->with($notification);
    }

    public function EditHeading($id)
    {
        $heading = TeamHeading::find($id);
        return view('admin/team/edit',compact('heading'));
    }

    
    public function UpdateHeading(Request $request,$id)
    {
        $validatedData = $request->validate([
            'heading' => 'required',
        ],
        [
            'heading.required' => 'Please Input Heading',
             
        ]);

        $updates = TeamHeading::find($id)->update([
                'heading' => $request->heading,
                 'created_at' => Carbon::now()
            ]);

            $notification = array(
                'message' => 'Heading Updated Successfully', 
                'alert-type' => 'success'
            );

        return redirect()->route('team/heading')->with($notification);
    }

    public function DeleteHeading($id)
    {
        $delete = TeamHeading::find($id)->delete();
        $notification = array(
            'message' => 'Heading Deleted Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    // Team Membar Part

    public function TeamMembar()
    {   $team_membars = AboutTeamMembar::latest()->paginate(6);
        return view('admin/team/team_membar',compact('team_membars'));
    }

    public function TeamMembarAdd()
    {
        return view('admin/team/team_membar_add');
    }

    public function TeamMembarStore(Request $request)
    {
        // $validatedData = $request->validate([
        //     'heading' => 'required',
        // ],
        // [
        //     'heading.required' => 'Please Input Heading',
             
        // ]);
        
        // Image Intervansion use
        $team_membar_image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$team_membar_image->getClientOriginalExtension();
        Image::make($team_membar_image)->resize(600, 600)->save('image/team/'.$name_gen);
        $last_img = 'image/team/'.$name_gen;

        AboutTeamMembar::insert([
                'title' => $request->title,
                'designation' => $request->designation,
                'image' =>$last_img,
                'icon1' => $request->icon1,
                'url1' => $request->url1,
                'icon2' => $request->icon2,
                'url2' => $request->url2,
                'icon3' => $request->icon3,
                'url3' => $request->url3,
                'icon4' => $request->icon4,
                'url4' => $request->url4,
                 'created_at' => Carbon::now()
            ]);

            $notification = array(
                'message' => 'Team Membar Added Successfully', 
                'alert-type' => 'success'
            );
        return redirect()->route('team/membar')->with($notification);
    }

    public function EditTeamMembar($id)
    {
        $team_membars = AboutTeamMembar::find($id);
        return view('admin/team/team_membar_edit',compact('team_membars'));
    }


    public function UpdateTeamMembar(Request $request, $id)
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
        $change_team_membar_image = $request->old_team_image;
        $team_membar_image = $request->file('image');
        if ($team_membar_image) {
            $name_gen = hexdec(uniqid());
        $img_ext = strtolower($team_membar_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/team/';
        $team_last_img = $up_location.$img_name;
        $team_membar_image->move($up_location,$img_name);

        unlink($change_team_membar_image);
        AboutTeamMembar::find($id)->update([
            'title' => $request->title,
            'designation' => $request->designation,
            'image' =>$team_last_img,
            'icon1' => $request->icon1,
            'url1' => $request->url1,
            'icon2' => $request->icon2,
            'url2' => $request->url2,
            'icon3' => $request->icon3,
            'url3' => $request->url3,
            'icon4' => $request->icon4,
            'url4' => $request->url4,
            'created_at' =>Carbon::now()
        ]);

        $notification = array(
            'message' => 'Team Membar Updated Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('team/membar')->with($notification);

        }else{

            AboutTeamMembar::find($id)->update([
                'title' => $request->title,
                'designation' => $request->designation,
                'icon1' => $request->icon1,
                'url1' => $request->url1,
                'icon2' => $request->icon2,
                'url2' => $request->url2,
                'icon3' => $request->icon3,
                'url3' => $request->url3,
                'icon4' => $request->icon4,
                'url4' => $request->url4,
                'created_at' =>Carbon::now()
            ]);
    
            $notification = array(
            'message' => 'Team Membar Updated Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->route('team/membar')->with($notification);

        }

    }


    public function DeleteTeamMembar($id)
    {
        $delete_team_image = AboutTeamMembar::find($id);
        $delete_image =$delete_team_image->image;
        unlink($delete_image);

        AboutTeamMembar::find($id)->delete();

        $notification = array(
            'message' => 'Team Membar Deleted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }


}
