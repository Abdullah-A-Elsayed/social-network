@extends('layouts.base')

@section ('title') <title>edit</title> @endsection

@section('css')
        <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/fontawesome-all.css') }}">
@endsection

@section('content')
  <div class="koko">
      <form  class="container test" style="width: 50%" method="post" action="{{url('editprofile')}}" id="myform" enctype='multipart/form-data'  >
      {{csrf_field()}}

      <div class="form-group">
         <!-- <label>Full Name</label> -->
        <div class="row">


                    <div class="col-md-6">
            <input  autofocus type="text"  class="form-control" value="{{Auth::user()->name}}" placeholder="Fullname" name="name" required>
          </div>
          <div class="col-md-6">


            <input disabled type="email" class="form-control" value="{{Auth::user()->email}}" id="email" name="email" required>
          </div>
        </div>
      </div>
      
      <div class="form-group">
         <!-- <label>Full Name</label> -->
        <div class="row">
          <div class="col-md-6">
          <input type="Password" class="form-control"  placeholder="Password" id="password" name="password">
          </div>


          <div class="col-md-6">
          <input type="Password" class="form-control"  placeholder="Confirm password" id="repassword" name="repassword">
          </div>
        </div>

      </div>
            <div class="form-group">

        <div class="row">
          
                    <div class="col-md-6">
            <input type="text" class="form-control" value="{{Auth::user()->phone}}"  placeholder="Phone" name="phone" required>
          </div>
        </div>
      </div>
      <!-- Country and city -->
      <div class="form-group">
        <div class="row">
          <div class="col-md-6">
            <select  class="form-control incshgt" name="country" id="mark" required>
            <option value=''>Choose your Country</option>
            @foreach ($country as $value)

            @if(Auth::user()->country ==$value['id'])
            <option selected value='{{$value->id}}'>{{$value->name}}</option>
            @else
            <option value='{{$value->id}}'>{{$value->name}}</option>
            @endif
            @endforeach
            </select>
          </div>
          <div class="col-md-6">
            <select class="form-control incshgt" name="city" id="series" required>
            <option value=''>Choose your City</option>
            @foreach ($city as $value)

            @if(Auth::user()->city ==$value['id'])
            <option selected data-chained="{{$value->country_id}}" value='{{$value->id}}'>{{$value->name}}</option>
            @else
            <option data-chained="{{$value->country_id}}" value='{{$value->id}}'>{{$value->name}}</option>
            @endif   

           @endforeach
            </select>
          </div>
        </div>
      </div>
      

      
      <!-- interests -->
            <h5>Choose your interests</h5> <hr>
      <div class="form-group">
        <div class="row">
        @foreach ($interest as $interests)

            <div class="col-md-3">

              @php
                $values=explode(',',Auth::user()->interests);

               @endphp

               @if(in_array($interests['id'],$values))
              <input checked name="interests[]" type="checkbox" value="{{$interests->id}}">
              @else

            <input  name="interests[]" type="checkbox" value="{{$interests->id}}">

              @endif
                        <label>{{$interests->name}}</label>
            </div>
      @endforeach

        </div>
      </div>
      
      <div class="form-group">
        <div class="row">
          <div class="col-md-5">
            <label style="margin-bottom: 15px;">Upload your picture</label>
            <input type="file" id="image" name="image">
          </div>
          @if(isset($_GET['message']))
          {{$_GET['message']}}
          @endif
        </div>
      </div>
      
      <button type="submit" class="btn btn-primary sav" name="Save">Save Changes</button>
    </form>
  </div>
@endsection
@section('script')
  <script type="text/javascript">
       $(document).ready(function () {
           $("#series").chained("#mark");





       });
   </script>
                <script type="text/javascript">
   $("#myform").validate({
  rules: {
first: {
      required: true,
        maxlength: 90,

    },
last: {
      required: true,
        maxlength: 90,

    },
email: {
                    required: true,
                    email: true,
                    remote: {
                                url: 'emailcheck',
                                type: 'get',
                                data: {


                                      email: function() {
                                        return $('#email').val(); 
                                      },

                                           
                            },
                    }
                },

password: {
            maxlength: 255,
            minlength: 8,

    },

repassword: {
    equalTo: "#password",
    maxlength: 255,
    minlength: 8,

},

phone:{
  required: true,
  maxlength: 30,

  } ,

country:{
  required: true,

  } ,
city:{
  required: true,

  } , 
   },


  messages: {

    email: {
      required: "please enter your email",
      email: "Your email address must be in the format of name@domain.com",
      remote:'this email is already taken'
    }
,
    repassword: {
      equalTo:'passwords don\'t match'
    }  }
});
   </script>
@endsection
