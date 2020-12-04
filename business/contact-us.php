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
			<h5 class="display-4">Contact us for support</h5>
			<form>
			  <div class="form-group">
			    <label for="">Name</label>
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
			  	<label for="">Subject</label>
			  	<select class="form-control">
			  		<option>Consulting</option>
			  		<option>Enquires</option>
			  		<option>Advirtising</option>
			  	</select>
			  </div>
			  <div class="form-group">
			  	<label for="">Message</label>
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

