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
        <div class="col-sm-12">

<?php

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $description = $_POST['description'];
  $cat_id = $_POST['cat_id'];
  $loc_id = $_POST['loc_id'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];
  $website = $_POST['website'];
  $date = date('d-m-y');

  $post_image = $_FILES['image']['name'];
  $post_image_temp = $_FILES['image']['tmp_name'];

  move_uploaded_file($post_image_temp, "../images/$post_image");

  $query = "INSERT INTO listings(name, cat_id, loc_id, description, mobile, email, website, post_image, date)";
  $query .= "VALUES('{$name}', '{$cat_id}', '{$loc_id}', '{$description}', '{$contact}', '{$email}', '{$website}', '{$post_image}', now() ) ";

  $create_listings = mysqli_query($connection, $query);

  if(!$create_listings){
    die("Query Failed" . mysqli_error($connection));
  }




}


 ?>


        <form action="" method="post" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group col-md-6">
                <label for="">Business Description</label>
                <textarea class="form-control" name="description"></textarea>
            </div>
            <div class="form-group col-md-6">
              <label for="">Select Business Category</label>
              <select name="cat_id" class="form-control">
                <option>Select Category</option>
                <?php
                // select all categories
                $query = "SELECT * FROM categories";
                $select_all_categories = mysqli_query($connection, $query);

                  while($row = mysqli_fetch_assoc($select_all_categories)){
                    $cat_id = $row['cat_id'];
                    $cat_title = $row['cat_title'];

                    echo "<option value='{$cat_id}'>{$cat_title}</option>";
                  }
                 ?>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="">Select Business Location</label>
              <select name="loc_id" class="form-control">
              <option>Select Location</option>
              <?php

              $query = "SELECT * FROM locations";
              $select_all_locations = mysqli_query($connection, $query);

                while($row = mysqli_fetch_assoc($select_all_locations)){
                  $loc_id = $row['loc_id'];
                  $location = $row['location'];

                  echo "<option  value='{$loc_id}'>{$location}</option>";

                }

               ?>

              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="">Upload Image</label>
              <input type="file" class="form-control" name="image">
            </div>
            <div class="form-group col-md-6">
              <label for="">Contact</label>
              <input type="text" class="form-control" name="contact">
           </div>
           <div class="form-group col-md-6">
              <label for="">Email</label>
              <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group col-md-6">
               <label for="">Website</label>
               <input type="text" class="form-control" name="website">
             </div>
        </div>
          <button type="submit" name="submit" class="btn btn-primary">Add Business</button>
        </form>
      </div>

      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include "includes/footer.php"; ?>
