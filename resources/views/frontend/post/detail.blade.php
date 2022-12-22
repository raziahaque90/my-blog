@extends('frontend.front-master')

@section('title','All Posts')

@section('body')
<div class="container py-2">
    <div class="row justify-content-center">
        <div class="col-5">
            <img class="w-100" src="{{asset('/')}}{{$post->image}}" height="auto">
        </div>     
        <div class="col-5">
            <h1>{{$post->post_title}}</h1>
            <p>{{$post->description}}</p>
            <a href="">&#x1F44D;</a>
            <a href="">&#x1F44E;</a>                           
            <form action="{{route('post.comment',['pId'=>$post->id])}}" method="post" class="py-5">
                @csrf
                <input type="text" name="comment_box" class="form-control">
                <br>
                <input type="submit" name="" value="Comment" class="btn btn-primary">
            </form>
            @foreach ($comments as $comment)
            <div class="row">
                <div class="col-1">
                    <img src="{{asset('/')}}frontend-assets/assets/images/slider1.jpg" height="30px" width="30px">
                </div>
                <div class="col-11">
                    <p>{{$comment->comment_desc}}</p>
                </div>
            </div>   
            @endforeach
                                
    </div>        
</div>
</div>
@endsection