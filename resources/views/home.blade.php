@extends('layouts.base')

@section ('title') <title>Home</title> @endsection

@section('css')
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fontawesome-all.css') }}">
@endsection

@section('content')
        <!-- add Post section -->
        <button class="btn btn-outline-success mt-sm-3 add">+</button>
        <div class="addpost container">
            <form class="row col-md-8"  method="Post" action="home.html">
                <textarea resize autofocus style="height: 170px;margin-bottom: 2%" class="form-control"
                    placeholder="Write your post" name="postcontent" ></textarea>
				<button type="submit" class="btn btn-outline-success" style="cursor: pointer" name="post">Post</button>
            </form>
        </div>
        <!-- add Post section -->
  <div class="container">
        <div class="row posts">
        <!-- friends posts -->
        <section class="fpost col-lg">
            <div class="post container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">

              @foreach($all_posts as $post)
                <div class="carousel-item">
                  <div class="row">
                      <img src="imgs/{{$post->user_photo}}" class="rounded-circle" alt="profile pic" width="90" height="75">
                        <div class="postdetails col-md-8">
                          <h5>{{$post->user_name}}</h5>
                          <a href="#"> View Profile </a>
                       </div>
                  </div>
                  
                  <div class="row">
                     <p style="margin: 10px;"> {{$post->content}}</p>
                  </div>
                  
                  <!-- buttons row -->
                 <div class="row">
                    <button class="col-sm btn btn-primary my-2 mx-4" type="submit" name="like"> 
                      <i class="fa fa-thumbs-up fa-1x" style="margin: 0 5px;color:  !important;"></i>
                      <span>Like</span>
                    </button>
                    <button class="col-sm comnt1 btn btn-success my-2 mx-4" type="submit" name="comment">
                      <i class="fa fa-comment fa-1x" style="margin: 0 5px;"></i>
                      <span>Comment</span>
                    </button>
                    <button class="col-sm btn btn-danger my-2 mx-4" type="submit" name="report">
                      <i class="fa fa-flag fa-1x" style="margin: 0 5px;"></i>
                      <span>Report</span>
                    </button>
                  </div>
                  <!-- buttons row -->

                 <div class="comment row">
                     <p><img src="imgs/{{$post->user_photo}}" class="rounded-circle" alt="profile pic" width="50" height="40">
                     {{$post->com1}}</p>
                     <p><img src="imgs/{{$post->user_photo}}" class="rounded-circle" alt="profile pic" width="50" height="40">
                     {{$post->com2}}</p>
                     <p><img src="imgs/{{$post->user_photo}}" class="rounded-circle" alt="profile pic" width="50" height="40">
                     {{$post->com3}}</p>
                  </div>
                  
                  <div class="lin1">
                      <form class="form-inline row mb-3">
                          <input type="hidden" name"_token" value="{{csrf_token()}}">
                          <input autofocus class="form-control" style="width: 80%;" type="text" placeholder="Write your Comment" aria-label="Comment">
                          <button class="btn btn-outline-success ml-2" type="submit">OK</button>
                      </form>
                  </div>
                </div>
              @endforeach
             
          </div>
        </div>
            <a class="crcont carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="crcont carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            </div>
        </section>
        
        <!-- group posts -->
        <section class="gpost col-lg">
            <div class="post container">
            <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">

            @foreach($all_posts as $post)

            <div class="carousel-item">
                <div class="row">
                    <img src="imgs/{{$post->user_photo}}" class="rounded-circle" alt="profile pic" width="90" height="75">
                      <div class="postdetails col-md-8">
                        <h5 style="display: inline-block;">{{$post->user_name}} </h5>
                        <i class="fa fa-angle-double-right fa-1x" style="margin: 0 5px;font-size: 20px"></i> 
                        <h5 style="display: inline-block;">Love and food</h5>
                        <a href="#" style="display: block;"> View Group </a>
                     </div>
                </div>
                
                <div class="row">
                   <p> {{$post->content}} </p>
                </div>

                <!-- buttons row -->
                <div class="row">
                  <button class="col-sm btn btn-primary my-2 mx-4" type="submit" name="like"> 
                    <i class="fa fa-thumbs-up fa-1x"></i>
                    <span>Like</span>
                  </button>
                  <button class="col-sm comnt btn btn-success my-2 mx-4" type="submit" name="comment">
                    <i class="fa fa-comment fa-1x"></i>
                    <span>Comment</span>
                  </button>
                  <button class="col-sm btn btn-danger my-2 mx-4" type="submit" name="report">
                    <i class="fa fa-flag fa-1x"></i>
                     <span>Report</span>
                  </button>
                </div>
                <!-- buttons row -->

                <div class="comment row">
                   <p><img src="imgs/{{$post->user_photo}}" class="rounded-circle" alt="profile pic" width="50" height="40">
                   {{$post->com1}}</p>
                   <p><img src="imgs/{{$post->user_photo}}" class="rounded-circle" alt="profile pic" width="50" height="40">
                   {{$post->com2}}</p>
                   <p><img src="imgs/{{$post->user_photo}}" class="rounded-circle" alt="profile pic" width="50" height="40">
                   {{$post->com3}}</p>
                </div>
                
                <div class="lin">
                    <form class="form-inline row mb-3">
                        <input autofocus class="form-control" style="width: 80%;" type="text" placeholder="Write your Comment" aria-label="Comment">
                        <button class="btn btn-outline-success ml-2" type="submit">OK</button>
                    </form>
                </div>
            </div>
            @endforeach
                
            </div>
            </div>
                
            <a class="crcont carousel-control-prev" href="#carouselExampleControls2" role="button" 
            data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="crcont carousel-control-next" href="#carouselExampleControls2" role="button" 
            data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            </div>
        </section>
        </div>
    </div>
        @endsection