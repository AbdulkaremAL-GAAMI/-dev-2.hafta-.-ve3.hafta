@extends('admin.dashboard')
@section('content')


<div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Create User</h4>

                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form method="post" action="{{route('user.update')}}" class="form form-horizontal">

@csrf
<input type="hidden" value="{{$users->id}}" name="id">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>Name</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input value="{{$users->name}}" type="text" id="first-name" class="form-control" name="name" placeholder="name">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label> email </label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" value="{{$users->email}}" id="email-id" class="form-control" name="email" placeholder="email">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>phone</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="contact-info" value="{{$users->mpno}}" class="form-control" name="mpno" placeholder="phone">
                                                    </div>
                                                        <div class="col-md-4">
                                                        <label>first name</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="contact-info" value="{{$users->fname}}" class="form-control" name="fname" placeholder="first name">
                                                    </div>
                                                        <div class="col-md-4">
                                                        <label>last name</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="contact-info" value="{{$users->lname}}" class="form-control" name="lname" placeholder="last name">
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label>status</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text"  class="form-control" value="{{$users->status}}" name="status" placeholder="status">
                                                    </div>
                                                   
                                                    <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


 @endsection