<?php include "includes/head.php"; ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php include "includes/navigation.php"; ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tables</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Category</th>
                  <th>Location</th>
                  <th>Description</th>
                  <th>Mobile No.</th>
                  <th>Email</th>
                  <th>Website</th>
                  <th>Image</th>
                  <th>Date</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php

                $query = "SELECT * FROM listings";
                $select_all_listings = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_assoc($select_all_listings)) {
                  $list_id = $row['list_id'];
                  $name = $row['name'];
                  $cat_id = $row['cat_id'];
                  $loc_id = $row['loc_id'];
                  $description = $row['description'];
                  $mobile = $row['mobile'];
                  $email = $row['email'];
                  $website = $row['website'];
                  $post_image = $row['post_image'];
                  $date = $row['date'];

                  echo "<tr>";
                  echo "<td>{$name}</td>";

                  $query = "SELECT * FROM categories WHERE cat_id = {$cat_id} ";
                  $select_all_categories = mysqli_query($connection, $query);

                  while($row = mysqli_fetch_assoc($select_all_categories)){

                    $cat_id = $row['cat_id'];
                    $cat_title = $row['cat_title'];

                    echo "<td>{$cat_title}</td>";

                  }


                  $query = "SELECT * FROM locations WHERE loc_id = {$loc_id} ";
                  $select_all_locations = mysqli_query($connection, $query);

                  while($row = mysqli_fetch_assoc($select_all_locations)){

                    $loc_id = $row['loc_id'];
                    $location = $row['location'];

                    echo "<td>{$location}</td>";

                  }

                  echo "<td>{$description}</td>";
                  echo "<td>{$mobile}</td>";
                  echo "<td>{$email}</td>";
                  echo "<td>{$website}</td>";
                  echo "<td><img src='../images/$post_image' class='img-fluid'></td>";
                  echo "<td>{$date}</td>";
                  echo "<td><a href='edit_business.php?edit={$list_id}' class='btn btn-warning'>Edit</a></td>";
                  echo "<td><a href='business.php?delete={$list_id}' class='btn btn-danger'>Delete</a></td>";
                  echo "</tr>";
                }

                 ?>
              </tbody>
            </table>

            <?php

            if(isset($_GET['delete'])){
              $the_listing_id = $_GET['delete'];

              $query = "DELETE FROM listings WHERE list_id = {$the_listing_id} ";
              $delete_query = mysqli_query($connection, $query);
              header("Location: business.php");

              if(!$delete_query){
                die("QUERY FAILED" . mysqli_error($connection));
              }
            }


             ?>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include "includes/footer.php"; ?>
