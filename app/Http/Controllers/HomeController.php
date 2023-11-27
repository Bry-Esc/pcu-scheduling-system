<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Events\SearchEvent;
use Illuminate\Support\Facades\Session;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */

    public function index() {
        $role = Auth::user()->accesslevel;
    
        // Check user role and determine the view to render based on the role and login status
        if ($role == 0) {
            // Admin (level 0)
            if (Auth::user()->is_first_login == 1) {
                return view('instructor.first_login');
            } 
            return view('admin.dashboard');
            
        } elseif ($role == 1) {
            // Instructor (level 1)
            if (Auth::user()->is_first_login == 1) {
                return view('instructor.first_login');
            }
            return view('instructor.dashboard');
            
        } elseif ($role == 100) {
            // Super Admin (level 100)
            return view('super_admin.dashboard');
        } else {

            // For other user roles (fallback)
            return view('adminlte::home');
        }
        // // Debug
        // return view('admin.dashboard');
        // return view('instructor.dashboard');
        // return view('super_admin.dashboard');
        // return view('instructor.first_login');
        // return view('adminlte::home');
    }
    
    
    function search($search){
       $user = \App\User::where('username',$search)->first();
       event(new SearchEvent($user));
    }
    
    function view_search(){
        return view('search');
    }
    
    function default_pass(Request $request){
        $validate = $request->validate([
            'password' => 'required|min:6|confirmed'
        ]);
        
        if($validate){
            $user = \App\User::find($request->idno);
            $user->is_first_login = 0;
            $user->password = bcrypt($request->password);
            $user->update();
        }
        Session::flash('success','Welcome to Instructor`s portal');
        return redirect(route('home'));
    }
}