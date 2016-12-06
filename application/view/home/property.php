<div class="row">


    <div class="col-sm-8">

        <div class="row">
            <div class="col-sm-5 col-xs-8">
                <h3><?php echo $listing->city . " " . $listing->state; ?></h3>
                <h6><?php echo $listing->room_size ;?></h6>
                <div id="people_viewing"><strong>13 people are viewing this property right now!</strong></div>
            </div>
            <div class="col-sm-3 col-xs-4 text-right pull-right">
                <h2 class="text-right"><?php echo $this->formatPrice($listing->price) ;?></h2>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <br>
                <div id="showcase-loader" style="display: none;">

                </div>
                <div id="owl-demo" class="owl-carousel owl-theme" style="display: block; opacity: 1;">
                                        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 11466px; left: 0px; display: block; transition: all 400ms ease; transform: translate3d(-4459px, 0px, 0px);">
						<?php foreach($images as $image){ ?>
							<div class="owl-item" style="width: 637px;">
								<div class="item">
									<img src="<?php echo IMAGE_PATH . $listing->id . '/' . $image;?>" alt="0">
								</div>
							</div>
						<?php } ?>
					</div>
		</div>








                                    </div>
            </div> <div class="col-sm-12">
            <br>


            <div id="owl-thumbnails" style="">
				<div class="col-xs-1">
					<div class="showcase-thumbnail-button-backward owl-prev" style="float: left;"><span class="showcase-thumbnail-horizontal"><span>Left</span></span></div>
				</div>
				<div class="col-xs-10">
					<div id="owl-gallery" class="owl-carousel owl-theme" style="display: block; opacity: 1;">
						<div class="owl-wrapper-outer">
							<div class="owl-wrapper" style="width: 2250px; left: 0px; display: block; transition: all 200ms ease; transform: translate3d(-375px, 0px, 0px);">
								<?php foreach($images as $image) { ?>
									<?php $dataSlideCount = 0; ?>
									<div class="owl-item" style="width: 125px;">
										<div class="item">
											<a href="#" data-slide="<?php echo $dateSlideCount ?>"><img src="<?php echo IMAGE_PATH . $listing->id . '/' . $image;?>"></a>
										</div>
									</div>
									<?php $dataSlideCount++; ?>
									<?php } ?>
							</div>
						</div>







											</div>
				</div>
				<div class="col-xs-1">
					<div class="showcase-thumbnail-button-forward owl-next" style="float: left;"><span class="showcase-thumbnail-horizontal"><span>Left</span></span></div>
				</div>
            </div>


            </div>
        </div>

    <div class="row">
        <br>

        <div class="col-sm-12">
            <h4>Description</h4>
	      <p><?php echo $listing->description ;?>  </p>
            <h4>Features</h4>

            <div class="row">
                <div class="col-sm-3 col-xs-6">
                    <ul>
                        <li>Exceptional setting</li>
                        <li>5 Bedrooms</li>
                        <li>70ft Garden</li>
                    </ul>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <ul>
                        <li>3 reception rooms</li>
                        <li>Off Street Parking</li>
                        <li>4 bedroom suites</li>
                    </ul>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <ul>
                        <li>5000sq ft space</li>
                        <li>Expansion space</li>
                        <li>Separate Studio</li>
                    </ul>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <ul>
                        <li>Study room</li>
                        <li>Garaging</li>
                        <li>Swimming Pool</li>
                    </ul>
                </div>
            </div>
           <div  class="pull-right">
           <form action="<?php echo URL; ?>home/addMessage" method = "POST">
               <input type="submit" name="submint_contact" value="Contact" />
           </form>
           </div>      <br>





        </div>
    </div>



