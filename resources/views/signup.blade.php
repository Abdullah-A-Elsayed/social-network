@guest


<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Egypt Social Network from ASU"> 
    <meta name="keywords" content="Egypt,Asu,engineering,CSE,SocialNetwork">
    <meta name="author" content="Gasser">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Meta tags -->
    <!-- links tags -->
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="shortcut icon" href="images/logo.ico">
    <!-- links tags -->
</head>

<body>
	<div class="Shit">
	    <form  class="container" style="width: 50%" method="post" action="signup" id="myform" enctype='multipart/form-data'  >
      {{csrf_field()}}

      <div class="form-group">
         <!-- <label>Full Name</label> -->
        <div class="row">


                    <div class="col-md-6">
            <input  autofocus type="text"  class="form-control" placeholder="Fullname" name="name" required>
          </div>
          <div class="col-md-6">


            <input  type="email" placeholder="Enter your email" class="form-control" value="" id="email" name="email" required>
          </div>
        </div>
      </div>
      
      <div class="form-group">
         <!-- <label>Full Name</label> -->
        <div class="row">
          <div class="col-md-6">
          <input type="Password" class="form-control"  placeholder="Password" id="password" name="password" required>
          </div>


          <div class="col-md-6">
          <input type="Password" class="form-control"  placeholder="Confirm password" id="repassword" name="repassword" required>
          </div>
        </div>

      </div>
            <div class="form-group">

        <div class="row">
          
                    <div class="col-md-6">
            <input type="text" class="form-control"  placeholder="Phone" name="phone" required>
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
            <option value='{{$value->id}}'>{{$value->name}}</option>
            @endforeach
            </select>
          </div>
          <div class="col-md-6">
            <select class="form-control incshgt" name="city" id="series" required>
            <option value=''>Choose your City</option>
            @foreach ($city as $value)
            <option value='{{$value->id}}' data-chained="{{$value->country_id}}" >{{$value->name}}</option>
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
              <input name="interests[]" type="checkbox" value="{{$interests->id}}">
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
      
      <button type="submit" class="btn btn-primary" name="SignUp">Sign Up</button>
    </form>
	</div>

	    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('js/home.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{url('')}}/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>

        <script src="{{url('')}}/assets/global/plugins/jquery_chained-2.x/jquery.chained.js" type="text/javascript"></script>

                <script type="text/javascript">
       $(document).ready(function () {
           $("#series").chained("#mark");
       });
   </script>
                <script type="text/javascript">
   $("#myform").validate({
  rules: {
name: {
      required: true,
      	maxlength: 191,

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
	required: true,
            maxlength: 255,
            minlength: 8,

    },

repassword: {
	required: true,
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

</body>
</html>

@endauth
@auth


<script type="text/javascript">
    window.location = "{{ url('/home') }}";//here double curly bracket
</script>

@endauth
