<?php include('header.php');?>

<?php include('slidenav.php');?>

<?php include('navigation.php');?>

 <section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			
				<h1 class="heading_txt1s">user profile</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
					<div class="img_center1s">
						<!-- <img src="images/img1.png" alt=""> -->
					</div>	
					<p class="profile_name">Arfeen Khana</p>
					<ul class="nav nav-pills tabs_1">
					  <li class="active" ><a  data-toggle="pill" href="#home" class="data_txt">Account</a></li>
					  <li><a data-toggle="pill" href="#password1" class="data_txt">change password</a></li>
					   <li><a data-toggle="pill" href="#bank" class="data_txt">Bank Detail</a></li>
					</ul>	
				</div>
				<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
						<div class="tab-content">
					<div id="home" class="tab-pane active">
					   <form action="">
					   		<label for="" class="col-lg-4 labname">Username</label>
					   		<div class="col-lg-8 col-md-8 col-sm-8 marbot">
					   			<input type="text" class="form-control form_txtsize"  placeholder="Username">
					   		</div>
					   		<label for="" class="col-lg-4 labname">First name</label>

					   		<div class="col-lg-8 col-md-8 col-sm-8 marbot">
					   			<input type="text" class="form-control form_txtsize"  placeholder="First name">
					   		</div>
					   		<label for="" class="col-lg-4 labname">Last name</label>
					   		<div class="col-lg-8 col-md-8 col-sm-8 marbot">
					   			<input type="text" class="form-control form_txtsize"  placeholder="Last name">
					   		</div>
					   		<label for="" class="col-lg-4 labname">Phone</label>
					   		<div class="col-lg-8 col-md-8 col-sm-8 marbot">
					   			<input type="text" class="form-control form_txtsize"  placeholder="Phone">
					   		</div>
					   		<label for="" class="col-lg-4 labname">E-mail Address</label>					   		
					   		<div class="col-lg-8 col-md-8 col-sm-8 marbot">
					   			<input type="text" class="form-control form_txtsize"  placeholder="mail Address">
					   		</div>
					   		<!-- <label for="" class="col-lg-4 labname">password</label>					   		
					   		<div class="col-lg-8 col-md-8 col-sm-8 marbot">
					   			<input type="password" class="form-control form_txtsize"  placeholder="password">
					   		</div>
					   		<label for="" class="col-lg-4 labname">confirm password</label>
					   		<div class="col-lg-8 col-md-8 col-sm-8 marbot">
					   			<input type="password" class="form-control form_txtsize"  placeholder="password">
					   		</div> -->
					   		<label for="" class="col-lg-4 labname">Address</label>					   		
					   		<div class="col-lg-8 col-md-8 col-sm-8 marbot" >
					   			<input type="text" class="form-control form_txtsize"  placeholder="Address">
					   		</div>
					   		<label for="" class="col-lg-4 labname">city</label>
					   		<div class="col-lg-8 col-md-8 col-sm-8 marbot">
								<input type="text" class="form-control form_txtsize"  placeholder="city">
					   		</div>
					   		<label for="" class="col-lg-4 labname">state/Region</label>
					   		<div class="col-lg-8 col-md-8 col-sm-8 marbot">
					   			<input type="text" class="form-control form_txtsize"  placeholder="state">
					   		</div>	
					   		<label for="" class="col-lg-4 labname">ZIP/Post code</label>
					   		<div class="col-lg-8 col-md-8 col-sm-8 marbot">
					   			<input type="text" class="form-control form_txtsize"  placeholder="ZIP">
					   		</div>
					   		<label for="" class="col-lg-4 labname">Country</label>
					   		<div class="col-lg-8 col-md-8 col-sm-8 marbot">
					   		<select class="form-control form_txtsize1" >
 							 	<option selected>Country</option>
 							 	<option selected>USA</option>
 							 	<option selected>INDIA</option>
 							</select> 							
					   		</div>
 							<input type="submit" value="Edit" class="profile_btn">
					   </form>
					</div><!--  tab one end -->
						<div id="password1" class="tab-pane ">
							<label for="" class="col-lg-4 labname">E-mail Address</label>					   		
					   		<div class="col-lg-8 col-md-8 col-sm-8 marbot">
					   			<input type="text" class="form-control form_txtsize"  placeholder="mail Address">
					   		</div>
					   		<label for="" class="col-lg-4 labname">password</label>					   		
					   		<div class="col-lg-8 col-md-8 col-sm-8 marbot">
					   			<input type="password" class="form-control form_txtsize"  placeholder="password">
					   		</div>
					   		<label for="" class="col-lg-4 labname">confirm password</label>
					   		<div class="col-lg-8 col-md-8 col-sm-8 marbot">
					   			<input type="password" class="form-control form_txtsize"  placeholder="password">
					   		</div>
					   		<input type="submit" value="Change Password" class="profile_btn">
						</div><!--  tab one end1 -->
						<div id="bank" class="tab-pane ">
							<form action="">
								<label for="" class="col-lg-4 labname">Bank Name</label>	
								<div class="col-lg-8 col-md-8 col-sm-8 marbot" >
					   				<input type="text" class="form-control form_txtsize" name="bank_name"  placeholder="Bank Name">
					   			</div>
					   			<label for="" class="col-lg-4 labname">Bank Branch</label>	
								<div class="col-lg-8 col-md-8 col-sm-8 marbot" >
					   				<input type="text" class="form-control form_txtsize" name="Bank_Branch" placeholder="Bank Branch">
					   			</div>
					   			<label for="" class="col-lg-4 labname">Holder Name</label>	
								<div class="col-lg-8 col-md-8 col-sm-8 marbot" >
					   				<input type="text" class="form-control form_txtsize" name="holder_name" placeholder="Holder Name">
					   			</div>
					   			<label for="" class="col-lg-4 labname">Account Number</label>	
								<div class="col-lg-8 col-md-8 col-sm-8 marbot" >
					   				<input type="text" class="form-control form_txtsize" name="Account.No" placeholder="Account Number">
					   			</div>
					   			<label for="" class="col-lg-4 labname">IFSC Code</label>	
								<div class="col-lg-8 col-md-8 col-sm-8 marbot" >
					   				<input type="text" class="form-control form_txtsize" name="IFSC_code" placeholder="IFSC Code">
					   			</div>
					   			<input type="submit" value="Submit" class="profile_btn">
							</form>
						</div>

						</div>
				</div>
			</div> <!-- end col-12 -->
		</div>
	</div>
</section>

  <?php include('footer.php');?>