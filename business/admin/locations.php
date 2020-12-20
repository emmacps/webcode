<?php include "includes/head.php"; ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include "includes/navigation.php"; ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Blank Page</li>
      </ol>
          <div class="row">
        <div class="col-sm-4">
          <!-- Add location query -->
          <?php

          if(isset($_POST['submit'])){
            $location = $_POST['location'];
            // validate empty fields
            if($location == "" || empty($location)){
              echo "This field cant be empty";
            }else{
              // Insert location to db
             // $query = "INSERT INTO categories(cat_title) VALUES('$cat_title') ";
              $query = "INSERT INTO locations(location)";
              $query .= "VALUES ('$location') ";

              $create_location_query = mysqli_query($connection, $query);
              echo "New location Inserted";

              if(!$create_location_query){
                  die("ERROR: Could not connect. " . mysqli_connnect_error());
              }

            }

          }

           ?>
          <form action="" method="post">
            <div class="form-group">
                <label>Add Locations</label>
              <input type="text" name="location" placeholder="Add Location" class="form-control">
            </div>
            <div class="form-group">
              <input type="submit" name="submit" value="Add Location" class="btn btn-primary mt-2">
            </div>
          </form>

          <!-- Perform edit/update equery here -->
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


        </div>

        <!-- Show col for location table -->
        <div class="col-sm-8">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Location</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>

                     <!-- Get record of locations from DB -->
                <?php
                $query = "SELECT * FROM locations";
                $select_all_locations = mysqli_query($connection, $query);

                  while($row = mysqli_fetch_assoc($select_all_locations)){
                    $loc_id = $row['loc_id'];
                    $location = $row['location'];

                  echo "<tr>";
                  echo "<td>{$location}</td>";
                  echo "<td><a href='locations.php?edit={$loc_id}' class='btn btn-warning'>Edit</a></td>";
                  echo "<td><a href='locations.php?delete={$loc_id}' class='btn btn-danger'>Delete</a></td>";
                  echo "</tr>";
                  }

                 ?>

                 <!--  Delete category-->
                 <?php
                 if(isset($_GET['delete'])){

                   $the_loc_id = $_GET['delete'];
                   $query = "DELETE FROM locations WHERE loc_id = {$the_loc_id} ";
                   $delete_query = mysqli_query($connection, $query);

                   header("Location: locations.php");
                 }
                  ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include "includes/footer.php"; ?>
