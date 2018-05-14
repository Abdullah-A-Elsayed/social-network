@extends('layouts.base')

@section ('title') <title>{{$profile->name}}</title> @endsection


@section('css')
        <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fontawesome-all.css') }}">
@endsection

@section('content')

        <!-- add Post section -->
            <button  class="btn btn-outline-success mt-sm-3 add">+</button>
            <div class="addpost container">
            <form class="row col-md-8"  method="Post" action="{{url('PostAdd')}}">
                <textarea resize autofocus style="height: 170px;margin-bottom: 2%" class="form-control"
                    placeholder="Write your post" name="body" ></textarea>
                    {{csrf_field()}}
        <button type="submit" class="btn btn-outline-success" style="cursor: pointer" name="post">Post</button>
            </form>
            </div>
        <!-- add Post section -->
            
        <div class="row posts">
            
        <!-- profile info -->
        <section class="profinfo col-md-5">
            <a class="btn btn-md btn-outline-success edit"  role="button" href="{{ url('edit') }}">Edit</a>
            <div class="profintro">

              @if(!empty($profile->image))
                <img src="{{url('')}}/{{$profile->image}}" class="rounded-circle" alt="profile pic" width="120" height="100">
              @else

                <img src="{{url('')}}/imgs/prof.jpg" class="rounded-circle" alt="profile pic" width="120" height="100">

              @endif
            </div>
            <!-- from database-->
            <div class="container">
                <div class="row info">
                    <h5 class="col-md-5">Name</h5>
                    <h5 class="col-md-5">{{$profile->name}}</h5>
                    <h5 class="col-md-5">Country</h5>
                    <h5 class="col-md-5">{{$profile->country}}</h5>

                      <h5 class="col-md-5">City</h5>
                    <h5 class="col-md-5">{{$profile->city}}</h5>
                </div>
                <h4>Interests</h4> <hr>
                <div class="row info">
                  @foreach ($profile['interests'] as $interest)
                    <h5 class="col-md-5">{{$interest}}</h5>
                  @endforeach
                </div>
            </div>
        </section>
        
        <!-- my posts -->
        <section class="gpost col-md-5">
            <div class="post container">
            <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
                         @foreach($groupPosts as $post)
                <div class="carousel-item">
                  <div class="row">

                    @if(isset($post->user->image))

                      <img src="{{url('')}}/{{$post->user->image}}" class="rounded-circle" alt="profile pic" width="90" height="75">
                      @else
                      <img src="{{asset('uploads/default.jpg')}}" class="rounded-circle" alt="profile pic" width="90" height="75">
                      @endif

                                             <div class="postdetails col-md-8">
                        <h5 style="display: inline-block;">{{$post->user->name}} </h5>
                   
                     </div>
                  </div>
                  
                  <div class="row">
                     <p style="margin: 10px;"> {{$post->body}}</p>
                  </div>
                  
                  <!-- buttons row -->
                 <div class="row">
                  @if(!$post->isLiked->count())
     <form   method="Post" action="{{url('like')}}/{{$post->id}}" class="form-inline my-2 mx-4">
{{csrf_field()}}
                    <button class="col-sm btn btn-primary" type="submit" name="like"> 
                      <i class="fa fa-thumbs-up fa-1x" style="margin: 0 5px;color:  !important;"></i>
                      <span>Like</span>
                    </button>
</form>
                  @else

     <form   method="Post" action="{{url('like')}}/{{$post->id}}" class="form-inline my-2 mx-4">
      {{csrf_field()}}

                    <button class="col-sm btn btn-primary " type="submit" name="like"> 
                      <i class="fa fa-thumbs-down fa-1x" style="margin: 0 5px;color:  !important;"></i>
                      <span>unlike</span>
                    </button>  
                    </form>      
                  @endif
                    <button class="col-sm comnt1 btn btn-success my-2 mx-4" type="submit" name="comment">
                      <i class="fa fa-comment fa-1x" style="margin: 0 5px;"></i>
                      <span>Comment</span>
                    </button>
                    <button disabled class="col-sm btn btn-danger my-2 mx-4" type="submit" name="report">
                      <i class="fa fa-flag fa-1x" style="margin: 0 5px;"></i>
                      <span> {{$post->likes->count()}} likes</span>
                    </button>
                  </div>
                  <!-- buttons row -->
                  @foreach($post->comments as $comment)

                 <div class="comment row">

                     <p>
@if(isset($comment->user->image))
                      <img src="{{url('')}}/{{$comment->user->image}}" class="rounded-circle" alt="profile pic" width="50" height="40">

@else
                      <img src="{{url('')}}/uploads/default.jpg" class="rounded-circle" alt="profile pic" width="50" height="40">
@endif                      {{$comment->user->name}}</p>



                  </div>
                  {{$comment->body}}
        @endforeach
                       <div class="lin1">
     <form   method="Post" action="{{url('addComment')}}/{{$post->id}}" class="form-inline row mb-3">
                          {{csrf_field()}}
                          <input autofocus class="form-control" style="width: 80%;" type="text" placeholder="Write your Comment" name="body" aria-label="Comment">
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