@extends('layouts.master')

@section('breadcumb','Job Title')

@section('contents')
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-4 col-md-4">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Create Job Title</h4>
                        </div>
                        <div class="content">
                            <form action="/JobSolvit/save" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input id="title" type="text" class="form-control border-input" name="title">
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
                                    <button type="submit" class="btn btn-info btn-fill btn-wd">Save </button>
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Job Title List</h4>
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
                                    @foreach ($job_titles as $key=> $job_title)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td> {{ $job_title->job_title_name }} </td>
                                            <td> {{ $job_title->description }} </td>
                                            <td>
                                                <a href="/jobTitle/edit/{{Crypt::encrypt($job_title->id)}}" style="color:blue">edit</a> |
                                                <a href="#!"  onclick="document.getElementById('delete-{{$job_title->id}}').submit()" style="color:red">Delete</a>
                                                <form onsubmit="('are you sure')"
                                                action="/jobTitle/delete/{{Crypt::encrypt($job_title->id)}}"
                                                method="post"
                                                id="delete-{{$job_title->id}}">

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