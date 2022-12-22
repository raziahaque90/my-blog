@extends('backend.back-master')
@section('title','All User')

@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card mb-4">
                <div class="card-header">
                    <h1>All User</h1>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Serial Number</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <a href="{{route('user.edit',['uId'=>$user->id])}}" class="btn btn-success">Edit</a>
                                    <a href="{{route('user.delete',['uId'=>$user->id])}}" class="btn btn-danger">Delete</a>
                                    <a href="{{route('user.reset',['uId'=>$user->id])}}" class="btn btn-warning">Change Password</a>
                                </td>
                               
                            </tr>
                        
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection