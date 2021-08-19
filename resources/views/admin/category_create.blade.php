@extends('admin.dashboard')
@section('content')


<div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Create Category</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form method="post" action="{{route('category-store')}}" class="form form-horizontal">

@csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label>title</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="first-name" class="form-control" name="title" placeholder="title">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>description</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="email-id" class="form-control" name="description-id" placeholder="description">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>slug</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="contact-info" class="form-control" name="slug" placeholder="slug">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>status</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text"  class="form-control" name="status" placeholder="status">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>Password</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text"  class="form-control" name="password" placeholder="Password">
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