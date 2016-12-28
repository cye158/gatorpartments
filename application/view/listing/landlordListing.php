<div class="container">
  <div class="row">
    <div class="">
      <div class="page-header">
        <h1>Landlord Listing</h1>
      </div>
	<?php foreach($listing as $row){ ?>

  	  <div class="panel panel-default">
	    <div class="panel-heading">
	      <span>Listing Id:<?php echo $row->listing_id?></span>
	    </div>

	    <div class="panel-body">
	      <div class="row">
		<!-- Listing Image -->
		<div class="col-xs-4">
		  <img src="<?php echo IMAGE_PATH . $row->image_main ;?>" width="240" height="160">
		</div>

		<!-- Listing Address -->
		<div class="col-xs-4">
		 <p><?php echo htmlspecialchars($row->address_1) ;?>
                 <?php echo htmlspecialchars($row->address_2) ;?></p>
                 <p><?php echo htmlspecialchars($row->city) ;?>
                 <?php echo htmlspecialchars($row->state) . ", " ;?>
                 <?php echo htmlspecialchars($row->zip_code) ;?></p>
		</div>

		<div class="col-xs-4">
		  <a href="<?php echo URL . 'listing/deleteListing/' . $row->landlord_id . "/" . $row->listing_id ;?>"  class="btn btn-danger">Delete</a>
		</div>
	      </div>
	    </div>
	  </div>

	<?php } ?>
      </div>
    </div>
  </div>
</div>
