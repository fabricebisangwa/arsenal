<?php

namespace App\Http\Controllers;
use App\Models\Department;

use Illuminate\Http\Request;

class departmentController extends Controller
{
    function getAllDepartmentDatas(){
        return view('department',[
            'department_name'=>DepartTitle::all()
        ]);
    }
    function saveDepartTitle(Request $request){
        Department::create([

            'department_name'=>$request->department,
            'description'=>$request->description,

        ]);
        return redirect()->back();
    }
}
