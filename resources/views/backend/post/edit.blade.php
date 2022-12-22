@extends('backend.back-master')
@section('title','Edit Post')

@section('body')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h1>Add Post</h1>
                <form action="{{route('post.update',['pId'=>$post->id,'cId'=>$post->cat_id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Post Title</label>
                      <input type="text" class="form-control" id="post_title" name="post_title" value="{{$post->post_title}}">
                      
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Description</label>
                        <textarea name="description" class="form-control">
                            {{$post->description}}

                        </textarea>
                        
                      </div>
                      <select name="cat_id" class="form-select">
                        <option value="">Select Option..</option>
                        @foreach ($category as $cat)
                        <option value="{{$cat->id}}">{{$cat->category_name}}</option>  
                        @endforeach
                       
                      </select>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Image</label>
                      <input type="file" class="form-control" id="post_image" name="post_image">
                    </div>
                <input type="submit" name="submit-btn" value="Update Post" class="btn btn-dark">
                  </form>
            </div>
        </div>
    </div>
@endsection