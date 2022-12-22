@extends('frontend.front-master')

@section('title','Category')

@section('body')
<div class="container">
    <div class="row justify-content-center">       
        <div class="col-10 posts">
            <div class="row">
                <h1 class="text-center pb-5">Categories</h1>
                @foreach ($categories as $category)
                    <div class="col-12 col-sm-6 col-md-4 py-2">
                        <div class="card text-center">
                            <div class="card-body ft-searchBar">
                                <img class="w-100" src="{{asset('/')}}{{$category->category_image}}">
                                <h3><a href="{{route('post.all',['cId'=>$category->id])}}">{{$category->category_name}}</a></h3>
                            </div>		
                        </div>               
                    </div>         
                @endforeach          
            </div>
        </div>      
    </div>
</div>
@endsection