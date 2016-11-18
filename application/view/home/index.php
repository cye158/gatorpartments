<link href="<?php echo URL; ?>public/css/boostrap.css" rel="stylesheet">
<link href="<?php echo URL; ?>public/css/theme.css" rel="stylesheet">

	<div class="container">
	<?php require APP . 'view/_templates/navbar.php'; ?>
<div class="row">

	<div class="col-sm-5 hidden-xs home_form">

			<div class="col-sm-12 well lform">

				<div class="row">
							<form class="form-vertical" action="<?php echo URL;?>home/listings">
			<fieldset>
					<div class="col-sm-12">

					 	<div class="form-group">
					    	<label>Location</label>
					    	<input type="text" class="form-control" placeholder="Where do you want to live?">
					  	</div>

						<div class="row">
							<div class="col-sm-6">

								<div class="form-group">
							    	<label>Search radius:</label>
										<select class="form-control">
											<option>This area only</option>
											<option>Within 1/4 mile</option>
											<option>Within 1/2 mile</option>
											<option>Within 1 mile</option>
											<option>Within 3 miles</option>
											<option>Within 5 miles</option>
											<option>Within 10 miles</option>
											<option>Within 15 miles</option>
											<option>Within 20 miles</option>
											<option>Within 30 miles</option>
											<option>Within 40 miles</option>
										</select>
								</div>

							</div>
							<div class="col-sm-6">

								<div class="form-group">
							    	<label>Property type:</label>
										<select class="form-control">
											<option>Any</option>
											<option>Houses</option>
											<option>Flats/ Apartments</option>
											<option>Bungalows</option>
											<option>Land</option>
											<option>Commercial property</option>
											<option>Other</option>
										</select>
								</div>

							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">

								<div class="form-group">
							    	<label >Bedrooms:</label>
										<select class="form-control">
											<option>Any</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5+</option>
										</select>
								</div>

							</div>
							<div class="col-sm-6">

								<div class="form-group">
							    	<label>Rent or Buy</label>
										<select class="form-control">
											<option>Any</option>
											<option>Rent</option>
											<option>Buy</option>
										</select>
								</div>

							</div>

						</div>
						<div class="row hidden-sm">
							<div class="col-sm-6">

								<div class="form-group">
							    	<label>Minimum Price</label>
										<select class="form-control">
											<option selected="selected" value="">No min</option><option value="50000">50,000</option><option value="60000">60,000</option><option value="70000">70,000</option><option value="80000">80,000</option><option value="90000">90,000</option><option value="100000">100,000</option><option value="110000">110,000</option><option value="120000">120,000</option><option value="125000">125,000</option><option value="130000">130,000</option><option value="140000">140,000</option><option value="150000">150,000</option><option value="160000">160,000</option><option value="170000">170,000</option><option value="175000">175,000</option><option value="180000">180,000</option><option value="190000">190,000</option><option value="200000">200,000</option><option value="210000">210,000</option><option value="220000">220,000</option><option value="230000">230,000</option><option value="240000">240,000</option><option value="250000">250,000</option><option value="260000">260,000</option><option value="270000">270,000</option><option value="280000">280,000</option><option value="290000">290,000</option><option value="300000">300,000</option><option value="325000">325,000</option><option value="350000">350,000</option><option value="375000">375,000</option><option value="400000">400,000</option><option value="425000">425,000</option><option value="450000">450,000</option><option value="475000">475,000</option><option value="500000">500,000</option><option value="550000">550,000</option><option value="600000">600,000</option><option value="650000">650,000</option><option value="700000">700,000</option><option value="800000">800,000</option><option value="900000">900,000</option><option value="1000000">1,000,000</option><option value="1500000">1,500,000</option><option value="2000000">2,000,000</option><option value="3000000">3,000,000</option><option value="">No min</option>
										</select>
								</div>

							</div>
							<div class="col-sm-6">

								<div class="form-group">
							    	<label>Maximum Price</label>
										<select class="form-control">
											<option selected="selected" value="">No min</option><option value="50000">50,000</option><option value="60000">60,000</option><option value="70000">70,000</option><option value="80000">80,000</option><option value="90000">90,000</option><option value="100000">100,000</option><option value="110000">110,000</option><option value="120000">120,000</option><option value="125000">125,000</option><option value="130000">130,000</option><option value="140000">140,000</option><option value="150000">150,000</option><option value="160000">160,000</option><option value="170000">170,000</option><option value="175000">175,000</option><option value="180000">180,000</option><option value="190000">190,000</option><option value="200000">200,000</option><option value="210000">210,000</option><option value="220000">220,000</option><option value="230000">230,000</option><option value="240000">240,000</option><option value="250000">250,000</option><option value="260000">260,000</option><option value="270000">270,000</option><option value="280000">280,000</option><option value="290000">290,000</option><option value="300000">300,000</option><option value="325000">325,000</option><option value="350000">350,000</option><option value="375000">375,000</option><option value="400000">400,000</option><option value="425000">425,000</option><option value="450000">450,000</option><option value="475000">475,000</option><option value="500000">500,000</option><option value="550000">550,000</option><option value="600000">600,000</option><option value="650000">650,000</option><option value="700000">700,000</option><option value="800000">800,000</option><option value="900000">900,000</option><option value="1000000">1,000,000</option><option value="1500000">1,500,000</option><option value="2000000">2,000,000</option><option value="3000000">3,000,000</option><option value="">No min</option>
										</select>
								</div>

							</div>

						</div>

					</div>
					<div class="row">

						<div class="col-sm-6 pull-right" style="margin-top: 10px;">
							<button class="btn btn-primary pull-right" type="submit">Search</button>

						</div>
					</div>

			</fieldset>
		</form>
				</div>

	</div>	</div>
	<div class="col-md-7 col-sm-7 col-xs-12 no_margin_left home_carousel pull-right">

		<!-- Start slideshow-carousel -->



                <div id="carousel-home" class="carousel slide" data-ride="carousel">

