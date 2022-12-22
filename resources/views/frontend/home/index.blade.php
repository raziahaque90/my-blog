@extends('frontend.front-master')

@section('title','Home')

@section('body')
<div class="container">
    <div class="row justify-content-center">
        <!-- strat carousel -->
            <div class="col-10 my-slider">
        <div id="myFirstCarousel1" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500">
            
            <div class="carousel-inner">
                @foreach ($sliderPost as $slide)
                <div class="carousel-item {{$slide->id == $first->id ? 'active' : ''}}">
                    <div class="row">
                        <div class="col-6">
                            <img class="w-100" src="{{asset('/')}}{{$slide->image}}">
                        </div>
                        <div class="col-6">
                            <h1>{{Illuminate\Support\Str::words($slide->post_title, 10)}}</h1>
                            <p>{{Illuminate\Support\Str::words($slide->description, 30)}}</p>
                            <a href="{{route('post.detail',['pId'=>$slide->id])}}" class="btn btn-warning">Read More</a>
                        </div>
                        
                    </div>               
                 </div> 
                @endforeach
                
                
            </div> 
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myFirstCarousel1" data-bs-slide-to="0" class="active bg-dark"></button>
                <button type="button" data-bs-target="#myFirstCarousel1" data-bs-slide-to="1" class="bg-dark"></button>
                <button type="button" data-bs-target="#myFirstCarousel1" data-bs-slide-to="2" class="bg-dark"></button>
                
                
            </div>
            


        </div>
        
    </div>
    <!-- end carousel -->
    <div class="col-10 posts py-5">
        <div class="row">
            <h1 class="text-center">Latest Posts</h1>
            @foreach ($posts as $post)
            <div class="col-12 col-sm-6 col-md-4">
                    <div class="card text-center">
                        <div class="card-body ft-searchBar">
                            <img class="w-100" src="{{asset('/')}}{{$post->image}}">
                            <h3>{{Illuminate\Support\Str::words($post->post_title, 5)}}</h3>
                            <p>{{Illuminate\Support\Str::words($post->description, 30)}}</p>
                            <a href="{{route('post.detail',['pId'=>$post->id])}}">Read more</a>                                   
                        </div>		
                    </div>           
                </div>
            @endforeach
        </div>
    </div>
        
    </div>
</div>
    
@endsection