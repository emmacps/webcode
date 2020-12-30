<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="display-4 mb-5"> Search Results</h2>
            </div>
        </div>
        <div class="row">

          <?php 

          if(isset($_POST['submit'])){

            $search = $_POST['search'];

          // Selecting from listings table
          //$query = "SELECT * FROM listings";
          $query = "SELECT * FROM listings WHERE description LIKE '%$search%' OR name LIKE '%$search%' ";
          $selecting_search = mysqli_query($connection, $query);

          if(!$selecting_search){
            die("QUERY FAILED" . mysqli_error($connection));
          }

          $count = mysqli_num_rows($selecting_search);
          if($count == 0){
            echo "<h1>No result found</h1>";
          }else{

          while($row = mysqli_fetch_assoc($selecting_search)){

            $list_id = $row['list_id'];
            $name = $row['name'];
            $description = $row['description'];
            $post_image = $row['post_image'];

            ?>

            <div class="col-sm-4">
                <div class="card">
                  <img src="images/<?php echo $post_image; ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $name; ?></h5>
                    <p class="card-text"><?php echo $description; ?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
            </div>

       <?php  } } }  ?>

        </div>
    </div>
</section>