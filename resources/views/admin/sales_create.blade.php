@extends('admin.dashboard')
@section('content')


<div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Create Sales</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form method="post" action="{{route('sales-store')}}" class="form form-horizontal">

@csrf
                                            <div class="form-body">
                                                <div class="row">
                                                   

                                                    <div class="col-md-4">
                                                        <label>user name </label>
                                                    </div>
                                                    <div class="col-md-8 form-group">

        <select name="user->id" class=" col-md-8 form-select" id="basicSelect">
@foreach($users as $user)
            <option  value="{{$user->id}}">{{$user->name}}</option>
@endforeach

        </select>
                                                    </div>
                                                   
                                                    <div class="col-md-4">
                                                        <label>orid</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text" id="contact-info" class="form-control" name="orid" placeholder="orid">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>product_id</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text"  class="form-control" name="product_id" placeholder="product_id">
                                                    </div>
                                                   
                                                     <div class="col-md-4">
                                                        <label>code</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text"  class="form-control" name="code" placeholder="code">
                                                    </div>

                                                     <div class="col-md-4">
                                                        <label> prc</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text"  class="form-control" name=" prc" placeholder="  prc">
                                                    </div>


                                                     <div class="col-md-4">
                                                        <label>cid</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input type="text"  class="form-control" name="cid" placeholder="cid">
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