<!-- form and assignment date 03-02-2022 -->

<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Registation Form </title>
	<link rel="icon" type="image/x-icon"
		href="https://uxwing.com/wp-content/themes/uxwing/download/editing-user-action/register-icon.png">
	<style>
		.body {
			/* background-image: url('../form/istockphoto-1138740533-612x612.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 100% 100%; */
			background-image: linear-gradient(to right, rgb(29, 29, 172), rgb(56, 85, 217), rgb(35, 154, 200));
		}

		.buttonRadius {
			border-radius: 47px !important;

		}

		.mr {
			margin: 5%;
			height: 3rem;
			/* padding: 2%; */
		}

		.clr {
			width: 19rem;
			height: 4rem;
			background: rgb(0, 13, 255);
		}

		.white {
			background-color: rgb(244, 244, 244);
			border-start-start-radius: 136px 400px;
			;
			border-end-start-radius: 136px 400px;
			;
		}
		
	</style>
</head>

<div class="alert alert-info fade in">
	<?php error_reporting(0);
					 if($_GET['msg']){ $msg = $_GET['msg'];	?>	
					 <strong  >Info!</strong> <?php echo $msg ;?> <a href="#" class="close " data-dismiss="alert" aria-label="close">&times;</a>.										          
						
			   <?php } ?>					
    
  </div>
<body class=" body">
	<div class="container ">
		<div class=" row " style="padding: 4% 0% 4% 1%; margin-top: 2%;">
			<div class="col-md-2 text-center">
				<div style=" color: bisque ; margin-top: 39%;">
					<svg xmlns="http://www.w3.org/2000/svg" width="10rem" height="10rem" fill="currentColor"
						class="bi bi-airplane" viewBox="0 0 16 16">
						<path
							d="M6.428 1.151C6.708.591 7.213 0 8 0s1.292.592 1.572 1.151C9.861 1.73 10 2.431 10 3v3.691l5.17 2.585a1.5 1.5 0 0 1 .83 1.342V12a.5.5 0 0 1-.582.493l-5.507-.918-.375 2.253 1.318 1.318A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.354-.854l1.319-1.318-.376-2.253-5.507.918A.5.5 0 0 1 0 12v-1.382a1.5 1.5 0 0 1 .83-1.342L6 6.691V3c0-.568.14-1.271.428-1.849Zm.894.448C7.111 2.02 7 2.569 7 3v4a.5.5 0 0 1-.276.447l-5.448 2.724a.5.5 0 0 0-.276.447v.792l5.418-.903a.5.5 0 0 1 .575.41l.5 3a.5.5 0 0 1-.14.437L6.708 15h2.586l-.647-.646a.5.5 0 0 1-.14-.436l.5-3a.5.5 0 0 1 .576-.411L15 11.41v-.792a.5.5 0 0 0-.276-.447L9.276 7.447A.5.5 0 0 1 9 7V3c0-.432-.11-.979-.322-1.401C8.458 1.159 8.213 1 8 1c-.213 0-.458.158-.678.599Z" />
					</svg>
					<br>
					<strong style="font-size:2rem ;">Welcome</strong><br>
					<small style="font-size:100%;"> You are 30 seconds away from earning your own money!</small>
				</div>
				<div class=" text-center buttonRadius mr white " style="margin-top: 58%;height: 3rem; width: 14rem;">
					<a href="#"> <strong style="text-decoration: none; color: black;">Login</strong></a>
				</div>
			</div>
			<div class="  col-md-10 text-center white " style="padding: 2%  2% 1% 9%;">
				<div class="row ">
					<div class="col-md-3 col-md-offset-9">
						<ul class="nav nav-tabs buttonRadius clr">
							<li class="active"><a class=" buttonRadius mr" href="#"> <strong> Employee</strong> </a>
							</li>
							<li><a href="#" class="buttonRadius mr" style="color: aliceblue;"><strong>Hirer</strong></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="text-right">
					<h1 class="text-center" style=" margin: 2rem 0rem 3rem 0rem;">Apply as a Employee</h1>
					
					<form class="form-horizontal" action="controller.php" method="POST">
						<div class="row">
							<div class="col-md-6">								
								<div class=" row form-group">
									<div class="form-group col-md-12">
										<input type="text" name="fname" class="form-control" placeholder="First Name*">
									</div>
								</div>
								<div class=" row form-group">
									<div class="form-group col-md-12">
										<input type="text" name="lname" class="form-control" placeholder="Last Name*">
									</div>
								</div>
								<div class=" row form-group">
									<div class="form-group col-md-12">
										<input type="password" name="password" class="form-control" placeholder="Password*">
									</div>
								</div>
								<div class=" row form-group">
									<div class="form-group col-md-12">
									
										<input type="password" name="cpassword" class="form-control"
											placeholder="Confirm Password*">		
									</div>
								</div>
								<div class=" row form-group text-left">
									<div class="form-group  col-md-12">
										<input type="radio" name="gender" checked="" value="Male"> <strong>Male</strong>
										<input type="radio" name="gender" value="Female"><strong>Female</strong>
									</div>
								</div>
							</div>

							<div class="col-md-6">

								<div class=" row form-group">
									<div class="form-group col-md-12 ">
										<input type="email" name="email" class="form-control" placeholder="Your Email*">
									</div>
								</div>
								<div class=" row form-group">
									<div class="form-group col-md-12">
										<input type="number" name="contactnum" class="form-control" placeholder="Your Phone*">
									</div>
								</div>
								<div class=" row form-group">
									<div class="form-group col-md-12">
										<select class="form-control" name="question">
											<option value="">Please Select your Sequrity Question</option>
											<option value="DOB">DOB</option>
											<option value="BOOK">BOOK</option>
											<option value="ACTOR">ACTOR</option>
											<option value="MOVIE">MOVIE</option>
											<option value="GOD">GOD</option>
										</select>
									</div>
								</div>
								<div class=" row form-group">
									<div class="form-group col-md-12">
										<input type="text" name="answer" class="form-control" placeholder="Ener Your Answer*">
									</div>
								</div>
								<div class=" row form-group">
									<div class=" form-group text-right col-md-12">
										<input type="submit" name="register" class="btn buttonRadius "
											style=" height: 3rem; width: 14rem; background: blue; color: azure;"
											value="Registation">
									</div>
								</div>

							</div>

						</div>
				</div>		

				</form>

			</div>
		</div>
		
	</div>
</body>

</html>