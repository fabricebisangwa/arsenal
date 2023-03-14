@extends('layouts.master')

@section('prince',' Employees Register')

@section('contents')
<div class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-8 col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Employee</h4>
                    </div>
                    <div class="content">
                        <form action="{{url('/employees/update/'.$employeeToEdit->id)}}" method="POST">
                           @csrf
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>FirstName</label>
                                        <input type="text" class="form-control border-input" value="{{$employeeToEdit->firstname}}" name="firstname">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Lastname</label>
                                        <input type="text" class="form-control border-input" value="{{$employeeToEdit->lastname}}" name="lastname">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Date of Birth</label>
                                        <input type="date" class="form-control border-input" value="{{$employeeToEdit->date_of_birth}}" name="date_of_birth">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                           
                                {{-- @foreach ($job as $key=> $job_title) --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Job Title </label>
                                        <select  class="form-control border-input" value="{{$employeeToEdit->job_title_id}}" name="job_title">
                                            <option value="" >select job title</option>
                                            @if (!is_null($jobs))
                                                @foreach ($jobs as $jbt )
                                                    @if ($jbt->id == $employeeToEdit->job_title_id)
                                                        <option selected="selected" value="{{$jbt->id}}">{{$jbt->job_title_name}}</option>
                                                                                                    
                                                    @else
                                                        <option value="{{$jbt->id}}">{{$jbt->job_title_name}}</option>
                                                    @endif                                                   
 
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                 {{-- @endforeach --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Department  </label>
                                        <select  class="form-control border-input" value="{{$employeeToEdit->department_id}}" name="depart">
                                            <option value="">select department</option>
                                            @if (!is_null($depart))
                                            @foreach ($depart as $dpt )
                                            @if ($dpt->id==$employeeToEdit->department_id)
                                            <option selected="selected" value="{{$dpt->id}}">{{$dpt->department_name}}</option>
                                            @else
                                            <option value="{{$dpt->id}}">{{$dpt->department_name}}</option>
                                            @endif
                                    
                                                
                                            @endforeach
                                                
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Update Changes</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
