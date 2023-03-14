<?php

namespace App\Models;
use App\Http\Controllers\JobListController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobtitle extends Model
{
    use HasFactory;
    protected $fillable=[
        'job_title_name',
        'description',
    ];
}
