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

    <body>
       <header>
           <div class="header">
               <nav class="navbar row">
                  <div class="col-lg">
                    <img src="{{asset('imgs/prof1.jpg')}}" class="rounded-circle" alt="profile pic" width="140" height="110">
                    <div style="display: inline-block;margin-left:15px;position: absolute">
                        <h3 style="margin-top: 25px">Gasser Samy</h3>
                        <a href="profile.html"><i class="fa fa-user fa-sm"></i> View Profile </a>
                    </div>
                 </div>
                  
                  <form class="form-inline search col-lg" style="margin-left: 0;margin-top: 5px">
                    <input class="form-control mr-sm-2" type="search" style="width: 70% !important" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit" style="border: 0;">
                        <i class="fa fa-search fa-2x fa-flip-horizontal"></i></button>
                  </form>
                  
                    <ul class="col-lg">
                      <li class="text-center"><a href="http://localhost/gasser_lara/public/home"><i class="fa fa-home fa-2x"></i><h6>Home</h6></a></li>
                      <li class="text-center"><a href="http://localhost/gasser_lara/public/friends"><i class="fa fa-user-friends fa-2x"></i><h6>Friends</h6></a></li>
                      <li class="text-center"><a href="http://localhost/gasser_lara/public/groups"><i class="fa fa-users fa-2x"></i><h6>Groups</h6></a></li>
                      <li class="text-center"><a href="http://localhost/gasser_lara/public/messages"><i class="fa fa-envelope fa-2x"></i><h6>Messages</h6></a></li>
                      <li class="text-center"><a href="http://localhost/gasser_lara/public/welcme"><i class="fa fa-sign-out-alt fa-2x"></i><h6>Sign Out</h6></a></li>
                    </ul>
                    
               </nav>
            </div>
        </header>