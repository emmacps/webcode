  <div class="col-sm-4">
                <div class="card">
                    <form class="form-inline">
                      <div class="form-group m-2">
                        <input type="text" class="form-control" id="" placeholder="Search">
                      </div>
                    </form>
                    <div class="list-group mt-2">
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
                    <div class="list-group mt-2">
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


                <h1 class="display-5 mt-5">Featured Listing</h1>
                  <?php 

                      $query = "SELECT * FROM listings";
                      $selecting_all_listings = mysqli_query($connection, $query);

                      while($row = mysqli_fetch_assoc($selecting_all_listings)){

                        $list_id = $row['list_id'];
                        $name = $row['name'];
                        $description = $row['description'];

                        ?>

                         <div class="card mb-2">             
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $name; ?></h5>
                    <p class="card-text"><?php echo $description; ?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>

          <?php  } ?>

               
              </div> 