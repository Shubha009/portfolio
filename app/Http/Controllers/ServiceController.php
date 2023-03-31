<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service_category;
use App\Models\ServiceHeading;
use App\Models\Service;
use App\Models\Service_feture_heading;
use App\Models\Service_feture;
use Illuminate\Support\Carbon;
use Auth;


class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function AllServiceCategory()
    {
        $service_category_items = Service_category::latest()->paginate(5);
        return view('admin/service_category/index', compact('service_category_items'));
    }


    public function AddServiceCategory()
    {
        
        return view('admin/service_category/add_service_category');
    }


    public function StoreServiceCategory(Request $request)
    {
        
        Service_category::insert([
                
                'service_category_name' => $request->service_category_name,
                 'created_at' => Carbon::now()
            ]);

            $notification = array(
                'message' => 'Service Category Added Successfully', 
                'alert-type' => 'success'
                );

        return redirect()->route('all/service/category')->with($notification);
    }

    public function EditServiceCategory($id)
    {
        $edit_servicecategory = Service_category::find($id);
        return view('admin/service_category/edit_service_category',compact('edit_servicecategory'));
    }

    public function UpdateServiceCategory(Request $request, $id)
    {
        // $validatedData = $request->validate([
        //     'heading' => 'required',
        // ],
        // [
        //     'heading.required' => 'Please Input Heading',
             
        // ]);
        
        // Image Intervansion use
        // Image Intervansion use
        

        $update = Service_category::find($id)->update([
                
                'service_category_name' => $request->service_category_name,
                'created_at' => Carbon::now()
            ]);

            $notification = array(
                'message' => 'Service Category Updated Successfully', 
                'alert-type' => 'success'
                );
               
        return redirect()->route('all/service/category')->with($notification);
        
    
    }

    public function DeleteServiceCategory($id)
    {
        

        Service_category::find($id)->delete();

        $notification = array(
            'message' => 'Service Category Deleted Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->back()->with($notification);
    }




// ===================================

    public function ServiceHeading()
    {   
        $service_headings = ServiceHeading::latest()->paginate(3);
        return view('admin/service/service_heading',compact('service_headings'));
    }
    
    public function AddServiceHeading()
    {
        return view('admin/service/add_service_heading');
    }

    public function StoreServiceHeading(Request $request)
    {
        // $validatedData = $request->validate([
        //     'heading' => 'required',
        // ],
        // [
        //     'heading.required' => 'Please Input Heading',
             
        // ]);

        ServiceHeading::insert([
                'heading' => $request->heading,
                 'created_at' => Carbon::now()
            ]);

        $notification = array(
            'message' => 'Heading Added Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->route('service/heading')->with($notification);
    }

    public function EditServiceHeading($id)
    {
        $heading = ServiceHeading::find($id);
        return view('admin/service/service_heading_edit',compact('heading'));
    }

    
    public function UpdateServiceHeading(Request $request,$id)
    {
        // $validatedData = $request->validate([
        //     'heading' => 'required',
        // ],
        // [
        //     'heading.required' => 'Please Input Heading',
             
        // ]);

        $updates = ServiceHeading::find($id)->update([
                'heading' => $request->heading,
                 'created_at' => Carbon::now()
            ]);

        $notification = array(
            'message' => 'Heading Updated Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->route('service/heading')->with($notification);
    }

    public function DeleteServiceHeading($id)
    {
        $delete = ServiceHeading::find($id)->delete();

        $notification = array(
            'message' => 'Heading Deleted Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->back()->with($notification);
    }

    // ******************************************
    public function AllService()
    {   $all_services = Service::latest()->paginate(5);
        return view('admin/service/index',compact('all_services'));
    }


    public function AddService()
    {
        $categories = Service_category::orderBy('service_category_name','ASC')->get();
        return view('admin/service/addservice',compact('categories'));
    }


    public function StoreService(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ],
        [
            'heading.required' => 'Please Input Service Title',
            'title.required' => 'Please Input Service Title',
            'description.required' => 'Please Input Service Short Description', 
             
            
        ]);

        Service::insert([
                'service_category_id' => $request->service_category_id,
                'title' => $request->title,
                'description' => $request->description,
                'icon' => $request->icon,
                 'created_at' => Carbon::now()
            ]);

        $notification = array(
            'message' => 'Service Added Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->route('all/service')->with($notification);
    }


    public function EditeService($id)
    {
        $service = Service::find($id);
        $categories = Service_category::orderBy('service_category_name','ASC')->get();
        return view('admin/service/edite',compact('service','categories'));
    }


    public function UpdateService(Request $request,$id)
    {
        $validatedData = $request->validate([
            
            'title' => 'required',
            'description' => 'required',
        ],
        [
            'title.required' => 'Please Input Service Title',
            'description.required' => 'Please Input Service Short Description', 
             
            
        ]);

        $update = Service::find($id)->update([
                'service_category_id' => $request->service_category_id,
                'title' => $request->title,
                'description' => $request->description,
                'icon' => $request->icon,
                 'created_at' => Carbon::now()
            ]);

        $notification = array(
            'message' => 'Service Update Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->route('all/service')->with($notification);
    }


    public function DeleteService($id)
    {
        $service_delete = Service::find($id)->delete();

        $notification = array(
            'message' => 'Service Deleted Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->back()->with($notification);
    }


    // Service Fetures Part


    public function FetureHeading()
    {   
        $feture_headings = Service_feture_heading::latest()->paginate(3);
        return view('admin/service_feture/feture_heading',compact('feture_headings'));
    }
    
    public function AddFetureHeading()
    {
        return view('admin/service_feture/add_feture_heading');
    }

    public function StoreFetureHeading(Request $request)
    {
        // $validatedData = $request->validate([
        //     'heading' => 'required',
        // ],
        // [
        //     'heading.required' => 'Please Input Heading',
             
        // ]);

        Service_feture_heading::insert([
                'heading' => $request->heading,
                 'created_at' => Carbon::now()
            ]);

        $notification = array(
            'message' => 'Feture Heading Added Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->route('feture/heading')->with($notification);
    }

    public function EditFetureHeading($id)
    {
        $heading = Service_feture_heading::find($id);
        return view('admin/service_feture/feture_heading_edit',compact('heading'));
    }

    
    public function UpdateFetureHeading(Request $request,$id)
    {
        // $validatedData = $request->validate([
        //     'heading' => 'required',
        // ],
        // [
        //     'heading.required' => 'Please Input Heading',
             
        // ]);

        $updates = Service_feture_heading::find($id)->update([
                'heading' => $request->heading,
                 'created_at' => Carbon::now()
            ]);

        $notification = array(
            'message' => 'Feture Heading Updated Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->route('feture/heading')->with($notification);
    }

    public function DeleteFetureHeading($id)
    {
        $delete = Service_feture_heading::find($id)->delete();

        $notification = array(
            'message' => 'Feture Heading Deleted Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->back()->with($notification);
    }

// All Service Feture

    public function AllFeture()
    {   $all_fetures = Service_feture::latest()->paginate(5);
        return view('admin/service_feture/service_feture',compact('all_fetures'));
    }

    public function AddFeture()
    {
        return view('admin/service_feture/add_feture');
    }


    public function StoreFeture(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'icon' => 'required',
        ],
        [
            'heading.required' => 'Please Input Service Title',
            'title.required' => 'Please Input Service Title',
            'description.required' => 'Please Input Service Short Description', 
             
            
        ]);

        Service_feture::insert([
                'title' => $request->title,
                'description' => $request->description,
                'icon' => $request->icon,
                 'created_at' => Carbon::now()
            ]);

        $notification = array(
            'message' => 'Service Feture Added Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->route('all/feture')->with($notification);
    }


    public function EditeFeture($id)
    {
        $feture = Service_feture::find($id);
        return view('admin/service_feture/edit_service_feture',compact('feture'));
    }


    public function UpdateFeture(Request $request,$id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
        ],
        [
            'title.required' => 'Please Input Service Title',
            'description.required' => 'Please Input Service Short Description', 
             
            
        ]);

        $update = Service_feture::find($id)->update([
                
                'title' => $request->title,
                'description' => $request->description,
                'icon' => $request->icon,
                 'created_at' => Carbon::now()
            ]);

        $notification = array(
            'message' => 'Service Feture Update Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->route('all/feture')->with($notification);
    }


    public function DeleteFeture($id)
    {
        $service_delete = Service_feture::find($id)->delete();

        $notification = array(
            'message' => 'Service Feture Deleted Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->back()->with($notification);
    }



}
