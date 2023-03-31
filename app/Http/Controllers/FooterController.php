<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

use App\Models\Footer_address;
use App\Models\Footer_usefull_link;
use App\Models\Footer_service_link;

class FooterController extends Controller
{
    public function AllInfo()
    {
         $footer_infos = Footer_address::all();
        return view('admin/footer_info/index',compact('footer_infos'));
    }

    public function FooterInfoAdd()
    {
        return view('admin/footer_info/add_footer_info');
    }

    public function FooterInfoStore (Request $request)
    {
        

        Footer_address::insert([
                    'company_name' => $request->company_name,
                    'address' => $request->address,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'copywrite_first' => $request->copywrite_first,
                    'copywrite_name' => $request->copywrite_name,
                    'copywrite_last' => $request->copywrite_last,
                    'developer_name' => $request->developer_name,
                    'developer_url' => $request->developer_url,
                    'twitter_icon' => $request->twitter_icon,
                    'twitter_url' => $request->twitter_url,
                    'facebook_icon' => $request->facebook_icon,
                    'facebook_url' => $request->facebook_url,
                    'instragram_icon' => $request->instragram_icon,
                    'instragram_url' => $request->instragram_url,
                    'skype_icon' => $request->skype_icon,
                    'skype_url' => $request->skype_url,
                    'linkedin_icon' => $request->linkedin_icon,
                    'linkedin_url' => $request->linkedin_url,
                    'created_at' => Carbon::now()
                    ]);

            $notification = array(
                'message' => 'Footer Info Added Successfully', 
                'alert-type' => 'success'
                );

        return redirect()->route('footer/all')->with($notification);
    }

    public function FooterInfoEdit($id)
    {
        $edit_footer = Footer_address::find($id);
        return view('admin/footer_info/edit_footer_info',compact('edit_footer'));
    }

    

    public function FooterInfoUpdate(Request $request,$id)
    {
       

        $update = Footer_address::find($id)->update([
                
            'company_name' => $request->company_name,
                    'address' => $request->address,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'copywrite_first' => $request->copywrite_first,
                    'copywrite_name' => $request->copywrite_name,
                    'copywrite_last' => $request->copywrite_last,
                    'developer_name' => $request->developer_name,
                    'developer_url' => $request->developer_url,
                    'twitter_icon' => $request->twitter_icon,
                    'twitter_url' => $request->twitter_url,
                    'facebook_icon' => $request->facebook_icon,
                    'facebook_url' => $request->facebook_url,
                    'instragram_icon' => $request->instragram_icon,
                    'instragram_url' => $request->instragram_url,
                    'skype_icon' => $request->skype_icon,
                    'skype_url' => $request->skype_url,
                    'linkedin_icon' => $request->linkedin_icon,
                    'linkedin_url' => $request->linkedin_url,
                 'created_at' => Carbon::now()
            ]);

        $notification = array(
            'message' => 'Footer  Update Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->route('footer/all')->with($notification);
    }

    public function FooterInfoDelete($id)
    {
        

        Footer_address::find($id)->delete();

        $notification = array(
            'message' => 'Footer Address Deleted Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->back()->with('$notification');
    }


    // =============== UseFull Link Area ===============================

    public function AllLink()
    {
         $footer_useful_links = Footer_usefull_link::latest()->paginate(3);
        return view('admin/Footer_useful_link/index',compact('footer_useful_links'));
    }

    public function FooterUselLinkAdd()
    {
        return view('admin/Footer_useful_link/add_footer_useful_link');
    }

    public function FooterUselLinkStore (Request $request)
    {
        

        Footer_usefull_link::insert([
            'link_name' => $request->link_name,
            'link_url' => $request->link_url,
            'created_at' => Carbon::now()
                    
            ]);

            $notification = array(
                'message' => 'Footer Useful Lin Added Successfully', 
                'alert-type' => 'success'
                );

        return redirect()->route('all/footer/usefull/link')->with($notification);
    }

    public function FooterUselLinkEdit($id)
    {
        $edit_useful_link = Footer_usefull_link::find($id);
        return view('admin/Footer_useful_link/edit_footer_useful_link',compact('edit_useful_link'));
    }

    

    public function FooterUselLinkUpdate(Request $request,$id)
    {
       

        $update = Footer_usefull_link::find($id)->update([
                
            'link_name' => $request->link_name,
            'link_url' => $request->link_url,
            'created_at' => Carbon::now()
            ]);

        $notification = array(
            'message' => 'Footer Useful Lin Update Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->route('all/footer/usefull/link')->with($notification);
    }

    public function FooterUselLinkDelete($id)
    {
        

        Footer_usefull_link::find($id)->delete();

        $notification = array(
            'message' => 'Footer Useful Link Deleted Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->back()->with('$notification');
    }



    // =============== Service Link Area ===============================

    public function FooterAllServiceLink ()
    {
         $footer_service_links = Footer_service_link::latest()->paginate(3);
        return view('admin/Footer_service_link/index',compact('footer_service_links'));
    }

    public function FooterServiceLinkAdd()
    {
        return view('admin/Footer_service_link/add_footer_service_link');
    }

    public function FooterServiceLinkStore (Request $request)
    {
        

        Footer_service_link::insert([
            'link_name' => $request->link_name,
            'link_url' => $request->link_url,
            'created_at' => Carbon::now()
                    
            ]);

            $notification = array(
                'message' => 'Footer Service Lin Added Successfully', 
                'alert-type' => 'success'
                );

        return redirect()->route('all/footer/service/link')->with($notification);
    }

    public function FooterServiceLinkEdit($id)
    {
        $edit_service_link = Footer_service_link::find($id);
        return view('admin/Footer_service_link/edit_footer_service_link',compact('edit_service_link'));
    }

    

    public function FooterServiceLinkUpdate(Request $request,$id)
    {
       

        $update = Footer_service_link::find($id)->update([
                
            'link_name' => $request->link_name,
            'link_url' => $request->link_url,
            'created_at' => Carbon::now()
            ]);

        $notification = array(
            'message' => 'Footer Service Lin Update Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->route('all/footer/service/link')->with($notification);
    }

    public function FooterServiceLinkDelete($id)
    {
        

        Footer_service_link::find($id)->delete();

        $notification = array(
            'message' => 'Footer Service Link Deleted Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->back()->with('$notification');
    }

}
