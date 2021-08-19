@extends('admin.dashboard')
@section('content')


<div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Update Product</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form method="post" action="{{route('product-update')}}" class="form form-horizontal">

@csrf

<input type="hidden"  value="{{$products->id}}" name="id">
                                            <div class="form-body">
                                                <div class="row">
                                                   

                                                    <div class="col-md-4">
                                                        <label>category name </label>
                                                    </div>
                                                    <div class="col-md-8 form-group">

        <select name="category_id" class=" col-md-8 form-select" id="basicSelect">
@foreach($categories as $category)
            <option  value="{{$category->id}}">{{$category->title}}</option>
@endforeach

        </select>
                                                    </div>
                                                   
                                                    <div class="col-md-4">
                                                        <label>unicode</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input value="{{$products->unicode}}" type="text" id="contact-info" class="form-control" name="unicode" placeholder="unicode">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label>slug</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input value="{{$products->slug}}" type="text"  class="form-control" name="slug" placeholder="slug">
                                                    </div>
                                                   
                                                     <div class="col-md-4">
                                                        <label>description</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input value="{{$products->description}}" type="text"  class="form-control" name="description" placeholder="description">
                                                    </div>

                                                     <div class="col-md-4">
                                                        <label>order</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input value="{{$products->order}}" type="text"  class="form-control" name="order" placeholder="order">
                                                    </div>


                                                     <div class="col-md-4">
                                                        <label>status</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input value="{{$products->status}}" type="text"  class="form-control" name="status" placeholder="status">
                                                    </div>


                                                     <div class="col-md-4">
                                                        <label>prc</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input value="{{$products->prc}}"  type="text"  class="form-control" name="prc" placeholder="prc">
                                                    </div>



                                                     <div class="col-md-4">
                                                        <label>cid</label>
                                                    </div>
                                                    <div class="col-md-8 form-group">
                                                        <input value="{{$products->cid}}" type="text"  class="form-control" name="cid" placeholder="cid">
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