@extends('backend.back-master')
@section('title','All Category')

@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card mb-4">
                <div class="card-header">
                    <h1>All Categories</h1>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Serial Number</th>
                                <th>Category Name</th>
                                <th>Image</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$category->category_name}}</td>
                                <td>
                                    <img src="{{asset('/').$category->category_image}}" alt="" height="60px" width="60px">
                                </td>
                                <td>
                                    <a href="{{route('category.edit',['cId'=>$category->id])}}" class="btn btn-success">Edit</a>
                                    <a href="{{route('category.delete',['cId'=>$category->id])}}" class="btn btn-danger">Delete</a>
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