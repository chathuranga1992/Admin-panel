<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_type = auth()->user()->type;
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        
        if ($user_type == 'admin'){
            return view('admin-dashboard')->with('posts',$user->posts);
        }else{
        return view('dashboard')->with('posts',$user->posts);
        }
    }
}
