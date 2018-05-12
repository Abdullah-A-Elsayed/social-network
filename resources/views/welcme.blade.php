<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>
        <!-- Meta tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Egypt Social Network from ASU"> 
        <meta name="keywords" content="Egypt,Asu,engineering,CSE,SocialNetwork">
        <meta name="author" content="Gasser">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <!-- Meta tags -->
        <!-- links tags -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/fontawesome-all.css">
        <link rel="stylesheet" href="css/welcome.css">
        <!-- <link rel="shortcut icon" href="images/logo.ico">
        <!-- links tags -->
    </head>
    
    <body>
        <div class="overlay"></div>
        <section class="top-part">
          <video controls autoplay loop>
            <source src="videos/video.mp4" type="video/mp4">
            <source src="videos/video.ogg" type="video/ogg">
            Your browser does not support the video tag.
          </video>
        </section>
        <section class="intro"> 
            <h1 style="color: #F40602;font-size: 5em;margin-bottom:25px">Zipline</h1>
            <p style="color: #FFF9F9;font-size: 25px;font-weight: 400"> Egypt's First Social Network </p>
            <a href="{{url('signin')}}">Sign In</a> <span>/</span>
            <a href="{{url('signup')}}">Sign Up</a>
            <p class="num_users">
                <span style="font-size: 50px;color: #FF8300;">5 </span> <!-- bring from database-->
                <i class="fa fa-users fa-2x"></i></p>
        </section>
       
    </body>
</html>
</html>