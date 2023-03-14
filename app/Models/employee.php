<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use App\Models\Jobtitle;
class employee extends Model
{
    use HasFactory;
    protected $fillable=[
        'firstname',
        'lastname',
        'date_of_birth',
        'job_title_id',
        'department_id',
    ];

    public function getDepartmentName(){
        return $this->belongsTo(Department::class,'department_id','id');
    }
    public function getJobTitle(){
        return $this->belongsTo(jobtitle::class,'job_title_id','id');
    }
}
