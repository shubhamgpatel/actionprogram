<?php include('header.php');?>
<link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
      
<style>
	
.table_heading{
	    margin: 0;
	    border: 1px solid red;
	    border-right:none;
	    text-align: center;
	    font-family: 'GothamRounded-Bold';
    	color: #546d79;
    	font-size: 16px;
}
.pad5{
	 padding: 0;
}
.marR{
	border-right: 1px solid red;
	padding: 5px;
    background-color: #efeded;
}
.marR1{
	border-top: 1px solid red;
    border-right: 1px solid red;
}
.text_tablesheading{
	font-family: 'GothamRounded-Book';
    color: #546d79;
    font-size: 14px;
}
.table_txt{
	margin: 7px 0 7px;
}
.total_txt p{
	font-family: 'GothamRounded-Book';
    color: #546d79;
    margin: 0;
    text-align: left;
    float: left;
    font-size: 20px;
        margin-top: 15px;
            margin-bottom: 20px;
}
.total_Amt p{
	font-family: 'GothamRounded-Book';
    color: #546d79;
    margin: 0;
    text-align:right;
    font-size: 20px;
    margin-top: 15px;
}
.txt_head{
	font-family: 'GothamRounded-Bold';
    color: #546d79;
    margin: 0;
    text-align:left;
    font-size: 16px;
    margin-top: 25px;
    margin-bottom: 15px;
    float: left;
}
.summry_txt{
	font-family: 'GothamRounded-Book';
    color: #546d79;
    margin-top:35px;
    margin-bottom: 15px;
    text-align:right;
    font-size: 16px;

}
.smry_txt1{
	font-family: 'GothamRounded-Bold';
}
.pay_btn{
	padding-top: 10px;
    padding-bottom: 10px;
    width: 10%;
    color: #fff;
    background-color: #F22;
    border: none;
    float: right;
    border-radius: 4px;
    display: block;
    font-size: 14px;
    margin-top: 25px;
    margin-bottom: 15px;
    text-align: center;
    font-family: 'GothamRounded-Bold';
}
.pay_btn:hover,.pay_btn:focus{
	text-decoration: none;
	color: #fff;
}
.comm_txt{
	margin-bottom: 15px;
	margin-top: 30px;
    text-align: center;
    font-family: 'GothamRounded-Bold';
     color: #546d79;
     font-size: 18px;
}

.date_pick{
	float: left;
	font-family: 'GothamRounded-Bold';
	font-size: 14px;
	color: #546d79;
	padding-right:10px;

}


.overlay{
	width: 100%;
	height: 100%;
	background-color: #000;
	opacity: 0.7;
	position: fixed;
	top:0;
	left:0;
	right:0;
	bottom:0;
	margin: 0 auto;
	display: none;
}
.pay_size{
	width: 700px;
    height: 620px;
    position: absolute;
    top: -770px;
    left: 0;
    right: 0;
    bottom: 920px;
    margin: auto;
    background-color:#fff;
    z-index: 99999;
    opacity: 9;
    display: none;
}
.cantform_size{
	width: 75%;
	margin-top: 50px;
	    margin: auto;
}
.pay_heading_txt{
	font-size: 20px;
	text-transform: capitalize;
	text-align: center;
	font-family: 'GothamRounded-Bold';
	color: #546d79;
	margin-top:30px; 
}
.pay_heading_txt1{
	font-size: 20px;
	text-transform: capitalize;
	text-align: center;
	font-family: 'GothamRounded-Bold';
	color: #546d79;
	 position: relative;
    top: 15px;
}
.payout_name{
	font-size: 14px;
	font-family: 'GothamRounded-Bold';
	color: #546d79;
	text-transform: capitalize;
	text-align: right;
	display: block;
}
.payout_input{
   margin-bottom: 10px;
   font-family: 'GothamRounded-Book';
	color: #546d79;
	font-size: 15px;
	text-transform: capitalize;
}
.erned_txt{
	padding: 5px;
	margin: 0;
	background-color: #ccc;
	text-align: center;
	font-size: 14px;
	font-family: 'GothamRounded-Bold';
	color: #546d79;
	text-transform: capitalize;

}
.marborder{
	width: 75%;
    margin: 32px auto;
    float: none;
    border: 1px solid red;
    display: table;
    margin-bottom: 0px;
}
.bord_top{
	border-top: 1px solid red;
}
.inner_table_txt{
	text-align: center;
	font-size: 14px;
	font-family: 'GothamRounded-Book';
	color: #546d79;
	text-transform: capitalize;
	margin: 5px;
}
.Total_values{
	text-align: center;
	font-size: 14px;
	font-family: 'GothamRounded-Bold';
	color: #546d79;
	text-transform: capitalize;
	margin: 5px;
}
.save_btn{
	width: 20%;
    border: none;
    background-color: red;
    border-radius: 4px;
    padding-top: 10px;
    padding-bottom: 10px;
    margin: 10px auto;
    display: block;
    color: #fff;
    font-size: 15px;
    font-family: 'GothamRounded-Bold';
}
.save_btn:focus,.save_btn:hover{
	outline: none;
}
.close_img {
	border-radius: 100%;
	position: absolute;
	right: 0;
	top:0;
}
.close_img  img{
	border-radius: 100%;
    position: absolute;
    right: 6px;
    top: 5px;
    width: 28px;
    height: 28px;
    border: 3px solid #000;
}


</style>


<section class="">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				 <p class="comm_txt">Referral Partner Ledger for "Sheril Lobo" </p>
				<div>
					<form action="">
						<p class="date_pick">Enter Date: <input type="text" id="datepicker-13"></p>
						<p class="date_pick">Enter Date: <input type="text" id="datepicker-14"></p> 
						<a href="javascript:void(0);" class="pay_btn">Refresh Ledger</a>
					</form>
				</div>

			</div>
		</div>
		<div class="row">
			<div><p class="txt_head"> Commissions Earned For Date Range (01-03-2016 - 25-03-2016)</p></div> 
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table_heading pad5">
			 	<div class="col-lg-2 col-md-2 pad5 marR"> 
			 		<p class="table_txt">Inv#</p>
			 	</div>
			 	<div class="col-lg-2 col-md-2 pad5 marR"> 
			 		<p class="table_txt">Date</p>
			 	</div>
			 	<div class="col-lg-2 col-md-2 pad5 marR"> 
			 		<p class="table_txt">Contact</p>
			 	</div>
			 	<div class="col-lg-2 col-md-2 pad5 marR"> 
			 		<p class="table_txt">SoldBy</p>
			 	</div>
			 	<div class="col-lg-2 col-md-2 pad5 marR"> 
			 		<p class="table_txt">Item</p>
			 	</div>
			 	<div class="col-lg-2 col-md-2 pad5  marR" > 
			 		<p class="table_txt">Amount</p>
			 	</div><!--  heading end -->

			 	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  pad5 marR1">
			 		<div class="col-lg-2 col-md-2 pad5 "> 
			 			
			 		</div>
			 		<div class="col-lg-2 col-md-2 pad5 "> 
			 			
			 		</div>
			 		<div class="col-lg-2 col-md-2 pad5 "> 
			 			
			 		</div>
			 		<div class="col-lg-2 col-md-2 pad5 "> 
			 			
			 		</div>
			 		<div class="col-lg-2 col-md-2 pad5 "> 
			 			
			 		</div>
			 		<div class="col-lg-2 col-md-2 pad5 "> 
			 			
			 		</div>
			 		<p class="table_txt">No results to display.</p>
			 	</div>
			 	


			 </div>
			 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pad5">
				 <div class="total_txt"> 
				 	<p >Total</p>
				 </div>	
			    <div class="total_Amt"> 
					<p >$0.00</p>
			     </div>
			 	
			 </div>

			
			</div><!--  end row -->
			<div class="row">
			<div> <p class="txt_head">Clawbacks For Date Range (01-03-2016 - 25-03-2016)</p></div> 
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table_heading pad5">
			 	<div class="col-lg-2 col-md-2 pad5 marR"> 
			 		<p class="table_txt">Inv#</p>
			 	</div>
			 	<div class="col-lg-2 col-md-2 pad5 marR"> 
			 		<p class="table_txt">Date</p>
			 	</div>
			 	<div class="col-lg-2 col-md-2 pad5 marR"> 
			 		<p class="table_txt">Contact</p>
			 	</div>
			 	<div class="col-lg-2 col-md-2 pad5 marR"> 
			 		<p class="table_txt">SoldBy</p>
			 	</div>
			 	<div class="col-lg-2 col-md-2 pad5 marR"> 
			 		<p class="table_txt">Item</p>
			 	</div>
			 	<div class="col-lg-2 col-md-2 pad5  marR" > 
			 		<p class="table_txt">Amount</p>
			 	</div><!--  heading end -->

			 	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  pad5 marR1">
			 		<div class="col-lg-2 col-md-2 pad5 "> 
			 			
			 		</div>
			 		<div class="col-lg-2 col-md-2 pad5 "> 
			 			
			 		</div>
			 		<div class="col-lg-2 col-md-2 pad5 "> 
			 			
			 		</div>
			 		<div class="col-lg-2 col-md-2 pad5 "> 
			 			
			 		</div>
			 		<div class="col-lg-2 col-md-2 pad5 "> 
			 			
			 		</div>
			 		<div class="col-lg-2 col-md-2 pad5 "> 
			 			
			 		</div>
			 		<p class="table_txt">No results to display.</p>
			 	</div>
			 	


			 </div>
			 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pad5">
				 <div class="total_txt"> 
				 	<p >Total</p>
				 </div>	
			    <div class="total_Amt"> 
					<p >$0.00</p>
			     </div>
			 	
			 </div>

			
			</div> <!-- end row 2 -->
			<div class="row">
			<div> <p class="txt_head">Payments Made For Date Range (01-03-2016 - 25-03-2016)</p>
				<a href="javascript:void(0);" class="pay_btn pay_btn1">Create Payment</a>
			</div> 
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table_heading pad5">
			 	<div class="col-lg-2 col-md-2 pad5 marR"> 
			 		<p class="table_txt">Inv#</p>
			 	</div>
			 	<div class="col-lg-2 col-md-2 pad5 marR"> 
			 		<p class="table_txt">Date</p>
			 	</div>
			 	<div class="col-lg-2 col-md-2 pad5 marR"> 
			 		<p class="table_txt">Contact</p>
			 	</div>
			 	<div class="col-lg-2 col-md-2 pad5 marR"> 
			 		<p class="table_txt">SoldBy</p>
			 	</div>
			 	<div class="col-lg-2 col-md-2 pad5 marR"> 
			 		<p class="table_txt">Item</p>
			 	</div>
			 	<div class="col-lg-2 col-md-2 pad5  marR" > 
			 		<p class="table_txt">Amount</p>
			 	</div><!--  heading end -->

			 	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  pad5 marR1">
			 		<div class="col-lg-2 col-md-2 pad5 "> 
			 			
			 		</div>
			 		<div class="col-lg-2 col-md-2 pad5 "> 
			 			
			 		</div>
			 		<div class="col-lg-2 col-md-2 pad5 "> 
			 			
			 		</div>
			 		<div class="col-lg-2 col-md-2 pad5 "> 
			 			
			 		</div>
			 		<div class="col-lg-2 col-md-2 pad5 "> 
			 			
			 		</div>
			 		<div class="col-lg-2 col-md-2 pad5 "> 
			 			
			 		</div>
			 		<p class="table_txt">No results to display.</p>
			 	</div>
			 	


			 </div>
			 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pad5">
				 <div class="total_txt"> 
				 	<p >Total</p>
				 </div>	
			    <div class="total_Amt"> 
					<p >$0.00</p>
			     </div>
			 	
			 </div>

			</div><!-- end row 3 -->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="summry_txt"> 
					<p class="smry_txt1">SUMMARY FOR DATE RANGE (01-03-2016 - 25-03-2016)</p>
					<p>Commissions Earned: $0.00</p>
					<p>Clawbacks: $0.00</p>
					<p>Total Payments: $0.00</p>
					<p class="smry_txt1">Referral Partner Balance: $0.00</p>
				</div>
				<div class="summry_txt">
					<p class="smry_txt1">AFFILIATE TOTALS AS OF 25/3/2016</p>
					<p>Total Commissions Earned: $0.00</p>
					<p>Total Clawbacks: $0.00</p>
					<p>Total Payments: $0.00</p>
					<p class="smry_txt1">Referral Partner Balance: $0.00</p>
				</div>
			</div>

		</div>
	</div>
