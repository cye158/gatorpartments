<!-- filter,map,listing,ads -->
<div class="row">

	<!-- filterOption -->
	<div class="col-sm-2 filter-col">
		<div class="row" style="padding-left: 1.1em;">

			<div class="well center title-filter">
				<ul style="margin: 0;font-weight: bold;">Filter Option</ul>
			</div>

			<div class="col-sm-12 filter-list">
				<form class="form-horizontal mini" id="filter-form">
					<fieldset>

						<div class="form-group">
							<label class="col-xs-4 control-label">Radius:</label>
							<div class="col-xs-8">
								<select class="form-control col-sm-12">
									<option>Distance</option>
									<option>Within 1/4 mile</option>
									<option>Within 1/2 mile</option>
									<option>Within 1 mile</option>
									<option>Within 3 miles</option>
									<option>Within 5 miles</option>
									<option>Within 10 miles</option>
									<option>Within 15 miles</option>
									<option>Within 20 miles</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-xs-4 control-label">Property:</label>
							<div class="col-xs-8">
								<select class="form-control col-sm-12">
									<option>Any</option>
									<option>Houses</option>
									<option>Flats/ Apartments</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-xs-4 control-label">Bedroom:</label>
							<div class="col-xs-8">
								<select class="form-control col-sm-12">
									<option>Any</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5+</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-xs-4 control-label">Rent:</label>
							<div class="col-xs-8">
								<select class="form-control col-sm-12">
									<option>Any</option>
									<option>Rent</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-xs-4 control-label">Extra1:</label>
							<div class="col-xs-8">
								<select class="form-control col-sm-12">
									<option>Any</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-xs-4 control-label">Extra2:</label>
							<div class="col-xs-8">
								<select class="form-control col-sm-12">
									<option>Any</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-xs-4 control-label">Extra3:</label>
							<div class="col-xs-8">
								<select class="form-control col-sm-12">
									<option>Any</option>
								</select>
							</div>
						</div>


						<div class="form-group">
							<label class="col-xs-4 control-label">Price:</label>
							<div class="col-xs-8">
								<div class="row col-sm-12 col-xs-12" style="padding-bottom: 10px;">
									<select class="form-control col-sm-12">
										<option selected="selected" value="">Min</option>
										<option value="100">100</option>
										<option value="200">200</option>
										<option value="300">300</option>
										<option value="400">400</option>
										<option value="500">500</option>
										<option value="1000">1000</option>
										<option value="1500">1500</option>
										<option value="2000">2000</option>
										<option value="3000">3000</option>
										<option value="5000">5000</option>
									</select>
								</div>
								<div class="row col-sm-12 col-xs-12">
									<select class="form-control col-sm-12 ">
										<option selected="selected" value="">Max</option>
										<option value="100">100</option>
										<option value="200">200</option>
										<option value="300">300</option>
										<option value="400">400</option>
										<option value="500">500</option>
										<option value="1000">1000</option>
										<option value="1500">1500</option>
										<option value="2000">2000</option>
										<option value="3000">3000</option>
										<option value="5000">5000</option>
									</select>
								</div>
							</div>
						</div>

						<!-- filter btn -->
						<div class="row">
							<div class="col-sm-12">
								<button class="btn btn-filter center" type="submit">Apply filter</button>
							</div>
						</div>
						<!-- /filter btn -->


					</fieldset>
				</form>
			</div>
		</div>
	</div>
	<!-- /filterOption -->

	<!-- listing -->
	<div class="col-sm-6 listing-col">

		<div class="well col-xs-12 title-list">
			<ul class="col-xs-4 navbar-left" style="margin: 0;font-weight: bold;">Listings </ul>
			<ul class="col-xs-8 navbar-right text-right show-result">Showing results for Search</ul>

		</div>

		<div class="col-sm-12 scroll-list">

                        <!-- property -->
                        <?php $count = 0; ?>
			<?php if(!$listing){echo "<h1>0 Listings Found</h1>" ;} else ?>
                        <?php foreach($listing as $row) { ?>
                        <?php $count++; ?>
                                <div class="mini_property_wrapper">
                                        <div class="row">
                                                <div class="col-sm-12">

                                                        <!-- property IMG-->
                                                        <div class="col-xs-6 thumb thumb_property center">
                                                                <a href="<?php echo URL . '/home/property/' . $row->listing_id ;?>" class="img_holder">
                                                                        <img src="<?php echo IMAGE_PATH . $row->image_main ;?>" alt="">
                                                                        <a><button onclick="location.href = '<?php echo URL . '/home/property/' . $row->listing_id ;?>"><?php echo $count ;?></button></a>
                                                                </a>
                                                        </div>
                                                        <!-- /property IMG-->

                                                        <!-- property Info-->
                                                        <div class="col-xs-6 thumb_info">
                                                                <h3>Price: <?php echo htmlspecialchars($this->formatPrice($row->price)) ;?></h3>
                                                                <p><button onclick="location.href = '<?php echo URL . '/home/property/' . $row->listing_id ;?>">Available now</button></p>
                                                                <br>
                                                                <p>
                                                                        <p><?php echo htmlspecialchars($row->room_size) ;?></p>
                                                                        <p>
                                                                                <?php echo htmlspecialchars($row->address_1) ;?>
                                                                                <?php echo htmlspecialchars($row->address_2) ;?>
                                                                                <?php echo htmlspecialchars($row->city) ;?>
                                                                                <?php echo htmlspecialchars($row->state) . ", " ;?>
                                                                                <?php echo htmlspecialchars($row->zip_code) ;?>
                                                                        </p>
                                                                        <a href="<?php echo URL . '/home/property/' . $row->listing_id ;?>">more info...</a>
                                                                </p>
                                                        </div>
                                                        <!-- /property Info-->

                                                </div>
                                        </div>
                                        <div class="row"><hr id="hr"></div>
                                </div>
                                <?php } ?>
                                <!-- /property -->

		</div> <!-- dfsdsfds -->

	</div>
	<!-- /listing -->

	<!-- map & ads -->
	<div class="col-sm-4 row">

		<!-- map -->
		<div class="row map-wrapper">
			<div id="gmap"></div>
		</div>
		<!-- /map -->

		<!-- ads -->
		<div class="row">
			<div class="col-sm-12 col-xs-6 ad">
				<img src="http://tcsfoodblog.weebly.com/uploads/7/5/1/1/7511954/3255171.png">
			</div>
		</div>
		<!-- /ads -->

	</div>
	<!-- /map & ads -->

</div>
<!-- /filter,map,listing,ads -->

<!-- footer -->
<footer>

	<div class="col-sm-6 navbar-left">
		<p>
			<a href="<?php echo URL;?>home/index">Home</a> |
			<a href="<?php echo URL;?>home/about">About</a> |
			<a href="<?php echo URL;?>home/typography">Typography</a> |
			<a href="<?php echo URL;?>home/terms">Terms and Conditions</a> |
			<a href="<?php echo URL;?>home/contact">Contact Us</a>
		</p>
	</div>

	<div class="col-xs-6 navbar-right text-right">
		<p>
			All content © 2014 | <a href="<?php echo URL;?>home/about">Built with Twitter Bootstrap</a> | <a href="https://wrapbootstrap.com/">WrapBootstrap</a>
		</p>
	</div>

</footer>
<!-- /footer -->

<!-- google maps -->
<script type="text/javascript" src="<?php echo URL;?>js/map_listings.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBB0tVY_PUrlqdB87rV6X9jhEW-aTcX91o&callback=listMap"></script>
<!-- /google maps -->