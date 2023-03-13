<?php
use App\Models\User;
use App\Models\Department;
use App\Models\Jobtitle;


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
Route::get('/table',[App\Http\Controllers\JobListController::class,'getAllJobDatas'] );
Route::post('/JobSolvit/save',[App\Http\Controllers\JobListController::class,'saveJobTitle'] );
Route::post('/DepartSolvit/save',[App\Http\Controllers\departmentController::class,'saveDepartTitle'] );


Route::get('/user', function () {
    return view('user');
});


Route::get('/employee', function () {
    return view('employee');
});
Route::get('/maps', function () {
    return view('maps');
});

Route::get('/notifications', function () {
    return view('notifications');
});
