<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\employee;
use  App\Models\Jobtitle;
use  App\Models\Department;
use Illuminate\Support\Facades\Crypt;

class EmployeeController extends Controller
{
    function getAllEmployee(){
        $employees=employee::with('getDepartmentName','getJobTitle')->get();
        //dd($employees);
        $jobs=jobtitle::all();
        $depart=Department::all();
        return view('employee',[
            'emp'=>$employees,
            'jobs'=>$jobs,
            'depart'=>$depart,
        ]);
    }
    function storeEmployee(Request $request){
        employee::create([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'date_of_birth'=>$request->date_of_birth,
            'job_title_id'=>$request->job_title,
            'department_id'=>$request->depart,
        ]);
        
        return redirect()->back();
    }
    function editEmployee($id){

            $employeeToEdit=employee::find($id);
            $jobs=Jobtitle::all();
            $depart=department::all();
            return view ('edit_employee',[
                'employeeToEdit'=>$employeeToEdit,
                'jobs'=>$jobs,
                'depart'=>$depart

            ]);
    }
    function UpdateEmployee(Request $request, $id){
        $employeeToUpdate=employee::find($id);
        
        $employeeToUpdate->update([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'date_of_birth'=>$request->date_of_birth,
            'job_title_id'=>$request->job_title,
            'department_id'=>$request->depart,
        ]);
            return redirect("/employee");
    }
    function deleteEmployee($id){
        $employeeToDelete=employee::find($id);
        $employeeToDelete->delete();
        return redirect()->back();

    }
   function editEmployees($id){
     return view('depart_edit',[
             'employee'=>employees::findOrFail(Crypt::decrypt($id))
         ]);
     }
     function updateEmployees(Request $request){
         employees::where('id',Crypt::decrypt($request->job_title_id))->update([
                 'employees_name'    =>  $request->employees_name,
                 'description'       =>  $request->description,
             ]);
         return redirect('/depart_insert/');
     }   
   
     function DeleteEmployees($id){
          return JobTitle::all();
         {
             employees::findOrFail(Crypt::decrypt($id))->delete();
            
             return redirect()->back();
        
     }

   
 }
}
