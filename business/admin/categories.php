<?php include "includes/head.php"; ?>

<?php 

if(($_SESSION['role'] != 'admin')){

  header("Location: dashboard.php");
}

 ?>

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
            <label>Add Category</label>
                  <!-- Query to insert categories  -->
            <?php

            if(isset($_POST['submit'])){
              $cat_title = $_POST['cat_title'];
              // validate empty fields
              if($cat_title == "" || empty($cat_title)){
                echo "This field cant be empty";
              }else{
                // Insert category to db
               // $query = "INSERT INTO categories(cat_title) VALUES('$cat_title') ";
                $query = "INSERT INTO categories(cat_title)";
                $query .= "VALUES ('$cat_title') ";

                $create_category_query = mysqli_query($connection, $query);
                echo "New Category Inserted";

              }

            }

             ?>

           <form action="" method="post">
             <div class="form-group">
               <input type="text" name="cat_title" placeholder="Add Category" class="form-control">
             </div>
             <div class="form-group">
               <input type="submit" name="submit" value="Add Category" class="btn btn-primary mt-2">
             </div>
           </form>

           <!-- Edit form -->
           <?php

           if(isset($_GET['edit'])){
             $cat_id = $_GET['edit'];

             include "includes/edit_categories.php";
           }

            ?>


          </div>

        <div class="col-sm-8">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Category</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php

                // select all category records
                $query = "SELECT * FROM categories";
                $select_all_categories = mysqli_query($connection, $query);

                  while($row = mysqli_fetch_assoc($select_all_categories)){
                    $cat_id = $row['cat_id'];
                    $cat_title = $row['cat_title'];

                    echo "<tr>";
                    echo "<td>{$cat_title}</td>";
                    echo "<td><a href='categories.php?edit={$cat_id}' class='btn btn-warning'>Edit</a></td>";
                    echo "<td><a href='categories.php?delete={$cat_id}' class='btn btn-danger'>Delete</a></td>";
                    echo "</tr>";

                  }

                 ?>


                      <!--  Delete category-->
                      <?php
                      if(isset($_GET['delete'])){

                        $the_cat_id = $_GET['delete'];
                        $query = "DELETE FROM categories WHERE cat_id = {$the_cat_id} ";
                        $delete_query = mysqli_query($connection, $query);

                        header("Location: categories.php");
                      }
                       ?>
              </tbody>
            </table>
          </div>
        </div>

      </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include "includes/footer.php"; ?>
