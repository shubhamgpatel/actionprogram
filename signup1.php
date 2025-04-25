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
	function checkcontact()
	   {
	   
	   
	        
		// mob.test($.trim(phone)) == false
		
		var fname = $('#name').val();
		
		var name_regex = /^[a-zA-Z\s]+$/;
		if(( fname == "" ) || ($.trim(fname).length == 0))
		{
			$("#fnameerror").html("First Name is required.");
			document.getElementById('name').style.borderColor = "red";
			$("#name").focus();
			return false;
		}
		else if( fname.length <= 4 )
		{
			$("#fnameerror").html("Enter First Name more than 4 word");
			document.getElementById('name').style.borderColor = "red";
			$("#name").focus();
			return false;
		}
		else if (!fname.match(name_regex) ) 
		{
			$("#fnameerror").html("Enter alphabets2 only in First Name.");
			document.getElementById('name').style.borderColor = "red";
			$("#name").focus();
			return false;
		}
		else
		{
			document.getElementById('name').style.borderColor = "#D7D7D7";
			$("#fnameerror").html("");
		}
		
		 var Email = $('#Email').val();
		 var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		if( $.trim(Email).length == 0 )
		{
		      
			$("#emailerror").html("Email is required.");
			document.getElementById('Email').style.borderColor = "red";
			$("#Email").focus();
			return false;
		}
		else if(filter.test($.trim(Email)) ==false)
		{       
		       
			$("#emailerror").html("invalid email id");
			document.getElementById('Email').style.borderColor = "red";
			$("#Email").focus();
			return false;
		}
		else
		{     
		        document.getElementById('Email').style.borderColor = "#D7D7D7";
		        $("#emailerror").html("");
		}	
		
		
		var phone = $('#phone').val();
		var mob = /^[1-9]{1}[0-9]{9}$/;
		if ($.trim(phone).length == 0 ) 
		{
			$("#phoneerror").html("Phone Number is required..");
			document.getElementById('phone').style.borderColor = "red";
			$("#phone").focus();
			return false;
		}
		else if (mob.test($.trim(phone)) == false) 
		{
			$("#phoneerror").html("Please enter valid Phone number.");
			document.getElementById('phone').style.borderColor = "red";
			$("#phone").focus();
			return false;
		}
		else
		{
			document.getElementById('phone').style.borderColor = "#D7D7D7";
			$("#phoneerror").html("");
		}
		
		
		var Password = $('#pwd').val();
		if( Password == "" )
		{
			$("#Passworderror").html("Password is required.");
			document.getElementById('pwd').style.borderColor = "red";
			$("#pwd").focus();
			return false;
		}
		else
		{
			document.getElementById('pwd').style.borderColor = "#D7D7D7";
			$("#Passworderror").html("");
		}
		
		var Country = $('#country').val();
		if( Country == "" )
		{
			$("#countryerror").html("Country is required.");
			document.getElementById('country').style.borderColor = "red";
			$("#country").focus();
			return false;
		}
		else if( Country == "Country" )
		{
			$("#countryerror").html("Please select Country");
			document.getElementById('country').style.borderColor = "red";
			$("#country").focus();
			return false;
		}
		else
		{
			document.getElementById('country').style.borderColor = "#D7D7D7";
			$("#countryerror").html("");
		}
		
		
	      
		
		
		
		
		
		
		var CPassword = $('#cpwd').val();
		if( CPassword == "" )
		{
			$("#CPassworderror").html("Password Confirmation is required.");
			document.getElementById('cpwd').style.borderColor = "red";
			$("#cpwd").focus();
			return false;
		}
		
		else if( !(CPassword == Password) )
		{
			$("#CPassworderror").html("Password Not match.");
			document.getElementById('cpwd').style.borderColor = "red";
			$("#cpwd").focus();
			return false;
		}
		
		else
		{
			document.getElementById('cpwd').style.borderColor = "#D7D7D7";
			$("#CPassworderror").html("");
		}
		
		
	       
		
	
		
		
}
</script>
<style>
.error{
		color:red;
	text-align: center;
	     //height: 25px;
}
</style>
	
	
</head>
<body>
 <section class="signup_overlay">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-12">
					  <a href="javascript:void(0);"><img src="images/ar.png" class="img_center1" alt=""></a>
 				<form  name="form1" method="post" id = "form1" action="addcontact.php">
 				<div class="signup_page">
 				                    
 				         
 				         
 				           
 				         
 				          
 					<div class="sign_up_txt"><p>sign up</p></div>
 					<div class="size_col">
 					
    <li><input type="text" name="name" id="name"   class="input_cont1 form-control" placeholder="Full Name" >
        <div class="error" id="fnameerror" ></div>
        
   </li>
                                        
                                     

    <li><input type="text"    name="Email"  id="Email" class="input_cont2 form-control" placeholder="Email" >
        <div class = "error" id = "emailerror"></div>
     </li> 
                                         
                                   

    <li><input type="text"     name="phone"  id="phone" class="input_cont3 form-control" placeholder="Mobile" ><div class = "error" id = "phoneerror" ></div> </li>

    <li><input type="text"        name="pwd"    id="pwd"        class="input_cont4 form-control" placeholder="password" ><div class = "error" id = "Passworderror" ></div> </li>
 
 						<li><select name="country" id="country" class="form-control area_selection" >
 						          <option selected>Country</option>
                                                          <option>India</option>
                                                          <option>USA</option>
                                                          <option>UK</option>
 						</select> <div class = "error" id = "countryerror"><div></li>
 						
 	     <li><input type="text" name="cpwd" id="cpwd" class="input_cont5 form-control" placeholder="confirm password" ><input type="hidden" name="fnctn" value="signup" ><div class = "error" id = "CPassworderror"></div> 
 			</li>
				
         </div>
						<input type="submit" class="log_btn1" value="sign up" onclick="return checkcontact();">
						 
					 	<p class="text_signup">By clicking “sign up” I agree to Peak Performance’ <span class="terms_txt">Terms of Use</span></p>
				</div>
 				</form>
 				
 				<div class="already_ac">
							<p> Have an account already?<a href="login.php" class="color_txt"> Log in</a></p>
				</div>
 			</div>
 		</div>
 	</div>
 </section>
<?php include 'footer.php';?>