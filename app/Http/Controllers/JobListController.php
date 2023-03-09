<?php

namespace App\Http\Controllers;
use App\Models\Jobtitle;

use Illuminate\Http\Request;

class JobListController extends Controller
{
    function getAllJobDatas(){
        return view('table',[
            'job_titles'=>JobTitle::all()
        ]);
    }

    function saveJobTitle(Request $request){
        Jobtitle::create([

            'job_title_name'=>$request->title,
            'description'=>$request->description,

        ]);
        return redirect()->back();
    }
    // return $jobTitle->id;

    
}