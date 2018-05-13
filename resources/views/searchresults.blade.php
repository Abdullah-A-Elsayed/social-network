@extends('layouts.base')

@section ('title') 
<title> search results </title> 
@endsection

@section('css')
        <link rel="stylesheet" href="css/search.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontawesome-all.css">
@endsection

@section('content')
	<div class="container full">
		<div class="row">
			<!-- My friends list-->
	        <div class="friendlist col-md-8">
	          
	        @foreach($user as $users)
	            <div class="friend">
	                <div class="row">
              @if(!empty($users->image))
<img src="{{$users->image}}" class="rounded-circle" alt="profile pic" width="90" height="75"
                                  >

                      @else
<img src="{{url('')}}/imgs/prof.jpg" class="rounded-circle" alt="profile pic" width="90" height="75"
                                  >

              @endif   	                      <div class="postdetails col-md-6">
	                        <h4>{{$users->name}}</h4>
	                        <a href="{{url('profile')}}/{{$users->id}}"> View Profile </a><br>
	                        <span>{{$users->mutual}} mutual friends </span>
	                      </div>
	                     <a class="btn btn-md btn-success" role="button" href="#"
                         style="margin-right: 0px;height: 38px;padding:8px 25px;margin-top: 20px;">Add friend</a>

	                </div>
	            </div>
	        @endforeach

		    <div style="margin:10px auto" class="col-md-3 ">
		    	{{ $user->links() }}
			</div>
	        </div>
		</div>
	</div>

@endsection
