<?php

namespace App\Http\Controllers;
use App\Models\Jobtitle;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class JobListController extends Controller
{
    function getAllJobDatas(){
        return view('job_insert',[
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
    function editJobTitle($id){
        return view('edit-job-title',[
            'job_title'=>JobTitle::findOrFail(Crypt::decrypt($id))
        ]);
    }

    function updateJobTitle(Request $request){
        JobTitle::where('id',Crypt::decrypt($request->job_title_id))->update([
            'job_title_name'=>$request->title,
            'description'=>$request->description,
            ]);
        return redirect('/job_insert');
    }

    function deleteJobTitle($id){
        JobTitle::findOrFail(Crypt::decrypt($id))->delete();
        return redirect('/job_insert');

    }
    
}