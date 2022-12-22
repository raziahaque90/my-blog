@extends('backend.back-master')
@section('title','Edit Category')

@section('body')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h1>Add Category</h1>
                <form action="{{route('category.update',['cId'=>$category->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Category Name</label>
                      <input type="text" class="form-control" id="category_name" name="category_name" value="{{$category->category_name}}">
                      
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Image</label>
                      <input type="file" class="form-control" id="category_image" name="category_image" value="{{$category->category_image}}">
                    </div>
                <input type="submit" name="update-btn" value="Update" class="btn btn-dark">
                  </form>
            </div>
        </div>
    </div>
@endsection