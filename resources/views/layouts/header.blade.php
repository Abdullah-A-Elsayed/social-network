<!DOCTYPE html>
    
<html lang="{{ app()->getLocale() }}">
    <head>
         @yield('title')
        <!-- Meta tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Egypt Social Network from ASU"> 
        <meta name="keywords" content="Egypt,Asu,engineering,CSE,SocialNetwork">
        <meta name="author" content="Gasser">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <!-- Meta tags -->

        <!-- CSS tags -->
        @yield('css')
        <!-- CSS tags -->
    </head>
<style type="text/css">
  
a {
    color: #f8f9fa;}

</style>
    <body>
       <header>
           <div class="header">
               <nav class="navbar row">
                  <div class="col-lg-4 col-md-6">
                    @if(isset(Auth::user()->image))
                    <img src="{{url('')}}/{{Auth::user()->image}}" class="rounded-circle" alt="profile pic" width="140" height="110">
                    @else

                    <img src="{{asset('uploads/default.jpg')}}" class="rounded-circle" alt="profile pic" width="140" height="110">
                    @endif
                    <div style="display: inline-block;margin-left:15px;position: absolute">
                        <h3 style="margin-top: 25px">{{Auth::user()->name}}</h3>
                        <a href="{{url('myprofile')}}"><i class="fa fa-user fa-sm"></i> View Profile </a>
                    </div>
                 </div>
                                      <form  class="form-inline search col-lg-5 col-md-6"  style="margin-left: 0;margin-top: 5px" method="get" action="{{url('search')}}" >
                    <input class="form-control mr-sm-2" name="text" value="@if(isset($_GET['text'])){{$_GET['text']}} @endif" type="search" style="width: 70% !important" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" style="color: #f8f9fa" type="submit">
                        <i class="fa fa-search fa-2x fa-flip-horizontal"></i> </button>
                  </form>
                  
                    <ul class="col-lg-3 col-md-6">
                      <div class="row">
                        <li class="text-center col-xsm"><a href="{{url('home')}}"><i class="fa fa-home fa-2x"></i><h6>Home</h6></a></li>
                        <li class="text-center col-xsm"><a href="{{url('friends')}}"><i class="fa fa-user-friends fa-2x"></i><h6>Friends</h6></a></li>
                        <li class="text-center col-xsm"><a href="{{url('groups')}}"><i class="fa fa-users fa-2x"></i><h6>Groups</h6></a></li>
                        <li class="text-center col-xsm"><a href="{{ url('/logout') }}"><i class="fa fa-sign-out-alt fa-2x"></i><h6>Sign Out</h6></a></li>
                      </div>
                    </ul>
                    
               </nav>
            </div>
        </header>