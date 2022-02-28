<?php

namespace App\Http\Controllers;

use Auth;

class HomeController extends Controller
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
        
        $users=Auth::user();
       
        if (Auth::user())
        {
            return view('layouts.app-home', ['user' => $users]);
            
        }
        else
        {
            return view('auth.login');
        }
        
    }
}