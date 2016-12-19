
<!-- details,map & ads -->
<div class="row" style="height: 100%;">


  <!-- property details -->
  <div class="col-sm-8" style="border-radius: 0px; margin-bottom: 0px;">

    <div class="well center title-list">
      <ul style="margin: 0;font-weight: bold;">Property Description</ul>
    </div>

    <div class="col-sm-12 property-list" style="overflow:scroll;">
      <div class="row" style="margin-top: 10px;">
        <div class="col-sm-5 col-xs-8">
          <h3>2 Bedroom Townhouse</h3>
          <h6>Queens Road</h6>
        </div>
        <div class="col-sm-3 col-xs-4 text-right pull-right">
          <h2 class="text-right">$ 1,000</h2>
        </div>
      </div>

      <div class="centermid" style="padding-top: 0.5em; padding-bottom: 0.5em;">
        <div style="background-color: white;" data-ride="carousel" class="carousel slide" id="myCarousel">
          <!-- Indicators -->
          <ol class="carousel-indicators" style="bottom: 0px;">
            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
            <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner center" role="listbox" style="max-height: 45vh;">
            <div class="item">
              <img src="<?php echo URL;?>/img/listings/1/1-1.jpg" alt="Chania">
            </div>

            <div class="item">
              <img src="<?php echo URL;?>/img/listings/1/1-2.jpg" alt="Chania">
            </div>

            <div class="item active">
              <img src="<?php echo URL;?>/img/listings/1/1-3.jpg" alt="Flower">
            </div>

            <div class="item">
              <img src="<?php echo URL;?>/img/listings/1/1-4.jpg" alt="Flower">
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="max-width: 40px;">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="max-width: 40px;">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="padding-left:12.5px;"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

      </div>

      <div class="row">
        <div class="col-sm-12 visible">
          <div class="row">
            <div class="col-xs-10">
              <h4>Features:</h4>
              <div class=" col-xs-6">
                <ul>
                  <li>2 Bedrooms</li>
                  <li>10ft Garden</li>
                </ul>
              </div>
              <div class="col-xs-6">
                <ul>
                  <li>Street Parking</li>
                  <li>1 bedroom suit</li>
                </ul>
              </div>

            </div>

            <div class="col-xs-2">
              <ul>
               <?php $eachListing->id = 1; ?>         
                 <form action="<?php echo URL . 'messages/contactLandlord/' . $eachListing->id ;?>" method = "POST" id="form1">
                </form> 
                <button class="b b0 navbar-right msg-btn" style="background-color: #609b62;" type="submit" form="form1" name="submit_contact"><h4>Message</h4></button>
                <br>
                <button class="b b0 navbar-right msg-btn" style="background-color: grey;"><h5>Back to Search</h5></button>
              </ul>
            </div>
          </div>
          <p style="text-align: justify; margin: 0px 0 10px 0;">
            Reflecting the status of this desirable destination a 1/2 bedroom townhouses at Terrace Yard offers contemporary living in unmatched style and elegance. With a high specification throughout, secure private undercroft parking behind remotely controlled access gates and Berkeley's quest for excellence, these are homes of unparalleled appeal. Imposing, contemporary architecture sets the scene for the sleek style of the interiors at Terrace Yard, where form blends perfectly with function to create homes beautifully designed for modern living. Living areas have been designed as fluid spaces, seamlessly linking rooms to provide an environment that's perfect for entertaining and family life alike.
          </p>
          <p style="text-align: justify; margin: 0px 0 10px 0;">
            The kitchens feature Italian designer furniture, reflecting the cutting edge, contemporary architecture. Stone worktops, glass back panelling, mood lighting and a comprehensive range of Siemens appliances enhance the appeal of this functional space creating an ultimate environment of luxury living.
          </p>
        </div>
      </div>

    </div>

  </div>
  <!-- /property details -->

  <!-- map & ads -->
  <div class="col-sm-4 row">

    <!-- map -->
    <div class="row map-wrapper">
      <!-- <div id="map" class="center">Map is placed here</div> -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d12623.667835684188!2d-122.47502909999997!3d37.721627000000005!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1481834287641" id="map"></iframe>
    </div>
    <!-- /map -->

    <!-- ads -->
    <div class="row">
      <div class="col-sm-12 ad">
        <img src="https://hannahmorley.files.wordpress.com/2012/11/screen-shot-2012-11-29-at-00-49-49.png" style="height: 100%; width:100%;">
      </div>
    </div>
    <!-- /ads -->

  </div>
  <!-- /map & ads -->

</div>
<!-- /details,map & ads -->

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
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbTAiniS56gZ1ZGGWK9oU1mZ2S0488wJs&callback=initMap"></script>
<!-- /google maps -->