</section>

<section >
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " >
			<div class="overlay"></div>
				<div class="pay_size">
					<a href="javascript:void(0);" class="close_img"><img src="images/close1.png"  alt=""></a>
					 <p class="pay_heading_txt">manage  Referral partner layout</p>
						<p class="pay_heading_txt">Payout information</p>
					 
					<div class="cantform_size">
						<form action="">
							<div class="col-lg-4 col-md-4">
								<label class="payout_name" for="">pay type</label>
							</div>
							<div class="col-lg-8 col-md-8">
								<select class="payout_input form-control" name="pay type" id="">
									<option value=""> Please  Secelct a Pay type</option>
								</select>
								
							</div>
							<div class="col-lg-4 col-md-4">
								<label class="payout_name" for="">pay date</label>
							</div>
							<div class="col-lg-8 col-md-8">
								<input class="payout_input form-control" type="text"  name="pay date">
							</div>
							<div class="col-lg-4 col-md-4">
								<label class="payout_name" for="">pay Amt</label>
							</div>
							<div class="col-lg-8 col-md-8">
								<input class="payout_input form-control" type="text"  value="$0.00" name="pay Amt">
							</div>
							<div class="col-lg-4 col-md-4">
								<label class="payout_name" for="">pay Note</label>
							</div>
							<div class="col-lg-8 col-md-8">
								 <textarea class="payout_input form-control" rows="3" name="pay Note"></textarea>
							</div>
						</form>
					</div>
					
					
					 	<p class="pay_heading_txt1" >Commission Earned (01-03-2016 - 31-03-2016)</p>
						 <div class="col-lg-12 col-md-12 marborder pad5">
						 	 <div class="col-lg-6 col-md-6 pad5" style="border-right: 1px solid red;">
						 	 	 <p class="erned_txt">Date</p>
						 	 	 <div class="col-lg-12 col-md-12 pad5 bord_top">
						 	 	 	 <p class="inner_table_txt">30/03/2016</p>
						 	 	 </div>
						 	 	 <div class="col-lg-12 col-md-12 pad5 bord_top">
						 	 	 	 <p class="inner_table_txt">31/03/2016</p>
						 	 	 </div>
						 	 	 <div class="col-lg-12 col-md-12 pad5 bord_top">
						 	 	 	 <p class="Total_values">Total</p>
						 	 	 </div>

						 	 </div><!--  date part end -->
						 	 <div class="col-lg-6 col-md-6 pad5">
						 	 	<p class="erned_txt">Amount</p>
						 	 	<div class="col-lg-12 col-md-12 pad5 bord_top">
						 	 	 	 <p class="inner_table_txt"> $20</p>
						 	 	 </div>
						 	 	 <div class="col-lg-12 col-md-12 pad5 bord_top">
						 	 	 	 <p class="inner_table_txt"> $0</p>
						 	 	 </div>
						 	 	  <div class="col-lg-12 col-md-12 pad5 bord_top">
						 	 	 	 <p class="Total_values"> $0</p>
						 	 	 </div>
						 	 </div><!--  Amt part end  -->
						 </div> <!-- main border -->
						 <input class="save_btn" type="button" value="save">
				</div> 
			</div>
		</div><!--  end row -->
		
	</div>
</section>

<?php include('footer.php');?>