<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //returns the dashboards for admins
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        return view('admin');
    }
}
