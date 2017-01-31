<<<<<<< HEAD
<?php
include('setting_include.php');


$db->where ('id', '1');
$para1 = $db->getone('pages');


$db->where ('id', '2');
$para2 = $db->getone('pages');

include('includes/header.php')
?>
	

        	<!-- SLIDER -->   
            <div class="revwrap">
            
				<!-- START REVOLUTION SLIDER -->

				<div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;padding:0px;margin-top:0px;margin-bottom:0px;max-height:430px;">
					
					<div id="rev_slider_2_1" class="rev_slider fullwidthabanner" style="display:none;max-height:430px;height:430px;">
					
						<ul>	

							<!-- SLIDE  -->
							<li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
								<!-- MAIN IMAGE -->
								<img src="images/1400x400.jpg"  alt="Image Alt"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
								<!-- LAYERS -->

								<!-- LAYER NR. 2 -->
								<div class="tp-caption medium_light_white2 sfb tp-resizeme"
									data-x="147"
									data-y="269" 
									data-speed="500"
									data-start="500"
									data-easing="Power3.easeInOut"
									data-splitin="none"
									data-splitout="none"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									-endspeed="300"

									stydatale="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Save space, time & money.
								</div>
							</li>
							
							<li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
								<!-- MAIN IMAGE -->
								<img src="images/1400x400.jpg"  alt="Image Alt"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
								<!-- LAYERS -->

								<!-- LAYER NR. 2 -->
								<div class="tp-caption medium_light_white2 sfb tp-resizeme"
									data-x="147"
									data-y="269" 
									data-speed="500"
									data-start="500"
									data-easing="Power3.easeInOut"
									data-splitin="none"
									data-splitout="none"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									data-endspeed="300"

									style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Get access to lmmense collection of quailty educational toys.
								</div>
							</li>	
							
							<li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
								<!-- MAIN IMAGE -->
								<img src="images/1400x400.jpg"  alt="Image Alt"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
								<!-- LAYERS -->

								<!-- LAYER NR. 2 -->
								<div class="tp-caption medium_light_white2 sfb tp-resizeme"
									data-x="147"
									data-y="269" 
									data-speed="500"
									data-start="500"
									data-easing="Power3.easeInOut"
									data-splitin="none"
									data-splitout="none"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									-endspeed="300"

									stydatale="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Clean, Safe and simple
								</div>
							</li>	

							<li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
								<!-- MAIN IMAGE -->
								<img src="images/1400x400.jpg"  alt="Image Alt"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
								<!-- LAYERS -->

								<!-- LAYER NR. 2 -->
								<div class="tp-caption medium_light_white2 sfb tp-resizeme"
									data-x="147"
									data-y="269" 
									data-speed="500"
									data-start="500"
									data-easing="Power3.easeInOut"
									data-splitin="none"
									data-splitout="none"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									-endspeed="300"

									stydatale="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Monthly Flat-rate starting at 20JD
								</div>
							</li>							
						</ul>
						<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	
					
					</div>

					<style type="text/css">
						#rev_slider_2_1_wrapper .tp-loader.spinner3 div { background-color: #FFFFFF !important; }
					</style>
				</div><!-- END REVOLUTION SLIDER --> 	

            </div>
            <!-- End SLIDER --> 

			
			<div class="page-content">
			<div class="row clearfix">
								
				<div class="grid_6">
				  <article>
					<h2><?php echo $para1['title'];?></h2>
					<?php echo $para1['pbody'];?>
				  </article>
				</div> 

				<div class="grid_6">

				   <article>
					<h2><?php echo $para2['title'];?></h2>
					<?php echo $para2['pbody'];?>
				  </article>
				</div> 

			</div>	
				<div class="row clearfix">
					
					<div class="grid_12">
						<div class="gap clearfix custom-mb100"></div> 
					</div> 
				
				</div>				
	
				
				<div class="row clearfix">
					
					<div class="grid_3">

						<div class="services sb1 clearfix">
							
							<div class="stitle mb clearfix">
								
								<h3><a href="#" target="_blank" >How It Work</a><small>Great International Design</small></h3>
							</div>
							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
							<a class='tbutton small tbutton1 custom-button-i1' href='http://www.themetor.com' target='_blank'><span>Read More</span></a>
						
						</div>

					</div> 

					<div class="grid_3">

						<div class="services sb1 clearfix">
							
							<div class="stitle mb clearfix">
								
								<h3><a href=#" target="_blank" >See Toys Collection</a><small>Great International Design</small></h3>
							</div>
							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
							<a class='tbutton small tbutton1 custom-button-i1' href='http://www.themetor.com' target='_blank'><span>Read More</span></a>
						
						</div>
 
					</div> 

					<div class="grid_3">

						<div class="services sb1 clearfix">
							
							<div class="stitle mb clearfix">
							
								<h3><a href="#" target="_blank" >Subscripe</a><small>Great International Design</small></h3>
							</div>
							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
							<a class='tbutton small tbutton1 custom-button-i1' href='http://www.themetor.com' target='_blank'><span>Read More</span></a>
						
						</div>

					</div> 

					<div class="grid_3">

						<div class="services sb1 clearfix">
						
							<div class="stitle mb clearfix">
								
								<h3>Want to know more?<small>Contact Us</small></h3>
								</div>
							<p>CALL US AT 079 999 999</p>
							
						</div>
 
					</div> 
				
				</div>
				
				<div class="row clearfix">
					
					<div class="grid_12">
						<div class="gap clearfix custom-mb100"></div> 
					</div> 
				
				</div>	
				

				
				


   
			</div><!-- end page-content -->
        
<?php
include('includes/footer.php')
=======
<?php
include('setting_include.php');


