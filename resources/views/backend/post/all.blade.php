@extends('backend.back-master')
@section('title','All Posts')

@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card mb-4">
                <div class="card-header">
                    <h1>All Post</h1>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Serial Number</th>
                                <th>Category Id</th>
                                <th>Post Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$post->cat_id}}</td>
                                <td>{{$post->post_title}}</td>
                                <td>{{$post->description}}</td>
                                <td>
                                    <img src="{{asset('/').$post->image}}" alt="" height="60px" width="60px">
                                </td>
                                <td>
                                    <a href="{{route('post.edit',['pId'=>$post->id])}}" class="btn btn-success">Edit</a>
                                    <a href="{{route('post.delete',['pId'=>$post->id])}}" class="btn btn-danger">Delete</a>
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