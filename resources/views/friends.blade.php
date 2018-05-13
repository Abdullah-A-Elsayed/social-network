@extends('layouts.base')

@section ('title') <title>Friends</title> @endsection


@section('css')
        <link rel="stylesheet" href="{{ asset('css/friends.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fontawesome-all.css') }}">
@endsection

@section('content')

<div class="row posts">
        
        <!-- My friends list-->
        <section class="friendlist col-md-5">

          @foreach($friends as $friend)

             <div class="friend container">
                <div class="row">
              @if(!empty($friend->image))
<img src="{{$friend->image}}" class="rounded-circle" alt="profile pic" width="90" height="75"
                                  >

                      @else
<img src="{{url('')}}/imgs/prof.jpg" class="rounded-circle" alt="profile pic" width="90" height="75"
                                   >

              @endif                      <div class="postdetails col-md-6">
                        <h4>{{$friend->name}}</h4>
                        <a href="{{url('profile')}}/{{$friend->id}}"> View Profile </a><br>
                        <span>{{$friend->mutual}} mutual friends </span>
                     </div>
                    <form   method="Post" action="{{url('unfriend')}}/{{$friend->id}}">
{{csrf_field()}}
                    <button class="btn btn-md btn-danger" role="button" href="#"
                               style="margin-right: 0px;height: 38px;padding:8px 25px;margin-top: 20px;"  type="submit" name="Add Friend"> 
                      <span>unfriend</span>
                    </button>
</form>
                </div>
            </div>

          @endforeach
             
        </section>
        
        <!--friend reqs & suggested friends -->
        <section class="gpost col-md-5">
            <div class="post container">
            <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
                
                @foreach($friendRequests as $friend)

                  <div class="carousel-item">
                      <div class="itm">
                          <div class="row">


              @if(!empty($friend->image))
<img src="{{$friend->image}}" class="rounded-circle" alt="profile pic" width="90" height="75"
                                   >

                      @else
<img src="{{url('')}}/imgs/prof.jpg" class="rounded-circle" alt="profile pic" width="90" height="75"
                                   >

              @endif
                                  
                          </div>
                          <div class="postdetails">
                              <h4>{{$friend->name}}</h4>
                              <a href="{{url('profile')}}/{{$friend->id}}"> View Profile </a><br>
                              <span>{{$friend->mutual}} mutual friends </span>
                          </div>
                                              <form   style="display: inline-block;" method="Post" action="{{url('acceptFriend')}}/{{$friend->id}}" >
{{csrf_field()}}
                    <button class="btn btn-md btn-success" role="button" href="#"
                               style="height: 38px;padding:8px 25px;margin-top: 20px;"  type="submit" name="Add Friend"> 
                      Accept
                    </button>
</form>
                    <form  style="display: inline-block;"  method="Post" action="{{url('rejectFriend')}}/{{$friend->id}}">
{{csrf_field()}}
                    <button class="btn btn-md btn-danger" role="button" href="#"
                               style="height: 38px;padding:8px 25px;margin-top: 20px;"  type="submit" name="Add Friend"> 
                      Reject
                    </button>
</form>
                          
                      </div>
                  </div>

                @endforeach
                
            <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
                
            </div>
            </div>
            </div>
        <br>
        <hr>
        
            <div class="post container sug">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
                
                @foreach($SuggestedFriends as $friend)

                  <div class="carousel-item">
                      <div class="itm">
                          <div class="row">
              @if(!empty($friend->image))
<img src="{{$friend->image}}" class="rounded-circle" alt="profile pic" width="90" height="75"
                                   >

                      @else
<img src="{{url('')}}/imgs/prof.jpg" class="rounded-circle" alt="profile pic" width="90" height="75"
                                   >

              @endif                          </div>
                          <div class="postdetails">
                              <h4>{{$friend->name}}</h4>
                              <a href="{{url('profile')}}/{{$friend->id}}"> View Profile </a><br>
                              <span>{{$friend->mutual}} mutual friends </span>
                          </div>
                 
                    <form   method="Post" action="{{url('addFriend')}}/{{$friend->id}}" >
{{csrf_field()}}
                    <button class="btn btn-md btn-success" role="button" href="#"
                               style="margin-right: 0px;height: 38px;padding:8px 25px;margin-top: 20px;"  type="submit" name="Add Friend"> 
                      <span>Add Friend</span>
                    </button>
</form>
                      </div>
                  </div>

                 @endforeach
                
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>   
 
            </div>
            </div>
            </div>
            
        </section>
        </div>

        @endsection