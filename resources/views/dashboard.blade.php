
@extends('layouts.app')

@section('content')

<h1 class="page-title">Dashboard
</h1>
<div class="row">
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="/">Home</a>
            <i class="fa fa-angle-right"></i>
        </li>
        <li>
            <span>Dashboard</span>
        </li>
    </ul>
    <div class="page-toolbar">

    </div>
</div>


<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-tachometer"></i>
            <a href="#">Today</a>
        </li>
  
    </ul>
    <div  class="col-md-12 page-toolbar">

    </div>


                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 blue-oleo" href="#">
                                    <div class="visual">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="{{ $users2day}}">0</span>
                                        </div>
                                        <div class="desc"> users registered Today </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                             <a class="dashboard-stat dashboard-stat-v2 blue-dark" href="#">
                                    <div class="visual">
                                        <i class="fa fa-file"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="{{$posts2day}}">0</span>
                                        </div>
                                        <div class="desc"> Posts Today </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                             <a class="dashboard-stat dashboard-stat-v2 blue-chambray" href="#">
                                    <div class="visual">
                                        <i class="fa fa-building"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">

                                            <span data-counter="counterup" data-value="{{$groupposts2day}}">0</span>
                                        </div>
                                        <div class="desc"> groups posts Today </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                                             <a class="dashboard-stat dashboard-stat-v2 blue-ebonyclay" href="#">
                                    <div class="visual">
                                        <i class="fa fa-user-secret"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">

                                            <span data-counter="counterup" data-value="{{$usersposts2day}}">0</span>
                                        </div>
                                        <div class="desc"> user posts Today </div>
                                    </div>
                                </a>
                            </div>


        

</div>
        
<div class="page-bar">

    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-tachometer"></i>
            <a href="#">Monthly</a>
        </li>
  
    </ul>
    <div  class="col-md-12 page-toolbar">

    </div>


                                   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 blue-oleo" href="#">
                                    <div class="visual">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="{{$usersmonthly}}">0</span>
                                        </div>
                                        <div class="desc">  users registered this month</div>
                                    </div>
                                </a>
                            </div>
                
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<a class="dashboard-stat dashboard-stat-v2 blue-dark" href="#">
                                    <div class="visual">
                                        <i class="fa fa-file"></i> 
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="{{$postsmonthly}}">0</span>
                                        </div>
                                        <div class="desc">  Posts this month</div>
                                    </div>
                                </a>
                            </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 blue-chambray" href="#">
                                    <div class="visual">
                                        <i class="fa fa-building"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="{{$grouppostsmonthly}}">0</span>
                                        </div>
                                        <div class="desc">  groups this month</div>
                                    </div>
                                </a>                                                                                        

                            </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 blue-ebonyclay" href="#">
                                    <div class="visual">
                                        <i class="fa fa-user-secret"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="{{$userspostsmonthly}}">0</span>
                                        </div>
                                        <div class="desc">user posts month</div>
                                    </div>
                                </a>
                            </div>
</div>
<div class="page-bar">

    <ul class="page-breadcrumb">
        <li>
            <i class="fa fa-tachometer"></i>
            <a href="#">Total</a>
        </li>
  
    </ul>
    <div  class="col-md-12 page-toolbar">

    </div>


     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 blue-oleo" href="#">
                                    <div class="visual">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number"> 
                                            <span data-counter="counterup" data-value="{{ $users}}">0</span> </div>
                                        <div class="desc"> users registered </div>
                                    </div>
                                </a>
                            </div>

                               <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<a class="dashboard-stat dashboard-stat-v2 blue-dark" href="#">
                                    <div class="visual">
                                        <i class="fa fa-file"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number"> 
                                            <span data-counter="counterup" data-value="{{$posts}}">0</span> </div>
                                        <div class="desc"> Posts </div>
                                    </div>
                                </a>
                            </div>                                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 blue-chambray" href="#">
                                    <div class="visual">
                                        <i class="fa fa-building"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number"> 
                                            <span data-counter="counterup" data-value="{{$groupposts}}">0</span> </div>
                                        <div class="desc"> groups posts </div>
                                    </div>
                                </a>
                            </div>
                                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 blue-ebonyclay" href="#">
                                    <div class="visual">
                                        <i class="fa fa-user-secret"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number"> 
                                            <span data-counter="counterup" data-value="{{$usersposts}}">0</span> </div>
                                        <div class="desc"> user posts </div>
                                    </div>
                                </a>
                            </div>


     </div>   
</div>

 <div class="row">                 
