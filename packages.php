<?php
include('setting_include.php');

$plans = $db->get('plans');

include('includes/header.php')
?>


			
			<div class="page-content">
				
				<div class="row clearfix">

					<div class="grid_12">
						
						<div>
<p>
Why buy toys and pay full price when you have the optin to rent them at an affordable monthly flat-rate?<br>
You don't know if your kid will like the toy untill you try it.<br>
Choose from an immense collection of toys to help your child learn and develop><br>
<br>
The Toys Labrary helps you save time, money, space!<br>
It's philantrophic, safe and clean!<br>
</p>
						</div>
 
						<hr class="line custom-line">

					</div> 
				
				</div>
				

				
				<div class="row clearfix">
					
					<div class="grid_12">
						<div class="gap clearfix custom-mb100"></div> 
					</div> 
				
				</div>	
				
				<div class="row clearfx">
					
					<div class="grid_12">

						<div class="row clearfix tac">
							
							<div class="grid_12">
								<h3 class="col-title">Plans</h3>
								<span class="liner"></span>
							</div> 
						
						</div>
						
						<div class="tt_text_column tt_content_element ">
							<?php foreach($plans as $plan){?>
							
							<div class="price-table grid_4 dark">
								
								<div class="Bdetails">
									
									<div class="Bhead">
										<h4><?php echo $plan['name'];?></h4> 
										<!-- span> $29.99 <small>Per Month</small></span -->
									</div>
									
									<div class="Blist">
										<ul class="features">
											<li>One Month Trail/<?php echo $plan['one_month_price'];?> JOD</li>
											<li>3 Months /<?php echo $plan['two_month_price'];?> JOD Monthly</li>
											<li>12 Months /<?php echo $plan['three_month_price'];?> JOD Monthly</li>
											<li>* <?php echo $plan['subsripe_cost'];?> JOD Refunded Depsait</li>
											<li>Delevary Fees Included</li>
										</ul>
										<a class="tbutton medium default color10" href="#" target="_self"><span>Sign up now!</span></a><br>
									</div>
								
								</div>
							</div>
							<?php }?>
							
					

						</div> 

					</div> 
					
					<div class="gap clearfix custom-h30"></div>
				
				</div>
				
				


   
			</div><!-- end page-content -->
        
<?php
include('includes/footer.php')
?>