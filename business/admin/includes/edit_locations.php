<form action="" method="post">
    <label>Edit Location</label>
  <div class="form-group">
    <?php
    // Query to get value from db to edit
    if(isset($_GET['edit'])){
      $loc_id = $_GET['edit'];

      $query = "SELECT * FROM locations WHERE loc_id = $loc_id ";
      $select_all_loc_id = mysqli_query($connection, $query);

      while($row = mysqli_fetch_assoc($select_all_loc_id)){
        $loc_id = $row['loc_id'];
        $location = $row['location'];

        ?>

  <input value="<?php if(isset($location)){echo $location; } ?>" type="text" name="location" class="form-control">

<?php  } } ?>

    <?php
    // update location query
    if(isset($_POST['update_location'])){
    // $loc_id = $_POST['loc_id'];
     $the_location = $_POST['location'];

     $query = "UPDATE locations SET location = '{$the_location}' WHERE loc_id = '{$loc_id}' ";
     $update_query = mysqli_query($connection, $query);
     header("Location: locations.php");

     if(!$update_query){
         die("ERROR: Could not connect. " . mysqli_connnect_error());
     }
    }

    ?>

</div>

<!-- Update location form -->
  <div class="form-group">
    <input type="submit" name="update_location" value="Edit Location" class="btn btn-primary">
  </div>
</form>