<div class="showcase-arrow-next" href="#carousel-home" data-slide="next" style="display: none;"></div>
<div class="showcase-arrow-previous" href="#carousel-home" data-slide="next" style="display: none;"></div>
          <!-- Wrapper for slides -->
          <div class="carousel-inner">


                			               <div class="item active">
			<img src="<?php echo URL;?>css/images/carousel_1.jpg" alt="">


				<div class="carousel-caption">
					<a href="<?php echo URL;?>home/map_properties"><h4>Map of properties</h4>
					<p>Interested in buying a flat or house in Richmond?</p></a>
				</div>
			</div>
			               <div class="item ">
			<img src="<?php echo URL;?>css/images/carousel_2.jpg" alt="">


				<div class="carousel-caption">
					<a href="<?php echo URL;?>home/listings"><h4>Search listings</h4>
					<p>View a listing of all the homes according to your taste, wherever you want</p></a>
				</div>
			</div>
			               <div class="item ">
			<img src="<?php echo URL;?>css/images/carousel_3.jpg" alt="">


				<div class="carousel-caption">
					<a href="<?php echo URL;?>home/property"><h4>View a property</h4>
					<p>This is our featured house of the day, good value and spacious enough for a family of 5</p></a>
				</div>
			</div>

            </div>

		</div>
		<!-- // end of slideshow-carousel -->

	</div>
</div>

<div class="row home-latest">
	<div class="col-xs-4">
		<h3 class="hidden-xs"><span>Latest</span> properties</h3>
		<h3 class="visible-xs"><span>Latest</span></h3>
		<a href="<?php echo URL;?>home/map_properties"><img src="<?php echo URL;?>css/images/latest_properties.jpg" alt="" /></a>
		<p>Sign up for our weekly newsletter and stay up-to-date with the latest offers, and newest products.<a href="<?php echo URL;?>home/map_properties" class="pull-right">more...</a></p>
	</div>
	<div class="col-xs-4">
		<h3 class="hidden-xs"><span>New</span> homes</h3>
		<h3 class="visible-xs"><span>New homes</span></h3>
		<a href="<?php echo URL;?>home/listings"><img src="<?php echo URL;?>css/images/new_homes.png" alt="" /></a>
		<p>Sign up for our weekly newsletter and stay up-to-date with the latest offers, and newest products.<a href="<?php echo URL;?>home/listings" class="pull-right">more...</a></p>
	</div>
	<div class="col-xs-4">
		<h3 class="hidden-xs"><span>Homes</span> abroad</h3>
		<h3 class="visible-xs"><span>Overseas</span></h3>
		<a href="<?php echo URL;?>home/listings"><img src="<?php echo URL;?>css/images/homes_abroad.png" alt="" /></a>
		<p>Sign up for our weekly newsletter and stay up-to-date with the latest offers, and newest products.<a href="<?php echo URL;?>home/listings" class="pull-right">more...</a></p>
	</div>
</div>