<div class="col-lg-6 col-xs-12 col-sm-12">
                            <div class="portlet light ">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption">
                                        <i class="icon-bubbles font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Latest posts</span>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#portlet_comments_1" data-toggle="tab" aria-expanded="true"> Users </a>
                                        </li>
                                        <li class="">
                                            <a href="#portlet_comments_2" data-toggle="tab" aria-expanded="false"> groups </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="portlet_comments_1">
                                            <!-- BEGIN: Comments -->

                                            @foreach($latestPosts as $post)
                                            <div class="mt-comments">
                                                <div class="mt-comment">
                                                    <div class="mt-comment-img">
                                                        @if(isset($post->user->image))
                                                        <img style="width:45px;height: 45px" src="{{url('')}}/{{$post->user->image}}"> 
                                                    @else
                                                        <img  src="../assets/pages/media/users/avatar1.jpg"> 

                                                    @endif</div>
                                                    <div class="mt-comment-body">
                                                        <div class="mt-comment-info">
                                                            <span class="mt-comment-author">{{$post->user->name}}</span>
                                                            <span class="mt-comment-date">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($post->created_at))->diffForHumans()}}</span>
                                                        </div>
                                                        <div class="mt-comment-text"> {{$post->body}} </div>

                                                    </div>
                                                </div>

                                            </div>
                                            @endforeach
                                            <!-- END: Comments -->
                                        </div>
                                        <div class="tab-pane" id="portlet_comments_2">
                                            <!-- BEGIN: Comments -->
                                           @foreach($latestgPosts as $post)
                                            <div class="mt-comments">
                                                <div class="mt-comment">
                                                    <div class="mt-comment-img">
                                                        @if(isset($post->user->image))
                                                        <img style="width:45px;height: 45px" src="{{url('')}}/{{$post->user->image}}"> 
                                                    @else
                                                        <img  src="../assets/pages/media/users/avatar1.jpg"> 

                                                    @endif</div>
                                                    <div class="mt-comment-body">
                                                        <div class="mt-comment-info">
                                                            <span class="mt-comment-author">{{$post->user->name}}<small>  in </small>{{$post->group->name}}</span>
                                                            <span class="mt-comment-date">{{ \Carbon\Carbon::createFromTimeStamp(strtotime($post->created_at))->diffForHumans()}}</span>
                                                        </div>
                                                        <div class="mt-comment-text"> {{$post->body}} </div>

                                                    </div>
                                                </div>

                                            </div>
                                            @endforeach
                                            <!-- END: Comments -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="dashboard-stat2 ">
                                    <div class="display">
                                        <div class="number">
                                            <h3 class="font-red-haze">
                                                <span data-counter="counterup" data-value="{{$likes}}">0</span>
                                            </h3>
                                            <small>Total likes</small>
                                        </div>
                                        <div class="icon">
                                            <i class="icon-like"></i>
                                        </div>
                                    </div>
                                    <div class="progress-info">
                                        <div class="progress">
                                            <span style="width: 85%;" class="progress-bar progress-bar-success red-haze">
                                                <span class="sr-only">85% change</span>
                                            </span>
                                        </div>
                             
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="dashboard-stat2 ">
                                    <div class="display">
                                        <div class="number">
                                            <h3 class="font-green-sharp">
                                                <span data-counter="counterup" data-value="{{$comments}}">0</span>
                                            </h3>
                                            <small>TOTAL Comments</small>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-comment "></i>
                                        </div>
                                    </div>
                                    <div class="progress-info">
                                        <div class="progress">
                                            <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                                <span class="sr-only">76% progress</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12 col-sm-12">
                                <div class="portlet light ">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-bubble font-dark hide"></i>
                                            <span class="caption-subject font-hide bold uppercase">Recent Users</span>
                                        </div>

                                    </div>
                                    <div class="portlet-body">
                                        <div class="row">
                                            @foreach($recentUsers as $value)

                                            <div class="col-md-4">
                                                <!--begin: widget 1-2 -->
                                                <div class="mt-widget-1">
                                                
                                                    <div class="mt-img">

                                                         @if(isset($post->user->image))
                                                        <img style="width:70px;height: 70px" src="{{url('')}}/{{$post->user->image}}"> 
                                                    @else
                                                        <img src="../assets/pages/media/users/avatar80_7.jpg"> 

                                                    @endif
                                                    </div>
                                                    <div class="mt-body">
                                                        <h3 class="mt-username">{{$value->name}}</h3>
                                      
                                                    </div>
                                                </div>
                                                <!--end: widget 1-2 -->
                                            </div>
                                           @endforeach

                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                    </div>
      
@endsection

