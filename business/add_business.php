<!-- include head section -->
<?php include "includes/head.php"; ?>
  <body>
    <!-- Navigation bar -->
<?php include "includes/navigation.php"; ?>

<!-- Starting banner -->
<?php include "includes/search.php"; ?>

<!-- Starting body section: list directory by category -->
<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<h5 class="display-4">Submit Your Business For Listing</h5>
			<form>
			  <div class="form-group">
			    <label for="">Business Name</label>
			    <input type="text" class="form-control">
			  </div>
			  <div class="form-group">
			    <label for="">Email</label>
			    <input type="email" class="form-control">
			  </div>
			  <div class="form-group">
			  	<label for="">Mobile Number</label>
			    <input type="text" class="form-control">			    
			  </div>
			  <div class="form-group">
			  	<label for="">Select Category</label>
			  	<select class="form-control">
			  		<option>Aviation</option>
			  		<option>Legal Firm</option>
			  		<option>Marketing</option>
			  	</select>
			  </div>
			  <div class="form-group">
			  	<label for="">Select Location</label>
			  	<select class="form-control">
			  		<option>Accra</option>
			  		<option>Adenta</option>
			  		<option>Kasoa</option>
			  	</select>
			  </div>
			  <div class="form-group">
			  	<label for="">Upload Business Cover Image</label>
			  	<input type="file" class="form-control">
			  </div>
			  <div class="form-group">
			  	<label for="">Business Description</label>
			  	<textarea class="form-control"></textarea>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
			<!-- Include sidebar -->
			<?php include "includes/sidebar.php"; ?>
	</div>
</div>

<!-- Include footer section -->
<?php include "includes/footer.php"; ?>