<div class="row">
	<br />
	<div class="col-sm-4 hidden-xs">
		<h3><span>Popular</span> cities</h3>


		<div id="home_map_canvas"></div>



	</div>
	<div class="col-sm-4 visible-xs">
		<h3><span>Search </span> properties</h3>
				<div class="col-sm-12 well lform">

				<div class="row">
							<form class="form-vertical" action="<?php echo URL;?>home/listings">
			<fieldset>
					<div class="col-sm-12">

					 	<div class="form-group">
					    	<label>Location</label>
					    	<input type="text" class="form-control" placeholder="Where do you want to live?">
					  	</div>

						<div class="row">
							<div class="col-sm-6">

								<div class="form-group">
							    	<label>Search radius:</label>
										<select class="form-control">
											<option>This area only</option>
											<option>Within 1/4 mile</option>
											<option>Within 1/2 mile</option>
											<option>Within 1 mile</option>
											<option>Within 3 miles</option>
											<option>Within 5 miles</option>
											<option>Within 10 miles</option>
											<option>Within 15 miles</option>
											<option>Within 20 miles</option>
											<option>Within 30 miles</option>
											<option>Within 40 miles</option>
										</select>
								</div>

							</div>
							<div class="col-sm-6">

								<div class="form-group">
							    	<label>Property type:</label>
										<select class="form-control">
											<option>Any</option>
											<option>Houses</option>
											<option>Flats/ Apartments</option>
											<option>Bungalows</option>
											<option>Land</option>
											<option>Commercial property</option>
											<option>Other</option>
										</select>
								</div>

							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">

								<div class="form-group">
							    	<label >Bedrooms:</label>
										<select class="form-control">
											<option>Any</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5+</option>
										</select>
								</div>

							</div>
							<div class="col-sm-6">

								<div class="form-group">
							    	<label>Rent or Buy</label>
										<select class="form-control">
											<option>Any</option>
											<option>Rent</option>
											<option>Buy</option>
										</select>
								</div>

							</div>

						</div>
						<div class="row hidden-sm">
							<div class="col-sm-6">

								<div class="form-group">
							    	<label>Minimum Price</label>
										<select class="form-control">
											<option selected="selected" value="">No min</option><option value="50000">50,000</option><option value="60000">60,000</option><option value="70000">70,000</option><option value="80000">80,000</option><option value="90000">90,000</option><option value="100000">100,000</option><option value="110000">110,000</option><option value="120000">120,000</option><option value="125000">125,000</option><option value="130000">130,000</option><option value="140000">140,000</option><option value="150000">150,000</option><option value="160000">160,000</option><option value="170000">170,000</option><option value="175000">175,000</option><option value="180000">180,000</option><option value="190000">190,000</option><option value="200000">200,000</option><option value="210000">210,000</option><option value="220000">220,000</option><option value="230000">230,000</option><option value="240000">240,000</option><option value="250000">250,000</option><option value="260000">260,000</option><option value="270000">270,000</option><option value="280000">280,000</option><option value="290000">290,000</option><option value="300000">300,000</option><option value="325000">325,000</option><option value="350000">350,000</option><option value="375000">375,000</option><option value="400000">400,000</option><option value="425000">425,000</option><option value="450000">450,000</option><option value="475000">475,000</option><option value="500000">500,000</option><option value="550000">550,000</option><option value="600000">600,000</option><option value="650000">650,000</option><option value="700000">700,000</option><option value="800000">800,000</option><option value="900000">900,000</option><option value="1000000">1,000,000</option><option value="1500000">1,500,000</option><option value="2000000">2,000,000</option><option value="3000000">3,000,000</option><option value="">No min</option>
										</select>
								</div>

							</div>
							<div class="col-sm-6">

								<div class="form-group">
							    	<label>Maximum Price</label>
										<select class="form-control">
											<option selected="selected" value="">No min</option><option value="50000">50,000</option><option value="60000">60,000</option><option value="70000">70,000</option><option value="80000">80,000</option><option value="90000">90,000</option><option value="100000">100,000</option><option value="110000">110,000</option><option value="120000">120,000</option><option value="125000">125,000</option><option value="130000">130,000</option><option value="140000">140,000</option><option value="150000">150,000</option><option value="160000">160,000</option><option value="170000">170,000</option><option value="175000">175,000</option><option value="180000">180,000</option><option value="190000">190,000</option><option value="200000">200,000</option><option value="210000">210,000</option><option value="220000">220,000</option><option value="230000">230,000</option><option value="240000">240,000</option><option value="250000">250,000</option><option value="260000">260,000</option><option value="270000">270,000</option><option value="280000">280,000</option><option value="290000">290,000</option><option value="300000">300,000</option><option value="325000">325,000</option><option value="350000">350,000</option><option value="375000">375,000</option><option value="400000">400,000</option><option value="425000">425,000</option><option value="450000">450,000</option><option value="475000">475,000</option><option value="500000">500,000</option><option value="550000">550,000</option><option value="600000">600,000</option><option value="650000">650,000</option><option value="700000">700,000</option><option value="800000">800,000</option><option value="900000">900,000</option><option value="1000000">1,000,000</option><option value="1500000">1,500,000</option><option value="2000000">2,000,000</option><option value="3000000">3,000,000</option><option value="">No min</option>
										</select>
								</div>

							</div>

						</div>

					</div>
					<div class="row">

						<div class="col-sm-6 pull-right" style="margin-top: 10px;">
							<button class="btn btn-primary pull-right" type="submit">Search</button>

						</div>
					</div>

			</fieldset>
		</form>
				</div>

	</div>	</div>
	<div class="col-sm-8 ">
		<h3><span>Featured</span> listings</h3>

		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Description</th>
					<th class="hidden-sm hidden-xs">Region</th>
					<th>Price</th>
					<th class="hidden-sm hidden-xs">Days on market</th>
					<th class="hidden-sm hidden-xs">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><a href="<?php echo URL;?>home/property">8 bedroom house for sale</a></td>
					<td class="hidden-sm hidden-xs">London</td>
					<td>&pound;39,950,000</td>
					<td class="hidden-sm hidden-xs">1 day</td>
					<td class="hidden-sm hidden-xs"><a href="<?php echo URL;?>home/property">View</a></td>
				</tr>
				<tr>
					<td><a href="<?php echo URL;?>home/property">2 bedroom bungalow for sale</a></td>
					<td class="hidden-sm hidden-xs">London</td>
					<td>&pound;215,000</td>
					<td class="hidden-sm hidden-xs">3 days</td>
					<td class="hidden-sm hidden-xs"><a href="<?php echo URL;?>home/property">View</a></td>
				</tr>
				<tr>
					<td><a href="<?php echo URL;?>home/property">3 bedroom house for sale</a></td>
					<td class="hidden-sm hidden-xs">London</td>
					<td>&pound;470,000</td>
					<td class="hidden-sm hidden-xs">2 weeks</td>
					<td class="hidden-sm hidden-xs"><a href="<?php echo URL;?>home/property">View</a></td>
				</tr>
				<tr>
					<td><a href="<?php echo URL;?>home/property">3 bedroom house for rent</a></td>
					<td class="hidden-sm hidden-xs">London</td>
					<td>&pound;1,000pm</td>
					<td class="hidden-sm hidden-xs">1 month</td>
					<td class="hidden-sm hidden-xs"><a href="<?php echo URL;?>home/property">View</a></td>
				</tr>
				<tr>
					<td><a href="<?php echo URL;?>home/property">6 bedroom house for sale</a></td>
					<td class="hidden-sm hidden-xs">London</td>
					<td>&pound;19,950,000</td>
					<td class="hidden-sm hidden-xs">2 months</td>
					<td class="hidden-sm hidden-xs"><a href="<?php echo URL;?>home/property">View</a></td>
				</tr>
				<tr>
					<td><a href="<?php echo URL;?>home/property">5 bedroom bungalow for sale</a></td>
					<td class="hidden-sm hidden-xs">London</td>
					<td>&pound;950pm</td>
					<td class="hidden-sm hidden-xs">3 months</td>
					<td class="hidden-sm hidden-xs"><a href="<?php echo URL;?>home/property">View</a></td>
				</tr>
				<tr>
					<td><a href="<?php echo URL;?>home/property">3 bedroom house for sale</a></td>
					<td class="hidden-sm hidden-xs">London</td>
					<td>&pound;470,000</td>
					<td class="hidden-sm hidden-xs">1 year</td>
					<td class="hidden-sm hidden-xs"><a href="<?php echo URL;?>home/property">View</a></td>
				</tr>

			</tbody>
		</table>
		More cities : <a href="<?php echo URL;?>home/map_properties">London</a>, <a href="<?php echo URL;?>home/map_properties">Scotland</a>, <a href="<?php echo URL;?>home/map_properties">Wales</a>, <a href="<?php echo URL;?>home/map_properties">Northern Ireland</a>, <a href="<?php echo URL;?>home/map_properties">Birmingham</a>, <a href="<?php echo URL;?>home/map_properties">Leeds</a>, <a href="<?php echo URL;?>home/map_properties">Glasgow</a>, <a href="<?php echo URL;?>home/map_properties">Sheffield</a>, <a href="<?php echo URL;?>home/map_properties">Bradford</a>, <a href="<?php echo URL;?>home/map_properties">Edinburgh</a>, <a href="<?php echo URL;?>home/map_properties">Liverpool</a>,  <a href="<?php echo URL;?>home/map_properties">Manchester</a>

	</div>

</div>

<footer>
	<hr />
	<p class="pull-right"><a href="#">Back to top</a></p>
	<p>
		<a href="<?php echo URL;?>home/index">Home</a> |
		<a href="<?php echo URL;?>home/about">About</a> |
		<a href="<?php echo URL;?>home/typography">Typography</a> |
		<a href="<?php echo URL;?>home/terms">Terms and Conditions</a> |
		<a href="<?php echo URL;?>home/contact">Contact Us</a><br />
		All content &copy; 2014 | <a href="<?php echo URL;?>home/about">Built with Twitter Bootstrap</a> | <a href="https://wrapbootstrap.com/">WrapBootstrap</a>.
	</p>
</footer>

</div> <!-- /container -->

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
