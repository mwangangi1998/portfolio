<?php

namespace App\Http\Controllers;

use App\Models\contactme;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

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
    public function contactme(Request $request)
    {
$this->validate(
    $request,[
        'name'=>'required',
        'email'=>'required',
        'message'=>'required',

    ]
    );

    $contactMsg= new contactme();
    $contactMsg->name=$request->name;
    $contactMsg->email=$request->email;
    $contactMsg->message=$request->message;
    $contactMsg->save();
    return redirect()->back()->with('Success' ,'message sent!');


    }
}
