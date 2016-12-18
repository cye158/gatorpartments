<!-- map,listing,ads -->
<div class="row">

	<!-- listing -->
	<div class="col-sm-7 col-xs-7" style="border-radius: 0px; margin-bottom: 0px;">

		<h4 class="well" style="border-radius: 0px;border: 1px solid grey; background: #cdcdcd;"><center>Most Recent Listings</center></h4>

		<div class="col-sm-12" style="overflow: scroll; height: 42em; border-radius: 0px; border: 1px solid grey;margin-bottom: 0px; background: #eee;">

			<?php foreach($listing as $row){ ?> 
                          <div class="mini_property_wrapper">
				<div class="row">
					<div class="col-sm-12">

						<!-- property IMG-->
						<div class="col-sm-6 thumb thumb_property center">
							<a href="<?php echo URL . '/home/property/' . $row->id ;?>" class="img_holder">
								<img src="<?php echo IMAGE_PATH . "/" . $row->image_main ;?>" alt="">
							</a>
						</div>
						<!-- /property IMG-->

						<!-- property Info-->
						<div class="col-sm-offset-6 thumb_info">
							<h3>Price : <?php echo $this->formatPrice($row->price) ;?></h3><br>
							<p><a href="<?php echo URL;?>/home/property"><?php echo $row->room_size ;?></a>
                                                           <br><?php echo $row->address_1 ;?>
                                                               <?php echo $row->address_2 ;?>
                                                               <?php echo $row->city ;?>
                                                               <?php echo $row->state . ", " ;?>
                                                               <?php echo $row->zip_code ;?></p>
						</div>
						<!-- /property Info-->

					</div>
				</div>
				<div class="row"><hr id="hr"></div>
                 	 </div>
                      <?php } ?>
		</div><!-- col-sm-12 end -->
         

	</div>
	<!-- /listing -->

	<!-- map & ads -->
	<div class="col-sm-5 col-xs-5 row">

		<!-- map -->
		<div class="row">
			<div id="map" class="center" style="height: 29.6em; border: 1px solid grey;"> Map is placed here</div>
		</div>

		<!-- /map -->

		<!-- ads -->
		<div class="row">
			<div class="col-sm-12 col-xs-6 nopadding" style=" width: 100%; height: 14.9em; background-color: white; align-items: center; justify-content: center; border-radius: 0px; border: 3px double grey; padding:0px;">
				<img src="http://tcsfoodblog.weebly.com/uploads/7/5/1/1/7511954/3255171.png" style="height: 100%; width:100%;">
			</div>
		</div>
		<!-- /ads -->

	</div>
	<!-- /map & ads -->

</div>
<!-- /map,listing,ads -->

<!-- footer -->
<footer style="border-top: 1px solid grey;">

	<div class="col-xs-6">
		<p>
			<a href="<?php echo URL;?>home/index">Home</a> |
			<a href="<?php echo URL;?>home/about">About</a> |
			<a href="<?php echo URL;?>home/typography">Typography</a> |
			<a href="<?php echo URL;?>home/terms">Terms and Conditions</a> |
			<a href="<?php echo URL;?>home/contact">Contact Us</a>
		</p>
	</div>

	<div class="col-xs-6 pull-right text-right">
		<p>
			All content © 2014 | <a href="<?php echo URL;?>home/about">Built with Twitter Bootstrap</a> | <a href="https://wrapbootstrap.com/">WrapBootstrap</a>
		</p>
	</div>

</footer>
<!-- /footer -->
