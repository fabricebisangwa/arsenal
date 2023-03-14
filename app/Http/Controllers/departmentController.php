<?php

namespace App\Http\Controllers;
use App\Models\Department;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class departmentController extends Controller
{
    function getAllDepartmentDatas(){
        return view('department',[
            'department_name'=>Department::all()
        ]);
    }
    function saveDepartTitle(Request $request){
        Department::create([

            'department_name'=>$request->department,
            'description'=>$request->description,

        ]);
        return redirect()->back();
    }
    function editDepart($id){
        return view('edit_department',[
            'depart'=>Department::findOrFail(Crypt::decrypt($id)),
        ]);
    }
    function updateDepart(Request $request){
        Department::where('id',Crypt::decrypt($request->department_id))->update([
            'department_name'=>$request->update_department,
            'description'=>$request->update_description,
            
        ]);
        return redirect('/department');
    }
}
