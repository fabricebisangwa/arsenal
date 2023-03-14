@extends('layouts.master')

@section('prince',' Employees Register')

@section('contents')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-6">
                <div class="card">
                    <div class="header">
                        <h4 class="title">List of Employees </h4>
                    </div>
                    <div class="content">
                        <table class="table">
                            <tr>
                                <th>#</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Date of Birth</th>
                                <th>Job Title</th>
                                <th>Department</th>
                                <th>Action</th>
                            </tr>
                            <tbody>
                                @foreach ($emp as $key=> $emp_row )
                                @if (!is_null($emp_row->department_id))
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$emp_row->firstname}}</td>
                                    <td>{{$emp_row->lastname}}</td>
                                    <td>{{$emp_row->date_of_birth}}</td>
                                    <td>@if (!is_null($emp_row->job_title_id))
                                        {{$emp_row->getJobTitle->job_title_name}}                                        
                                    @endif</td>
                                    <td>
                                        @if (!is_null($emp_row->department_id))
                                        {{$emp_row->getDepartmentName->department_name}}
                                        @endif
                                    </td>
                                    <td>
                                        <div style="display: inline-flex;">
                                            <a href="{{url('/employees/edit/'.$emp_row->id)}}" class="btn btn-sm btn-primary " style="margin-right: .3rem">Edit</a>
                                            <a href="{{url('/employees/delete/'.$emp_row->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                        </div>
                                    </td>
                                    </tr>  
                                @endif
                                                           
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h4 class="title">List of Employees On Waiting List  </h4>
                    </div>
                    <div class="content">
                        <table class="table">
                            <tr>
                                <th>#</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Date of Birth</th>
                                <th>Job Title</th>
                                <th>Department</th>
                                <th>Action</th>
                            </tr>
                            <tbody>
                                @foreach ($emp as  $key=> $emp_row )
                                @if (is_null($emp_row->department_id))
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$emp_row->firstname}}</td>
                                    <td>{{$emp_row->lastname}}</td>
                                    <td>{{$emp_row->date_of_birth}}</td>
                                    <td>@if (!is_null($emp_row->job_title_id))
                                        {{$emp_row->getJobTitle->job_title_name}}                                        
                                    @endif</td>
                                    <td>
                                        @if (!is_null($emp_row->department_id))
                                        {{$emp_row->getDepartmentName->department_name}}
                                        @endif
                                    </td>
                                    <td>
                                        <div style="display: inline-flex;">
                                            <a href="{{url('/employees/edit/'.$emp_row->id)}}" class="btn btn-sm btn-primary " style="margin-right: .3rem">Edit</a>
                                            <a href="{{url('/employees/delete/'.$emp_row->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                        </div>
                                    </td>
                                    </tr>  
                                @endif
                                                           
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Employee Register</h4>
                    </div>
                    <div class="content" style="padding:1rem;">
                        <form action="employees/save" method="POST">
                           @csrf
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label>FirstName</label>
                                    <input type="text" class="form-control border-input" name="firstname"required>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label>Lastname</label>
                                    <input type="text" class="form-control border-input" name="lastname"required>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Date of Birth</label>
                                    <input type="date" class="form-control border-input" name="date_of_birth"required>
                                </div>
                                </div>
                            </div>


                            <div class="row">
                           
                                {{-- @foreach ($job as $key=> $job_title) --}}
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Job Title </label>
                                        <select  class="form-control border-input" name="job_title">
                                            <option value="" >select job title</option>
                                            @if (!is_null($jobs))
                                            @foreach ($jobs as $jbt )
                                            <option value="{{$jbt->id}}">{{$jbt->job_title_name}}</option>
                                                
                                            @endforeach
                                                
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Department  </label>
                                        <select  class="form-control border-input" name="depart">
                                            <option value="">select department</option>
                                            @if (!is_null($depart))
                                            @foreach ($depart as $dpt )
                                            <option value="{{$dpt->id}}">{{$dpt->department_name}}</option>
                                                
                                            @endforeach
                                                
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Add Employee</button>
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
