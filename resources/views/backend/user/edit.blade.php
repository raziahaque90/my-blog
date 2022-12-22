@extends('backend.back-master')
@section('title','Add Post')

@section('body')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h1>Add User</h1>
                <form action="{{route('user.update',['uId'=> $user->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">User Name</label>
                      <input type="text" class="form-control" id="userName" name="userName" value="{{$user->name}}">
                      
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="userMail" name="userMail" value="{{$user->email}}">
                      
                      </div>
                      
                <input type="submit" name="submit-btn" value="Update" class="btn btn-dark">
                  </form>
            </div>
        </div>
    </div>
@endsection