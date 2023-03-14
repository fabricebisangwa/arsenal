<?php
use App\Models\User;
use App\Models\Department;
use App\Models\Jobtitle;
use App\Models\employee;
use App\Http\Controllers\JobListController;
use App\Http\Controllers\EmployeeController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[App\Http\Controllers\UserController::class,'getAlldata'] );
Route::get('/job_insert',[App\Http\Controllers\JobListController::class,'getAllJobDatas'] );
Route::post('/JobSolvit/save',[App\Http\Controllers\JobListController::class,'saveJobTitle'] );
Route::post('/JobTitle/update', [App\Http\Controllers\JobListController::class,'updateJobTitle']);
Route::get('/jobTitle/edit/{id}', [App\Http\Controllers\JobListController::class,'editjobTitle']);
Route::delete('/jobTitle/delete/{id}', [App\Http\Controllers\JobListController::class,'DeletejobTitle']);

Route::get('/department',[App\Http\Controllers\DepartmentController::class,'getAllDepartmentDatas'] );
Route::post('/DepartSolvit/save',[App\Http\Controllers\departmentController::class,'saveDepartTitle'] );
Route::get('/editDepartment/{id}',[App\Http\Controllers\departmentController::class,'editDepart'] );
Route::post('/UpdateDepart/update',[App\Http\Controllers\departmentController::class,'updateDepart'] );


Route::get('/employee',[App\Http\Controllers\EmployeeController::class,'getAllEmployee']);
Route::post('/employees/save',[App\Http\Controllers\EmployeeController::class,'storeEmployee']);
Route::post('/employees/update/{id}', [App\Http\Controllers\EmployeeController::class,'UpdateEmployee']);
Route::get('/employees/edit/{id}', [App\Http\Controllers\EmployeeController::class,'editEmployee']);
Route::get('/employees/delete/{id}', [App\Http\Controllers\EmployeeController::class,'deleteEmployee']);


// Route::get('/user', function () {
//     return view('user');
// });


// Route::get('/employee', function () {
//     return view('employee');
// });
// Route::get('/maps', function () {
//     return view('maps');
// });

// Route::get('/notifications', function () {
//     return view('notifications');
// });
