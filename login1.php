<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TTT Action Program</title>
	<!-- boostrap file -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
		<!-- custome file -->
    <link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css"/>
	<script>
	function checkFEmail()
	{
		
	    
		var username = $('#username').val();
		if( username == "" )
		{
			$("#usenameerror").html("Username is required.");
			document.getElementById('username').style.borderColor = "red";
			$("#username").focus();
			return false;
		}
		else
		{
			document.getElementById('username').style.borderColor = "#D7D7D7";
			$("#usenameerror").html("");
		}
		
		var pwd = $('#pwd').val();
		if( pwd == "" )
		{
			$("#pwderror").html("Password is required.");
			document.getElementById('pwd').style.borderColor = "red";
			$("#pwderror").focus();
			return false;
		}
		else
		{
			document.getElementById('pwd').style.borderColor = "#D7D7D7";
			$("#pwderror").html("");
		}
		
	}
</script>
<style>
.error{
	color:red;
	text-align: center;
	     height: 25px;
}
.box{
	  border: none;
    box-shadow: none;
}
</style>
</head>
<body>
	<section class="overlay_background">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
					  <a href="javascript:void(0);"><img src="images/ar.png" class="img_center" alt=""></a>
						<div class="login_page">
							<div class="login_heading"><p> login</p></div>
							<div class="input_form">
						 <form method="post" action="addcontact.php" >
							 <div class="input_controls"> 
							   	<input type="text" name="username" id="username" class="box form-control" placeholder="referral iD">
							 </div>
								  <div class = "error" id = "usenameerror"></div>
							<div class="input_controls1"> 
								<input type="text" name="pwd" id="pwd" class="box form-control" placeholder="password" >
							</div>
								     <div class = "error" id = "pwderror"></div>
								<input type="hidden" name="fnctn" value="login" >
								<input type="submit" class="log_btn" value="login"  onclick="return checkFEmail();"/>
							</form>	
								  <a href="forget.php" class="forget_pwd">forget password?</a>
							</div> 
						</div>
						<div class="loginbottom_txt">
							<p>Don't have an account? <a href="signup.php" class="color_txt"> Get started</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>

	<script  src = "http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.js"></script>
    <script src="js/wow.min.js"></script>
	<script scr="js/script.js"></script>
</body>
</html>