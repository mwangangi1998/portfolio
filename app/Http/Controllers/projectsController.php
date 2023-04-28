<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;
use Symfony\Component\HttpFoundation\JsonResponse;
class projectsController extends Controller
{
    //


// public function mypojects()
// {


// return view();
// }

    public function projects(Request $request){
$this->validate(
    $request,[
        'title'=>'required',
        'description'=>'required',
    ]
    );
    $projects=new project();
    $projects->title=$request->title;
    $projects->description=$request->description;
    $projects->save();
    return redirect()->back()->with('success','project added');
    }
}
