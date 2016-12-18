<!-- map,listing,ads -->
<div class="row">

	<!-- listing -->
	<div class="col-sm-7 index-list">

		<div class="well center title-list">
			<ul style="margin: 0;font-weight: bold;">Most Recent Listings:</ul>
		</div>

		<div class="col-sm-12 scroll-list">

			<!-- property -->
			<?php foreach($listing as $row) { ?>
				<div class="mini_property_wrapper">
					<div class="row">
						<div class="col-sm-12">

							<!-- property IMG-->
							<div class="col-xs-6 thumb thumb_property center">
								<a href="<?php echo URL . '/home/property/' . $row->id ;?>" class="img_holder">
									<img src="<?php echo IMAGE_PATH . "/" . $row->image_main ;?>" alt="">
									<a><button onclick="location.href = '<?php echo URL . '/home/property/' . $row->id ;?>"><?php echo $row->id ;?></button></a>
								</a>
							</div>
							<!-- /property IMG-->

							<!-- property Info-->
							<div class="col-xs-6 thumb_info">
								<h3>Price: <?php echo $this->formatPrice($row->price) ;?></h3>
								<p><button onclick="location.href = '<?php echo URL . '/home/property/' . $row->id ;?>">Available now</button></p>
								<br>
								<p>
									<p><?php echo $row->room_size ;?></p>
									<p>
										<?php echo $row->address_1 ;?>
										<?php echo $row->address_2 ;?>
										<?php echo $row->city ;?>
										<?php echo $row->state . ", " ;?>
										<?php echo $row->zip_code ;?>
									</p>
									<a href="<?php echo URL . '/home/property/' . $row->id ;?>">more info...</a>
								</p>
							</div>
							<!-- /property Info-->

						</div>
					</div>
					<div class="row"><hr id="hr"></div>
				</div>
				<?php } ?>
				<!-- /property -->

			</div>

		</div>
		<!-- /listing -->

		<!-- map & ads -->
		<div class="col-sm-5 row">

			<!-- map -->
			<div class="row map-wrapper">
				<div id="gmap"></div>
			</div>
			<!-- /map -->

			<!-- ads -->
			<div class="row">
				<div class="col-sm-12 col-xs-6 ad">
					<img src="http://i4.mirror.co.uk/incoming/article4773907.ece/ALTERNATES/s615b/Coca-Cola-christmas.jpg">
				</div>
			</div>
			<!-- /ads -->

		</div>
		<!-- /map & ads -->

	</div>
	<!-- /map,listing,ads -->

	<!-- footer -->
	<footer>

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

	<!-- google maps -->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbTAiniS56gZ1ZGGWK9oU1mZ2S0488wJs&callback=indexMap"></script>
	<!-- /google maps -->
