@extends('frontend.front-master')

@section('title','All Posts')

@section('body')
<div class="container">
    <div class="row justify-content-center">
        
    <div class="col-10 posts">
        <div class="row">
            <h1 class="text-center pb-5">{{$category->category_name}}</h1>
            @foreach ($posts as $post)
            <div class="col-12 col-sm-6 col-md-4 py-2">
                <div class="card text-center">
                                    <div class="card-body ft-searchBar">
                                        <img class="w-100" src="{{asset('/')}}{{$post->image}}">
                                        <h3>{{Illuminate\Support\Str::words($post->post_title, 5)}}</h3>
                                        <p>{{Illuminate\Support\Str::words($post->description, 30)}}</p>
                                        <button class="btn"><a href="{{route('post.detail',['pId'=>$post->id])}}">read more</a></button>
                                        
                                    </div>		
                                </div>
                
            </div>
            @endforeach
           
           
           
        
        </div>
    </div>
        
    </div>
</div>
@endsection