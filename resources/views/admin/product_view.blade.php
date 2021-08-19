@extends('admin.dashboard')
@section('content')



  <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Product List
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>category_id </th>
                                        <th>user_id</th>
                                        <th>unicode</th>
                                        <th>slug</th>
                                        <th>title</th>
                                        <th>description</th>
                                        <th>order</th>
                                        <th>status</th>
                                        <th>prc</th>
                                        <th>cid</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
@foreach($products as $product)
                                    <tr>
                                        <td>{{$product->category_id}}</td>
                                        <td>{{$product->user_id}}</td>
                                        <td>{{$product->unicode}}</td>
                                        <td>{{$product->slug}}</td>
                                        <td> {{$product->title}} </td>
<td> {{$product->description}} </td>
<td> {{$product->order}} </td>
<td> {{$product->status}} </td>

<td> {{$product->prc}} </td>
<td> {{$product->cid}} </td>


                                        <td width="15%">
                                             <a href="{{route('edit.product',$product->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="{{route('delete.product',$product->id)}}" class="btn btn-sm btn-danger">delete</a>

                                        </td>
                                 </tr>
@endforeach                      
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>


 @endsection