@extends('backend.back-master')
@section('title','Change Password')

@section('body')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h1>Change Password</h1>
                <span>{{session('msg')}}</span>
                <form action="{{route('user.changePass',['uId'=> $user->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">New Password</label>
                      <input type="password" class="form-control" id="" name="newPassword">
                      
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Retype New Password</label>
                        <input type="password" class="form-control" id="" name="newPassword2">
                        
                      </div>
                      
                <input type="submit" name="submit-btn" value="Change" class="btn btn-success">
                  </form>
            </div>
        </div>
    </div>
@endsection