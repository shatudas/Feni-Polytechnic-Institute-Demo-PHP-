<?php

session_start();
error_reporting(1);

unset($_SESSION["logstatus"]);

include("../Datebase/Connection.php");
$ob=new Datebase();



$UserName=isset($_POST["UserName"])? $_POST["UserName"]:"";
$password=isset($_POST["password"])? $_POST["password"]:"";

if (isset($_POST["submit"]))
{
	if (! empty($UserName) && ! empty($password))
	{

		$Logvar="SELECT*FROM `create_user` WHERE `name`='$UserName' AND `password`='$password' ";
		$VAR=$ob->link->query($Logvar);

		$Array=$VAR->fetch_array();

		if ($Array[1]==$UserName && $Array[4]==$password)
		{
			$_SESSION["logstatus"]=true;
			$_SESSION["logintype"]=$Array[3];
   $_SESSION["name"]=$Array[1];
   $_SESSION["image"]=$Array[6];
			print "<script>location='../Admin/index.php'</script>";

		}
		{
		 	echo "<script>alert('Your user name or Password is Incorrect..');</script>";
    // echo "<script>location='index.php'</script>";
		 }
		
	}
	else
	{
	  $ob->message="<i style='color:red'>Sorry Field Empty !!..</i>";
	}
}

?>




<!doctype html>
<html lang="en">
  <head>
  	<title>Login FPI</title>
    <meta charset="utf-8">
    <link rel="icon" href="images/FPI.jpg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	 <script type="text/javascript">
   function myFunction() {
   var x = document.getElementById("myInput");
   if (x.type === "password") {
    x.type = "text";
    } else {
    x.type = "password";
    }
   }
  </script>

	</head>
	<body>
	<section class="ftco-section">
		<?php  ?>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4" style="margin-top:-15px;">
					<div class="login-wrap py-2">
		    <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/FPI.jpg);">
		    </div>
						<form method="POST" class="login-form">
		      <div class="form-group">
		      	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
		      		<input type="text" class="form-control" name="UserName" placeholder="Username"  required >
		      		</div>
	         <div class="form-group">
	          <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	          <input type="password" class="form-control" name="password" placeholder="Password" id="myInput" required>
	         </div>
	         <div class="form-group d-md-flex">
           <div class="w-100 text-md-left">
												<input type="checkbox" onclick="myFunction()">
              <i style="color:#fff;">Show Password</i>
											</div>
											<div class="w-100 text-md-right">
												<a href="#">Forgot Password</a>
											</div>
	         </div>
	         <div class="form-group">
	          <button type="submit" class="btn form-control btn-primary px-3" name="submit">Get Login</button>
	         </div>
	         <div>
	         	<center><?php print $ob->meaasge;?></center>
	         </div>
	      </form>
	    </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

