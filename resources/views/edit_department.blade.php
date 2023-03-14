@extends('layouts.master')

@section('breadcumb','Job Title')

@section('contents')
    <div class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Create Job Title</h4>
                        </div>
                        <div class="content">
                            <form action="/UpdateDepart/update" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input id="title" type="hidden" class="form-control border-input" name="department_id" value="{{Crypt::encrypt($depart->id)}}" name="title">
                                                <input id="title" type="text" class="form-control border-input" value="{{$depart->department_name}}" name="update_department">
                                                

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea id="description" rows="5" class="form-control border-input" name="update_description">{{$depart->description}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Update</button>
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