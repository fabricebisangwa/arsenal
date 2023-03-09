@extends('layouts.master')
@section('contents')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-lg-8 col-md-7">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Department</h4>
                    </div>
                    <div class="content">
                        <form action="DepartSolvit/save" method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="first_name">First Name:</label>
                                        <input type="text" id="first_name" name="first_name"><br>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="first_name">Last Name:</label>
                                        <input type="text" id="last_name" name="first_name"><br>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="date_of_birth">Date of Birth:</label>
                                         <input type="date" name="date_of_birth"><br>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Save</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


