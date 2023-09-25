<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index( ) 
    {
        return view('index');
    }

    //profile page
    public function profile()
    {
        return view('pages.profile');
    }

    // contact page
    public function contactpage()
    {
        return view('contact.page');
    }

}
