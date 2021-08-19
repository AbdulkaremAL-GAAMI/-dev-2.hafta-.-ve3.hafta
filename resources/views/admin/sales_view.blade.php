@extends('admin.dashboard')
@section('content')



  <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Sales List
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <a href="{{route('sales-create')}}" class="btn btn-success">Create New Sales</a>
                                <thead>
                                    <tr>
                                        <th>user id</th>
                                        <th>orid</th>
                                        <th>product id</th>
                                        <th>code</th>
                                        <th>price</th>
                                        <th>cid</th>
                                        <th>sale date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
@foreach($saless as $sales)
                                    <tr>
                                        <td>{{$sales->user_id}}</td>
                                        <td>{{$sales->orid}}</td>
                                        <td>{{$sales->product_id}}</td>
                                        <td>{{$sales->code}}</td>
                                        <td>{{$sales->prc}}</td>
                                        <td> {{$sales->cid}} </td>
                                        <td> {{$sales->sale_date}} </td>



                                        <td width="15%">
                                             <a href="{{route('edit.sales',$sales->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="{{route('delete.sales',$sales->id)}}" class="btn btn-sm btn-danger">delete</a>

                                        </td>
                                 </tr>
@endforeach                      
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>


 @endsection