$db->where ('id', '1');
$para1 = $db->getone('pages');


$db->where ('id', '2');
$para2 = $db->getone('pages');

include('includes/header.php')
?>
	

        	<!-- SLIDER -->   
            <div class="revwrap">
            
				<!-- START REVOLUTION SLIDER -->

				<div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;padding:0px;margin-top:0px;margin-bottom:0px;max-height:430px;">
					
					<div id="rev_slider_2_1" class="rev_slider fullwidthabanner" style="display:none;max-height:430px;height:430px;">
					
						<ul>	

							<!-- SLIDE  -->
							<li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
								<!-- MAIN IMAGE -->
								<img src="images/1400x400.jpg"  alt="Image Alt"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
								<!-- LAYERS -->

								<!-- LAYER NR. 2 -->
								<div class="tp-caption medium_light_white2 sfb tp-resizeme"
									data-x="147"
									data-y="269" 
									data-speed="500"
									data-start="500"
									data-easing="Power3.easeInOut"
									data-splitin="none"
									data-splitout="none"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									-endspeed="300"

									stydatale="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Save space, time & money.
								</div>
							</li>
							
							<li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
								<!-- MAIN IMAGE -->
								<img src="images/1400x400.jpg"  alt="Image Alt"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
								<!-- LAYERS -->

								<!-- LAYER NR. 2 -->
								<div class="tp-caption medium_light_white2 sfb tp-resizeme"
									data-x="147"
									data-y="269" 
									data-speed="500"
									data-start="500"
									data-easing="Power3.easeInOut"
									data-splitin="none"
									data-splitout="none"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									data-endspeed="300"

									style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Get access to lmmense collection of quailty educational toys.
								</div>
							</li>	
							
							<li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
								<!-- MAIN IMAGE -->
								<img src="images/1400x400.jpg"  alt="Image Alt"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
								<!-- LAYERS -->

								<!-- LAYER NR. 2 -->
								<div class="tp-caption medium_light_white2 sfb tp-resizeme"
									data-x="147"
									data-y="269" 
									data-speed="500"
									data-start="500"
									data-easing="Power3.easeInOut"
									data-splitin="none"
									data-splitout="none"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									-endspeed="300"

									stydatale="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Clean, Safe and simple
								</div>
							</li>	

							<li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
								<!-- MAIN IMAGE -->
								<img src="images/1400x400.jpg"  alt="Image Alt"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
								<!-- LAYERS -->

								<!-- LAYER NR. 2 -->
								<div class="tp-caption medium_light_white2 sfb tp-resizeme"
									data-x="147"
									data-y="269" 
									data-speed="500"
									data-start="500"
									data-easing="Power3.easeInOut"
									data-splitin="none"
									data-splitout="none"
									data-elementdelay="0.1"
									data-endelementdelay="0.1"
									-endspeed="300"

									stydatale="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Monthly Flat-rate starting at 20JD
								</div>
							</li>							
						</ul>
						<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	
					
					</div>

					<style type="text/css">
						#rev_slider_2_1_wrapper .tp-loader.spinner3 div { background-color: #FFFFFF !important; }
					</style>
				</div><!-- END REVOLUTION SLIDER --> 	

            </div>
            <!-- End SLIDER --> 

			
			<div class="page-content">
			<div class="row clearfix">
								
				<div class="grid_6">
				  <article>
					<h2><?php echo $para1['title'];?></h2>
					<?php echo $para1['pbody'];?>
				  </article>
				</div> 

				<div class="grid_6">

				   <article>
					<h2><?php echo $para2['title'];?></h2>
					<?php echo $para2['pbody'];?>
				  </article>
				</div> 

			</div>	
				<div class="row clearfix">
					
					<div class="grid_12">
						<div class="gap clearfix custom-mb100"></div> 
					</div> 
				
				</div>				
	
				
				<div class="row clearfix">
					
					<div class="grid_3">

						<div class="services sb1 clearfix">
							
							<div class="stitle mb clearfix">
								
								<h3><a href="#" target="_blank" >How It Work</a><small>Great International Design</small></h3>
							</div>
							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
							<a class='tbutton small tbutton1 custom-button-i1' href='http://www.themetor.com' target='_blank'><span>Read More</span></a>
						
						</div>

					</div> 

					<div class="grid_3">

						<div class="services sb1 clearfix">
							
							<div class="stitle mb clearfix">
								
								<h3><a href=#" target="_blank" >See Toys Collection</a><small>Great International Design</small></h3>
							</div>
							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
							<a class='tbutton small tbutton1 custom-button-i1' href='http://www.themetor.com' target='_blank'><span>Read More</span></a>
						
						</div>
 
					</div> 

					<div class="grid_3">

						<div class="services sb1 clearfix">
							
							<div class="stitle mb clearfix">
							
								<h3><a href="#" target="_blank" >Subscripe</a><small>Great International Design</small></h3>
							</div>
							
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
							<a class='tbutton small tbutton1 custom-button-i1' href='http://www.themetor.com' target='_blank'><span>Read More</span></a>
						
						</div>

					</div> 

					<div class="grid_3">

						<div class="services sb1 clearfix">
						
							<div class="stitle mb clearfix">
								
								<h3>Want to know more?<small>Contact Us</small></h3>
								</div>
							<p>CALL US AT 079 999 999</p>
							
						</div>
 
					</div> 
				
				</div>
				
				<div class="row clearfix">
					
					<div class="grid_12">
						<div class="gap clearfix custom-mb100"></div> 
					</div> 
				
				</div>	
				

				
				


   
			</div><!-- end page-content -->
        
<?php
include('includes/footer.php')
>>>>>>> origin/master
?>