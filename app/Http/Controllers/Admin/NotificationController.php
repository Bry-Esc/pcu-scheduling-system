<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class NotificationController extends Controller
{
    public function __construct() {
        // Ensure authentication is required for accessing any method in this controller
        $this->middleware('auth');

        // Check if the user is activated before allowing access to methods in this controller
        $this->middleware('checkIfActivated');

        // Ensure that only users with admin privileges can access methods in this controller
        // $this->middleware('admin');
    }
    
    function notifications(){
        $notifications = \App\LoadNotification::get();
        return view('admin.notification.notification',compact('notifications'));        
    }
}
