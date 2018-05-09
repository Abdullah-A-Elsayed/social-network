@extends('layouts.base')

@section ('title') <title>Groups</title> @endsection

@section('css')
        <link rel="stylesheet" href="{{ asset('css/groups.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fontawesome-all.css') }}">
@endsection

@section('content')

<!-- create group section -->
            <button class="btn btn-outline-success mt-sm-3 add">+</button>
            <div class="addpost container">
                <form class="row col-md-8" method="Post" action="home.html">
                    <input autofocus type="text" name="gname" placeholder="Group name"
                        class="form-control my-2" style="width: 50% !important">
                    <textarea style="height: 80px;margin-bottom: 2%" class="form-control"
                        placeholder="Group description" name="groupdesc" ></textarea>
                    
                    <label style="color: #fff">Upload Group picture</label>
                    <input type="file" name="gpic" class="form-control" style="color: #fff
                    ;background-color: transparent !important;border: none;margin-bottom: 10px !important;
                    padding-left: 0">
                    
                    <button type="submit" class="btn btn-outline-success"
                        style="cursor: pointer" name="post">Create</button>
                </form>
            </div>
    <!-- create group section -->
    
     <div class="row posts">
        
        <!-- My groups list-->
        <section class="friendlist col-md-5">

            @foreach($all_groups as $group)

              <div class="friend container">
                <div class="row">
                    <img src="imgs/{{$group->user_photo}}" class="rounded-circle" alt="profile pic" width="90" 
                    height="75">
                      <div class="postdetails col-md-6">
                        <h4>{{$group->user_name}}</h4>
                        <a href="#"> Visit Group </a>
                     </div>
                      <a class="btn btn-md btn-danger" role="button" href="#"
                         style="margin-right: 0px;height: 38px;padding:8px 25px;margin-top: 20px;">Leave</a>
                </div>
            </div>

            @endforeach                        
             
        </section>
        
        <!--owned & suggested groups -->
        <section class="gpost col-md-5">
            <div class="post container">
            <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">

                @foreach($all_groups as $group)

                  <div class="carousel-item">
                    <div class="itm">
                        <div class="row">
                                <img src="imgs/{{$group->user_photo}}" class="rounded-circle" alt="profile pic" width="90" height="75">
                        </div>
                        <div class="postdetails">
                                <h4>{{$group->user_name}}</h4>
                                <a href="#"> Visit Group </a>
                        </div>
                        <a class="btn btn-md btn-danger" role="button" href="#"
                             style="margin-right: 0px;height: 38px;padding:8px 25px;margin-top: 20px;">Delete</a>
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
                
                @foreach($all_groups as $group)
                  <div class="carousel-item">
                      <div class="itm">
                          <div class="row">
                                  <img src="imgs/{{$group->user_photo}}" class="rounded-circle" alt="profile pic" width="90" height="75">
                          </div>
                          <div class="postdetails">
                                  <h4>{{$group->user_name}}</h4>
                                  <p style="color: #ffeb3b">{{$group->content}}</p>
                          </div>
                          <a class="btn btn-md btn-success" role="button" href="#"
                               style="margin-right: 0px;height: 38px;padding:8px 25px;margin-top: 20px;">
                              Join Group</a>
                          <a class="btn btn-md btn-danger" role="button" href="#"
                               style="margin-right: 0px;height: 38px;padding:8px 25px;margin-top: 20px;">
                              Remove</a>
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