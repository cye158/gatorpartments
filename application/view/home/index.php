<div class="mainContainer">
    <div class="container">
        <h1 class="page-header">Find Aparments</h1>

        <form action="<?php echo URL; ?>" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="searchInput" placeholder="Type something">
            </div>

            <div class="">
             <!--   <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Find all
                </label>
                <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> By Zipcode
                </label>
                <label class="radio-inline">
                <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> By Newest
                </label>  -->

                <button type="submit" name="submitSearch" class="btn btn-primary pull-right">Search</button>
            </div>
        </form>

	<?php if(isset($listing)){ echo "<h1>Results</h1>";  ?>

	<?php foreach($listing as $rows){ ?>

	<div class="listing clearfix">
	    <div class="col-xs-9">
	        <div class="listingHeader"><?php  echo "$" . $rows->price . " " . $rows->size; ?></div>
	        <div class="listingHeader"><?php  echo $rows->street_number . " " . $rows->street_address . " " . $rows->city . " " . $rows->zip_code;?></div>
		<div class="listingDescription"><?php  echo $rows->description; ?></div>
	    </div>
            <div class="listingImage col-xs-3 pull-right"><img class="img"src=" <?php echo $rows->image; ?> "></div>
	</div>
	
	<?php } ?>
	<?php } ?>
	

    </div>
</div>
