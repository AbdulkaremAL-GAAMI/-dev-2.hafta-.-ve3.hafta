@extends('admin.dashboard')
@section('content')



  <section class="section">
                    <div class="card">
                        <div class="card-header">
                            User List
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <a href="{{route('user-create')}}" class="btn btn-success">Create New User</a>
                                <thead>
                                    <tr>
                                        <th>name</th>
                                        <th>phone</th>
                                        <th>email</th>
                                        <th>status</th>
                                        <th>first name</th>
                                        <th>last name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
@foreach($users as $usres)
                                    <tr>
                                        <td>{{$usres->name}}</td>
                                        <td>{{$usres->mpno}}</td>
                                        <td>{{$usres->email}}</td>
                                        <td>{{$usres->fname}}</td>
                                        <td>{{$usres->lname}}</td>
                                        <td> {{$usres->status}} </td>
                                   



                                        <td width="15%">
                                             <a href="{{route('edit.user',$usres->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="{{route('delete.user',$usres->id)}}" class="btn btn-sm btn-danger">delete</a>

                                        </td>
                                 </tr>
@endforeach                      
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>


 @endsection