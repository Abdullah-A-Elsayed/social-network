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
		<form class="container" style="width: 50%" method="post" action="" >
			
			<div class="form-group">
			   <!-- <label>Full Name</label> -->
				<div class="row">
					<div class="col-md-6">
					  <input  autofocus type="text"  class="form-control" placeholder="First name" name="First name" required>
					</div>
					<div class="col-md-6">
					  <input type="text"  class="form-control" placeholder="Last name" name="Last name" required>
					</div>
				</div>
			</div>
			
			<div class="form-group">
			   <!-- <label>Full Name</label> -->
				<div class="row">
					<div class="col-md-6">
						<input type="text" class="form-control"  placeholder="Phone" name="Phone" required>
					</div>
					<div class="col-md-6">
						<input type="email" class="form-control" placeholder="E-mail" name="Email" required>
					</div>
				</div>
			</div>
			
			<div class="form-group">
			   <!-- <label>Full Name</label> -->
				<div class="row">
					<div class="col-md-6">
					<input type="Password" class="form-control"  placeholder="Password" name="Password" required>
					</div>
					<div class="col-md-6">
						<input type="Password" class="form-control" placeholder="Confirm Password" name="rePassword" required>
					</div>
				</div>
			</div>
			
			<!-- Country and city -->
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
					  <select class="form-control incshgt" id="exampleFormControlSelect1" required>
						<option value=''>Choose your Country</option>
						<!-- bring from database-->
					  </select>
					</div>
					<div class="col-md-6">
					  <select class="form-control incshgt" id="exampleFormControlSelect1" required>
						<option value=''>Choose your City</option>
						<!-- bring from database-->
					  </select>
					</div>
				</div>
			</div>
			
			<!-- Uni and faculty -->
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
					  <select class="form-control incshgt" id="exampleFormControlSelect1" required>
						<option value=''>Choose your University</option>
						<!-- bring from database-->
					  </select>
					</div>
					<div class="col-md-6">
					  <select class="form-control incshgt" id="exampleFormControlSelect1" required>
						<option value=''>Choose your Faculty</option>
						<!-- bring from database-->
					  </select>
					</div>
				</div>
			</div>
			
			<!-- interests -->
            <h5>Choose your interests</h5> <hr>
			<div class="form-group">
				<div class="row">
					<div class="col-md-3">
					  <input type="checkbox" value="Swimming">
                      <label>Swimming</label>
					</div>
					<div class="col-md-3">
					  <input type="checkbox" value="Swimming">
                      <label>Swimming</label>
					</div>
                    <div class="col-md-3">
					  <input type="checkbox" value="Swimming">
                      <label>Swimming</label>
					</div>
                    <div class="col-md-3">
					  <input type="checkbox" value="Swimming">
                      <label>Swimming</label>
					</div>
                    <div class="col-md-3">
					  <input type="checkbox" value="Swimming">
                      <label>Swimming</label>
					</div>
                    <div class="col-md-3">
					  <input type="checkbox" value="Swimming">
                      <label>Swimming</label>
					</div>
                    <div class="col-md-3">
					  <input type="checkbox" value="Swimming">
                      <label>Swimming</label>
					</div>
                    <div class="col-md-3">
					  <input type="checkbox" value="Swimming">
                      <label>Swimming</label>
					</div>
				</div>
			</div>
			
			<div class="form-group">
				<div class="row">
					<div class="col-md-5">
						<label style="margin-bottom: 15px;">Upload your picture</label>
						<input type="file" name="pic">
					</div>
				</div>
			</div>
			
			<button type="submit" class="btn btn-primary" name="SignUp">Sign Up</button>
		</form>
	</div>
</body>
</html>