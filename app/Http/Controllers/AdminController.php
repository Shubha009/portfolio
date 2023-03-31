<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function Logout(){
        Auth::logout();

        $notification = array(
            'message' => 'You are Logged out', 
            'alert-type' => 'success'
        );

        return redirect()->route('login')->with($notification);
    }
}
