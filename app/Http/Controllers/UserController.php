<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Department;
use App\Models\employee;
use App\Models\Jobtitle;



use Illuminate\Http\Request;

class UserController extends Controller
{
    function getAlldata(){
        return view('welcome',[
          'users'=>User::all(),
          'usercount'=>User::count(),
          'department_count'=>Department::count(),
          'employee_count'=>employee::count(),
          'Job_Title_count'=>Jobtitle::count(),
        ]);
    }
}
