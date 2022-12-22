@extends('backend.back-master')
@section('title','Add Post')

@section('body')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h1>Add User</h1>
                <form action="{{route('user.add')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">User Name</label>
                      <input type="text" class="form-control" id="userName" name="userName">
                      
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="userMail" name="userMail">
                      
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="userPassword" name="userPassword">
                      
                      </div>
                      
                <input type="submit" name="submit-btn" value="Add User" class="btn btn-dark">
                  </form>
            </div>
        </div>
    </div>
@endsection