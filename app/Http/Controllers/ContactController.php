<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use App\Models\Contact_message ;

use Auth;

class ContactController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function AllContact()
    {

        $contact_items = Contact::latest()->paginate(3);
        // $trashCat = Category::onlyTrashed()->latest()->paginate(3);

        return view('admin/contact/index',compact('contact_items'));
    }

    public function AddContact()
    {
        return view('admin/contact/add_contact');
    }


    public function StoreContact(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|regex:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/',
            'phone' => 'required|regex:/(^(01){1}[3456789]{1}(\d){8})$/',
            'location' => 'required',
            'contact_map_iframe' => 'required',
        ],
        [
            'email.regex' => 'Please Enter valid Email',
            'phone.regex' => 'Please Enter valid Mobile Number',
            
             
        ]);

        Contact::insert([
                'email' => $request->email,
                'phone' => $request->phone,
                'location' => $request->location,
                'contact_map_iframe' => $request->contact_map_iframe,
                 'created_at' => Carbon::now()
            ]);

            $notification = array(
                'message' => 'Contact Added Successfully', 
                'alert-type' => 'success'
                );

        return redirect()->route('all/contact')->with($notification);
    }

    public function EditContact($id)
    {
        $edit = Contact::find($id);
        return view('admin/contact/edit_contact',compact('edit'));
    }

    public function UpdateContact(Request $request, $id)
    {   
        $validatedData = $request->validate([
            'email' => 'required|regex:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/',
            'phone' => 'required|regex:/(^(01){1}[3456789]{1}(\d){8})$/',
            'location' => 'required',
            'contact_map_iframe' => 'required',
        ],
        [
            'email.regex' => 'Please Enter valid Email',
            'phone.regex' => 'Please Enter valid Mobile Number',
        ]);

        $update_contacts = Contact::find($id)->update([
            'email' => $request->email,
            'phone' => $request->phone,
            'location' => $request->location,
            'contact_map_iframe' => $request->contact_map_iframe,
            
        ]);

        $notification = array(
            'message' => 'Contact Updated Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->route('all/contact')->with($notification);

    }

    public function DeleteContact($id)
    {
        $delete = Contact::find($id)->delete();

        $notification = array(
            'message' => 'Contact Deleted Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->back()->with($notification);
    }



    // Contact Messege Part

    public function ContactForm(Request $request)
    {
        // $validatedData = $request->validate([
        //     'email' => 'required|regex:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/',
        //     'phone' => 'required|regex:/(^(01){1}[3456789]{1}(\d){8})$/',
        //     'location' => 'required',
        //     'contact_map_iframe' => 'required',
        // ],
        // [
        //     'email.regex' => 'Please Enter valid Email',
        //     'phone.regex' => 'Please Enter valid Mobile Number',
            
             
        // ]);

        Contact_message::insert([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
                 'created_at' => Carbon::now()
            ]);

            $notification = array(
                'message' => 'Message has benn send Successfully', 
                'alert-type' => 'success'
                );

         return redirect()->route('contact')->with($notification);
    }


    public function ContactMessage()
    {   $contact_message_items = Contact_message::latest()->paginate(5);
        return view('admin/contact/contact_message',compact('contact_message_items'));
    }


    public function ContactMessageView($id)
    {
        $contact_message_items = DB::table('contact_messages')->find($id);
        return view('admin/contact/contact_message_view',compact('contact_message_items'));
    }



    public function ContactMessageDelete($id)
    {
        $delete = Contact_message::find($id)->delete();

        $notification = array(
            'message' => 'Contact Message Deleted Successfully', 
            'alert-type' => 'success'
            );

        return redirect()->back()->with($notification);
    }
}