</div><div class="col-sm-4">

    <!-- listing -->
    <div class="" style="position:relative; width: relative;">
      <div class="">
        <h4 class="well well-sm"><center>Other listings nearby</center></h4>
        <div class="col-sm-12 well well-sm" style="height:1000px; width:auto; overflow: scroll;">

          <div class="mini_property_wrapper">
            <div class="thumbnail mini_property">
              <a href="property.html" class="img_holder"><img src="//sfsuswe.com/~cye0105/gatorpartments/css/images/houses/house_1.jpg" alt=""></a>
              <h5>Price : £3,350,000</h5>
              <p><a href="property.html">7 bedroom house</a><br>The Vineyard, Richmond, TW10					</p>
            </div>
          </div>


          <div class="mini_property_wrapper">
            <div class="thumbnail mini_property">
              <a href="property.html" class="img_holder"><img src="//sfsuswe.com/~cye0105/gatorpartments/css/images/houses/house_2.jpg" alt=""></a>
              <h5>Price : £229,950</h5>
              <p><a href="property.html">1 bedroom flat</a><br>Lower Mortlake Road, North Sheen					</p>
            </div>
          </div>


          <div class="mini_property_wrapper">
            <div class="thumbnail mini_property">
              <a href="property.html" class="img_holder"><img src="//sfsuswe.com/~cye0105/gatorpartments/css/images/houses/house_3.jpg" alt=""></a>
              <h5>Price : £520,000</h5>
              <p><a href="property.html">2 bedroom apartment</a><br>Mount Ararat Road, Richmond					</p>
            </div>
          </div>


          <div class="mini_property_wrapper">
            <div class="thumbnail mini_property">
              <a href="property.html" class="img_holder"><img src="//sfsuswe.com/~cye0105/gatorpartments/css/images/houses/house_4.jpg" alt=""></a>
              <h5>Price : £550,000</h5>
              <p><a href="property.html">2 bedroom house</a><br>The Shakespeare					</p>
            </div>
          </div>


          <div class="mini_property_wrapper">
            <div class="thumbnail mini_property">
              <a href="property.html" class="img_holder"><img src="//sfsuswe.com/~cye0105/gatorpartments/css/images/houses/house_5.jpg" alt=""></a>
              <h5>Price : £615,000</h5>
              <p><a href="property.html">3 bedroom terraced house</a><br>London, TW9					</p>
            </div>
          </div>


          <div class="mini_property_wrapper">
            <div class="thumbnail mini_property">
              <a href="property.html" class="img_holder"><img src="//sfsuswe.com/~cye0105/gatorpartments/css/images/houses/house_6.jpg" alt=""></a>
              <h5>Price : £1,100,000</h5>
              <p><a href="property.html">3 bedroom semi-detached house</a><br>Beaumont Avenue, Richmond					</p>
            </div>
          </div>


          <div class="mini_property_wrapper">
            <div class="thumbnail mini_property">
              <a href="property.html" class="img_holder"><img src="//sfsuswe.com/~cye0105/gatorpartments/css/images/houses/house_7.jpg" alt=""></a>
              <h5>Price : £399,950</h5>
              <p><a href="property.html">2 bedroom flat</a><br>The Lodge, Courtlands, Sheen Road, Richmond					</p>
            </div>
          </div>


          <div class="mini_property_wrapper">
            <div class="thumbnail mini_property">
              <a href="property.html" class="img_holder"><img src="//sfsuswe.com/~cye0105/gatorpartments/css/images/houses/house_8.jpg" alt=""></a>
              <h5>Price : £219,950</h5>
              <p><a href="property.html">1 bedroom flat</a><br>Sheen Road, Richmond, TW9					</p>
            </div>
          </div>


          <div class="mini_property_wrapper">
            <div class="thumbnail mini_property">
              <a href="property.html" class="img_holder"><img src="//sfsuswe.com/~cye0105/gatorpartments/css/images/houses/house_9.jpg" alt=""></a>
              <h5>Price : £1,250,000</h5>
              <p><a href="property.html">5 bedroom flat</a><br>Chelwood Gardens					</p>
            </div>
          </div>

          <div class="mini_property_wrapper">
            <div class="thumbnail mini_property">
              <a href="property.html" class="img_holder"><img src="//sfsuswe.com/~cye0105/gatorpartments/css/images/houses/house_4.jpg" alt=""></a>
              <h5>Price : £550,000</h5>
              <p><a href="property.html">2 bedroom house</a><br>The Shakespeare					</p>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- /listing -->

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

</body>
</html>
