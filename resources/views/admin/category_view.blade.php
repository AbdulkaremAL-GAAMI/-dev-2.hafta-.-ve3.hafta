@extends('admin.dashboard')
@section('content')



  <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Category List
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>title</th>
                                        <th>description</th>
                                        <th>slug</th>
                                        <th>status</th>
                                        <th>created_at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
@foreach($categories as $category)
                                    <tr>
                                        <td>{{$category->title}}</td>
                                        <td>{{$category->description}}</td>
                                        <td>{{$category->slug}}</td>
                                        <td>{{$category->status}}</td>
                                        <td> {{$category->created_at}} </td>
                                        <td width="15%">
                                             <a href="{{route('edit.category',$category->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="{{route('delete.category',$category->id)}}" class="btn btn-sm btn-danger">delete</a>

                                        </td>
                                 </tr>
@endforeach                      
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>


 @endsection