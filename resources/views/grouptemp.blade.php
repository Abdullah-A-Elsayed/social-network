@extends('layouts.base')

@section ('title') <title>Test Test</title> @endsection


@section('css')
        <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fontawesome-all.css') }}">
@endsection

@section('content')

        <!-- add Post section -->
            <button class="btn btn-outline-success mt-sm-3 add">+</button>
            <div class="addpost container">
                <form class="row col-md-8" method="Post" action="home.html">
                    <textarea resize autofocus style="height: 170px;margin-bottom: 2%" class="form-control"
                        placeholder="Write your post" name="postcontent" ></textarea>
                    <button type="submit" class="btn btn-outline-success"
                        style="cursor: pointer" name="post">Post</button>
                </form>
            </div>
        <!-- add Post section -->
            
        <div class="row posts">
            
        <!-- profile info -->
        <section class="profinfo col-md-5">
            <div class="profintro">
                <img src="imgs/test2.png" class="rounded-circle" alt="profile pic" width="120" height="100">
            </div>
            <h3 style="text-align: center">Test Test <!-- from database--></h3>
            <div class="container">
                <div class="row info text-center">
                    <p style="padding: 0 20px";>
                      this group is about people interested in dogs and cats
                      and pets in all its kinds and animal lovers from all over
                      egypt cairo and alex especially.
                    </p>
                </div>
                
                <h4><span style="color: #F77204"> 40 </span>Members</h4> <hr>
                <div class="row info" style="height: 200px;overflow: auto">
                    
                @foreach($prof as $post)                     
                <div class="friend container">
                  <div class="row">
                      <img src="imgs/prof.jpg" class="rounded-circle" alt="profile pic" width="70" height="60">
                        <div class="postdetails col-md-6">
                          <h4>{{$post->user_name}} <!-- from database--></h4>
                          <a href="#"> View Profile </a>
                       </div>
                  </div>
                </div>
                @endforeach
                    
                </div>
            </div>
        </section>
        
        <!-- my posts -->
        <section class="gpost col-md-5">
            <div class="post container">
            <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
              @foreach($prof as $post)
                <div class="carousel-item">
                  <div class="row">
                      <img src="imgs/{{$post->user_photo}}" class="rounded-circle" alt="profile pic" width="90" height="75">
                        <div class="postdetails col-md-8">
                          <h3>{{$post->user_name}}</h3>
                          <a href="#" style="display: block;"> View Profile </a>
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
                      <form class="form-inline row mb-3" action="">
                          <input type="hidden" name"_token" value="{{csrf_token()}}">
                          <input autofocus class="form-control" style="width: 80%;" type="text" placeholder="Write your Comment" aria-label="Comment">
                          <button class="btn btn-outline-success ml-2" type="submit">OK</button>
                      </form>
                  </div>
                </div>
              @endforeach
          </div>
            </div>
            </div>
              <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            
        </section>
        </div>
        @endsection