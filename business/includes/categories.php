<section class="category">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="display-4 mb-5">Browse By Category</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6"> 
               <div class="list-group">
                  <h3 class="list-group-item list-group-item-action active">
                   Categories
                  </h3>

                  <?php 

                  // read data from categories table
                  $query = "SELECT * FROM categories";
                  $select_all_categories = mysqli_query($connection, $query);

                  while($row = mysqli_fetch_assoc($select_all_categories)){
                    $cat_title = $row['cat_title'];

                    echo  "<a href='#' class='list-group-item list-group-item-action'>{$cat_title}</a>";

                  }

                   ?>

                </div>
            </div>
             <div class="col-sm-6">
                <div class="list-group">
                  <h3 class="list-group-item list-group-item-action active">
                   Locations
                  </h3>


                   <?php 

                  // read data from locations table
                  $query = "SELECT * FROM locations";
                  $select_all_locations = mysqli_query($connection, $query);

                  while($row = mysqli_fetch_assoc($select_all_locations)){
                    $location = $row['location'];

                    echo  "<a href='#' class='list-group-item list-group-item-action'>{$location}</a>";

                  }

                   ?>

                </div>
            </div>
        </div>
    </div>
</section>