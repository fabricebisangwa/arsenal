@extends('layouts.master')

@section('breadcumb','Department')

@section('contents')
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-4 col-md-4">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Department</h4>
                        </div>
                        <div class="content">
                            <form action="/DepartSolvit/save" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title">Department</label>
                                            <input id="title" type="text" class="form-control border-input" name="department">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea id="description" rows="5" class="form-control border-input" name="description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-info btn-fill btn-wd">Submit</button>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Department List</h4>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <thead>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>options</th>
                                </thead>
                                <tbody>
                                    @foreach ($department_name as $key=> $solvedepartment)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td> {{ $solvedepartment->department }} </td>
                                            <td> {{ $solvedepartment->description }} </td>
                                            <td>
                                                <a href="/jobTitle/edit/{{Crypt::encrypt($job_title->id)}}" style="color:blue">edit</a> |
                                                <a href="#!" onclick="document.getElementById('delete-{{$job_title->id}}').submit()"
                                                             style="color:red">Delete</a>
                                                <form action="/jobTitle/delete/{{Crypt::encrypt($job_title->id)}}"
                                                      method="post"
                                                      onsubmit="return confirm('are you sure?')"
                                                      id="delete-{{$job_title->id}}"
                                                      >
                                                      @csrf
                                                      @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    {{-- @for ($i = 0; $i < count($job_titles); $i++)
                                        <tr>
                                            <td>{{$i+1}}</td>
                                            <td> {{ $job_titles[$i]->job_title_name }} </td>
                                            <td> {{ $job_titles[$i]->description }} </td>
                                            <td>
                                                <a href="" style="color:blue">edit</a> |
                                                <a href="" style="color:red">Delete</a>
                                            </td>
                                        </tr>
                                    @endfor --}}
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection