<!--<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="test.css">
        <!-- Scripts -->
<!--    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
   <!-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/test.css') }}" rel="stylesheet">-->
    


<!DOCTYPE html>
    
<html>
    <head>
        <title>Home</title>
        <!-- Meta tags -->
        <meta charset="UTF-8">
      <!--  <meta name="description" content="Meca student activity in ASU Engineering"> 
        <meta name="keywords" content="Meca,Asu,engineering,studentactivity">-->
        <meta name="author" content="Gasser">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Meta tags -->
        <!-- links tags -->
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- <link rel="shortcut icon" href="images/logo.ico">
        <!-- links tags -->
    </head>
    
    <body>
       <header>
            <div class="header" >
               <div class="navbar row">
                  <img src="{{ asset('imgs/prof.jpg') }}" class="rounded-circle" alt="profile pic" width="140" height="110">
                  <div class="col-md-2" style="padding: 0 5px;">
                    <h3>Test Test<!-- from database--></h3>
                    <a href="profile.html"> View Profile </a>
                 </div>
                  <form class="form-inline search col-md-4" style="margin-left: 0;margin-top: 5px">
                    <input class="form-control mr-sm-2" style="height: 38px;width:370px;" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"style="border: 0">
                        <img src="imgs/Search1.ico" style="height: 30px;width: 30px;">
                    </button>
                  </form>
                    <ul>
                        <li> <a href="home.html"> Home </a> </li>
                        <li> <a href="friends.html"/>Friends</a> </li>
                        <li> <a href="groups.html"/>Groups</a> </li>
                        <li> <a href="messages.html"/>Messages</a> </li>
                        <li> <a href="welcome.html"/>Sign Out</a> </li>
                    </ul>
               </div>
            </div>
        </header>
        
        <div class="row posts">
        <!-- friends posts -->
        <section class="fpost col-md-5">
            <div class="post container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                    <img src="{{ asset('imgs/prof.jpg') }}" class="rounded-circle" alt="profile pic" width="90" height="75"
                    style="border: solid 1px green">
                      <div class="postdetails col-md-8">
                        <h4>test test <!-- from database--></h4>
                        <a href="#"> View Profile </a>
                     </div>
                </div>
                
                <div class="row">
                   <p> test   test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                   </p>
                </div>
                
                <div class="row">
                    <button style="margin-left: 15px;"class="col-sm-3 btn btn-outline-success my-2 my-sm-1" type="submit" name="like" value="Like">Like</button>
                    <div class="col-sm-1"></div>
                    <button class="comnt1 col-sm-3 btn btn-outline-success my-2 my-sm-1" type="submit" name="comment" value="comment">Comment</button>
                    <div class="col-sm-1"></div>
                    <button class="col-sm-3 btn btn-outline-success my-2 my-sm-1" type="submit" name="report" value="report">Report</button>
                </div>
                
                <div class="comment row">
                   <p><img src="{{ asset('imgs/prof.jpg') }}" class="rounded-circle" alt="profile pic" width="50" height="40">
                   test   test  test  test  test  test  test  test  test  test</p>
                   <p><img src="{{ asset('imgs/prof.jpg') }}" class="rounded-circle" alt="profile pic" width="50" height="40">
                   test   test  test  test  test  test  test  test  test  test</p>
                   <p><img src="{{ asset('imgs/prof.jpg') }}" class="rounded-circle" alt="profile pic" width="50" height="40">
                   test   test  test  test  test  test  test  test  test  test</p>
                </div>
                
                <div class="lin1">
                    <form class="form-inline row">
                        <input autofocus class="form-control mr-sm-1" style="width: 420px;" type="text" placeholder="Write your Comment" aria-label="Comment">
                        <button class="btn btn-outline-success my-3 my-sm-0" type="submit">OK</button>
                    </form>
                </div>
            </div>
                <div class="carousel-item">
                  <div class="row">
                    <img src="{{ asset('imgs/prof.jpg') }}" class="rounded-circle" alt="profile pic" width="90" height="75"
                    style="border: solid 1px green">
                      <div class="postdetails col-md-8">
                        <h4>test test <!-- from database--></h4>
                        <a href="#"> View Profile </a>
                     </div>
                </div>
                
                <div class="row">
                   <p> test   test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                   </p>
                </div>
                
                <div class="row">
                    <button style="margin-left: 15px;"class="col-sm-3 btn btn-outline-success my-2 my-sm-1" type="submit" name="like" value="Like">Like</button>
                    <div class="col-sm-1"></div>
                    <button class="comnt1 col-sm-3 btn btn-outline-success my-2 my-sm-1" type="submit" name="comment" value="comment">Comment</button>
                    <div class="col-sm-1"></div>
                    <button class="col-sm-3 btn btn-outline-success my-2 my-sm-1" type="submit" name="report" value="report">Report</button>
                </div>
                
                <div class="comment row">
                   <p><img src="{{ asset('imgs/prof.jpg') }}" class="rounded-circle" alt="profile pic" width="50" height="40">
                   test   test  test  test  test  test  test  test  test  test</p>
                   <p><img src="{{ asset('imgs/prof.jpg') }}" class="rounded-circle" alt="profile pic" width="50" height="40">
                   test   test  test  test  test  test  test  test  test  test</p>
                   <p><img src="{{ asset('imgs/prof.jpg') }}" class="rounded-circle" alt="profile pic" width="50" height="40">
                   test   test  test  test  test  test  test  test  test  test</p>
                </div>
                
                <div class="lin1">
                    <form class="form-inline row">
                        <input autofocus class="form-control mr-sm-1" style="width: 420px;" type="text" placeholder="Write your Comment" aria-label="Comment">
                        <button class="btn btn-outline-success my-3 my-sm-0" type="submit">OK</button>
                    </form>
                </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <img src="{{ asset('imgs/prof.jpg') }}" class="rounded-circle" alt="profile pic" width="90" height="75"
                    style="border: solid 1px green">
                      <div class="postdetails col-md-8">
                        <h4>test test <!-- from database--></h4>
                        <a href="#"> View Profile </a>
                     </div>
                </div>
                
                <div class="row">
                   <p> test   test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                   </p>
                </div>
                
                <div class="row">
                    <button style="margin-left: 15px;"class="col-sm-3 btn btn-outline-success my-2 my-sm-1" type="submit" name="like" value="Like">Like</button>
                    <div class="col-sm-1"></div>
                    <button class="comnt1 col-sm-3 btn btn-outline-success my-2 my-sm-1" type="submit" name="comment" value="comment">Comment</button>
                    <div class="col-sm-1"></div>
                    <button class="col-sm-3 btn btn-outline-success my-2 my-sm-1" type="submit" name="report" value="report">Report</button>
                </div>
                
                <div class="comment row">
                   <p><img src="{{ asset('imgs/prof.jpg') }}" class="rounded-circle" alt="profile pic" width="50" height="40">
                   test   test  test  test  test  test  test  test  test  test</p>
                   <p><img src="{{ asset('imgs/prof.jpg') }}" class="rounded-circle" alt="profile pic" width="50" height="40">
                   test   test  test  test  test  test  test  test  test  test</p>
                   <p><img src="{{ asset('imgs/prof.jpg') }}" class="rounded-circle" alt="profile pic" width="50" height="40">
                   test   test  test  test  test  test  test  test  test  test</p>
                </div>
                
                <div class="lin1">
                    <form class="form-inline row">
                        <input autofocus class="form-control mr-sm-1" style="width: 420px;" type="text" placeholder="Write your Comment" aria-label="Comment">
                        <button class="btn btn-outline-success my-3 my-sm-0" type="submit">OK</button>
                    </form>
                </div>
            </div>
          </div>
  
            <a class="crcont carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="crcont carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            </div>

            </div>
        </section>
        
        <!-- group posts -->
        <section class="gpost col-md-5">
            <div class="post container">
            <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                    <img src="{{ asset('imgs/prof.jpg') }}" class="rounded-circle" alt="profile pic" width="90" height="75"
                    style="border: solid 1px green">
                      <div class="postdetails col-md-8">
                        <h4>test test <!-- from database--></h4>
                        <a href="#"> View Profile </a>
                     </div>
                </div>
                
                <div class="row">
                   <p> test   test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                   </p>
                </div>
                
                <div class="row">

                    <div class="col-sm"><button style="margin-left: 15px;" class=" btn btn-outline-success  my-sm-1" type="submit" name="like" value="Like">Like</button></div>
                    <div class="col-sm"><button class="comnt  btn btn-outline-success my-sm-1" type="submit" name="comment" value="comment">Comment</button></div>
                    <div class="col-sm"><button class="btn btn-outline-success  my-sm-1" type="submit" name="report" value="report">Report</button></div>
                </div>
                
                <div class="comment row">
                   <p><img src="{{ asset('imgs/prof.jpg') }}" class="rounded-circle" alt="profile pic" width="50" height="40">
                   test   test  test  test  test  test  test  test  test  test</p>
                   <p><img src="{{ asset('imgs/prof.jpg') }}" class="rounded-circle" alt="profile pic" width="50" height="40">
                   test   test  test  test  test  test  test  test  test  test</p>
                   <p><img src="{{ asset('imgs/prof.jpg') }}" class="rounded-circle" alt="profile pic" width="50" height="40">
                   test   test  test  test  test  test  test  test  test  test</p>
                </div>
                
                <div class="lin">
                    <form class="form-inline row">
                        <input autofocus class="form-control mr-sm-1" style="width: 420px;" type="text" placeholder="Write your Comment" aria-label="Comment">
                        <button class="btn btn-outline-success my-3 my-sm-0" type="submit">OK</button>
                    </form>
                </div>
            </div>
                <div class="carousel-item">
                    <div class="row">
                      <img src="{{ asset('imgs/prof.jpg') }}" class="rounded-circle" alt="profile pic" width="90" height="75"
                      style="border: solid 1px green">
                        <div class="postdetails col-md-8">
                          <h4>test test <!-- from database--></h4>
                          <a href="#"> View Profile </a>
                       </div>
                  </div>
                  
                  <div class="row">
                     <p> test   test  test  test  test  test  test  test  test  test
                      test  test  test  test  test  test  test  test
                      test  test  test  test  test  test  test  test  test
                      test  test  test  test  test  test  test  test  test
                      test  test  test  test  test  test  test  test  test
                      test  test  test  test  test  test  test  test  test
                      test  test  test  test  test  test  test  test  test
                      test  test  test  test  test  test  test  test  test
                     </p>
                  </div>
                  
                  <div class="row">
                      <button style="margin-left: 15px;"class="col-sm-3 btn btn-outline-success my-2 my-sm-1" type="submit" name="like" value="Like">Like</button>
                      <div class="col-sm-1"></div>
                      <button class="comnt col-sm-3 btn btn-outline-success my-2 my-sm-1" type="submit" name="comment" value="comment">Comment</button>
                      <div class="col-sm-1"></div>
                      <button class="col-sm-3 btn btn-outline-success my-2 my-sm-1" type="submit" name="report" value="report">Report</button>
                  </div>
                  
                  <div class="comment row">
                     <p><img src="{{ asset('imgs/prof.jpg') }}" class="rounded-circle" alt="profile pic" width="50" height="40">
                     test   test  test  test  test  test  test  test  test  test</p>
                     <p><img src="{{ asset('imgs/prof.jpg') }}" class="rounded-circle" alt="profile pic" width="50" height="40">
                     test   test  test  test  test  test  test  test  test  test</p>
                     <p><img src="{{ asset('imgs/prof.jpg') }}" class="rounded-circle" alt="profile pic" width="50" height="40">
                     test   test  test  test  test  test  test  test  test  test</p>
                  </div>
                  
                  <div class="lin">
                      <form class="form-inline row">
                          <input autofocus class="form-control mr-sm-1" style="width: 420px;" type="text" placeholder="Write your Comment" aria-label="Comment">
                          <button class="btn btn-outline-success my-3 my-sm-0" type="submit">OK</button>
                      </form>
                  </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <img src="{{ asset('imgs/prof.jpg') }}" class="rounded-circle" alt="profile pic" width="90" height="75"
                      style="border: solid 1px green">
                        <div class="postdetails col-md-8">
                          <h4>test test <!-- from database--></h4>
                          <a href="#"> View Profile </a>
                     </div>
                </div>
                
                <div class="row">
                   <p> test   test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                    test  test  test  test  test  test  test  test  test
                   </p>
                </div>
                
                <div class="row">
                    <button style="margin-left: 15px;"class="col-sm-3 btn btn-outline-success my-2 my-sm-1" type="submit" name="like" value="Like">Like</button>
                    <div class="col-sm-1"></div>
                    <button class="comnt col-sm-3 btn btn-outline-success my-2 my-sm-1" type="submit" name="comment" value="comment">Comment</button>
                    <div class="col-sm-1"></div>
                    <button class="col-sm-3 btn btn-outline-success my-2 my-sm-1" type="submit" name="report" value="report">Report</button>
                </div>
                
                <div class="comment row">
                   <p><img src="{{ asset('imgs/prof.jpg') }}" class="rounded-circle" alt="profile pic" width="50" height="40">
                   test   test  test  test  test  test  test  test  test  test</p>
                   <p><img src="{{ asset('imgs/prof.jpg') }}" class="rounded-circle" alt="profile pic" width="50" height="40">
                   test   test  test  test  test  test  test  test  test  test</p>
                   <p><img src="{{ asset('imgs/prof.jpg') }}" class="rounded-circle" alt="profile pic" width="50" height="40">
                   test   test  test  test  test  test  test  test  test  test</p>
                </div>
                
                <div class="lin">
                    <form class="form-inline row">
                        <input autofocus class="form-control mr-sm-1" style="width: 420px;" type="text" placeholder="Write your Comment" aria-label="Comment">
                        <button class="btn btn-outline-success my-3 my-sm-0" type="submit">OK</button>
                    </form>
                </div>
            </div>
          </div>
  
            <a class="crcont carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="crcont carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            </div>
                
            </div>
        </section>
        </div>
        <footer>
            <!-- footer -->
            <div class="footer">
                <p> Copyrights &copy; 2018-CSE'18 - Built With Passion </p>
            </div>
            <!-- footer-->  
        </footer>
        <script src="{{ asset('js/jquery-3.2.1.min.js') }}" defer></script>
        <script src="{{ asset('js/home.js') }}" defer></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
        <!--<script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/home.js"></script>
    </body>
</html>