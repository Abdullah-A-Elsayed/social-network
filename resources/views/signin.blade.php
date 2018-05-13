@guest


<!DOCTYPE html>
<html>
    <head>
        <title>Sign In</title>
       <!-- Meta tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Egypt Social Network from ASU"> 
        <meta name="keywords" content="Egypt,Asu,engineering,CSE,SocialNetwork">
        <meta name="author" content="Gasser">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <!-- Meta tags -->
        <!-- links tags -->
        <link rel="stylesheet" href="css/signin.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- <link rel="shortcut icon" href="images/logo.ico">
        <!-- links tags -->
    </head>
    
    <body>
        <div>
            <form method="POST" class="container Shit" action="{{ route('login') }}">
                {{csrf_field()}}
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                          <input type="email" class="form-control" placeholder="Email" name="email" required>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                              <input type="password"  class="form-control" placeholder="Password" name="password" required>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-5"></div>
                        <div class="col-md-3">
                            <button type="submit" name="SignIn" class="btn btn-primary">
                                Sign In</button>
                        </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>


@endauth
@auth


<script type="text/javascript">
    window.location = "{{ url('/home') }}";//here double curly bracket
</script>

@endauth