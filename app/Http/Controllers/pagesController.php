<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('index');
    }
    public function about()
    {
        # code...
        return view('frontend.about');
    }
    public function resume()
    {
        # code...
        return view('frontend.resume');
    }
    public function contact()
    {
        # code...
        return view('frontend.contact');
    }
    public function projects()
    {
        # code...
        return view('frontend.projects');
    }
}
