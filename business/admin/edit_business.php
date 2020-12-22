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

if(isset($_GET['edit'])){
 $the_listing_id = $_GET['edit'];
}

$query = "SELECT * FROM listings WHERE list_id = $the_listing_id ";
$select_listings = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_listings)) {
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
}


// Update business QUERY

if(isset($_POST['update_listing'])){
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

    $query = "UPDATE listings SET ";
    $query .= "name = '{$name}', ";
    $query .= "description = '{$description}', ";
    $query .= "cat_id = '{$cat_id}', ";
    $query .= "loc_id = '{$loc_id}', ";
    $query .= "mobile = '{$contact}', ";
    $query .= "email = '{$email}', ";
    $query .= "website = '{$website}', ";
    $query .= "date = now() ";
    $query .= "WHERE list_id = {$the_listing_id} ";

    $update_query = mysqli_query($connection, $query);

    if(!$update_query){
      die("QUERY FAILED" . mysqli_error($connection));
    }
}


 ?>


        <form action="" method="post" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $name; ?> ">
            </div>
            <div class="form-group col-md-6">
                <label for="">Business Description</label>
                <textarea class="form-control" name="description"><?php echo $description; ?></textarea>
            </div>
            <div class="form-group col-md-6">
              <label for="">Select Business Category</label>
              <select name="cat_id" class="form-control">
                <?php

                $query = "SELECT * FROM categories WHERE cat_id = {$cat_id} ";
                $select_all_categories = mysqli_query($connection, $query);

                while($row = mysqli_fetch_assoc($select_all_categories)){

                  $cat_id = $row['cat_id'];
                  $cat_title = $row['cat_title'];

                echo "<option value='{$cat_id}'>{$cat_title}</option>";
                }

                 ?>




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

                <?php

                $query = "SELECT * FROM locations WHERE loc_id = {$loc_id} ";
                $select_all_locations = mysqli_query($connection, $query);

                while($row = mysqli_fetch_assoc($select_all_locations)){

                  $loc_id = $row['loc_id'];
                  $location = $row['location'];

                    echo "<option value='{$loc_id}'>{$location}</option>";

                      }
                 ?>


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
              <img src="../images/<?php echo $post_image; ?>" alt="" class="img-fluid">
              <input type="file" class="form-control" name="image">
            </div>
            <div class="form-group col-md-6">
              <label for="">Contact</label>
              <input type="text" class="form-control" name="contact" value="<?php echo $mobile; ?>">
           </div>
           <div class="form-group col-md-6">
              <label for="">Email</label>
              <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="form-group col-md-6">
               <label for="">Website</label>
               <input type="text" class="form-control" name="website" value="<?php echo $website; ?>">
             </div>
        </div>
          <button type="submit" name="update_listing" class="btn btn-primary">Update Business</button>
        </form>
      </div>

      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include "includes/footer.php"; ?>
