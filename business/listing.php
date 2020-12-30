<!-- include head section -->
<?php include "includes/head.php"; ?>
  <body>
    <!-- Navigation bar -->
<?php include "includes/navigation.php"; ?>

<!-- Starting banner -->
<?php include "includes/search.php"; ?>


<!-- Featured lising on homepage -->
<section>
    <div class="container">
        <div class="row">
            <!-- Display listing based on categories -->
            <div class="col-sm-8">
              <?php 

              if(isset($_GET['list'])){
                
                $the_list_id = $_GET['list'];

              }

              $query = "SELECT * FROM listings WHERE list_id = $the_list_id ";
              $selecting_all_listings = mysqli_query($connection, $query);

              while($row = mysqli_fetch_assoc($selecting_all_listings)){

                $list_id = $row['list_id'];
                $name = $row['name'];
                $description = $row['description'];
                $post_image = $row['post_image'];
                $mobile = $row['mobile'];
                $email = $row['email'];
                $website = $row['website'];
                $date = $row['date'];
                //$date =  strftime("%b %d, %Y", strtotime(//["date"]));


              }

               ?>

                <div class="">
                    <h1 class="display-4"><?php echo $name ?></h1>
                    <img src="images/<?php echo $post_image; ?>" class="card-img-top" alt="...">
                  <div class=""> 
                   <h4>Description</h4> 
                   <p class="lead"><?php echo $description ?></p>   
                   <h4>Mobile Number</h4>  
                    <a href="tel:<?php echo $mobile; ?>"><?php echo $mobile; ?></a>  <br>
                    <h4>Email Address</h4>
                    <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a> <br>
                    <h4>Website</h4>
                    <a href="<?php echo $website; ?>" target="_blank"><?php echo $website; ?></a>
                    <h4>Date Joined</h4>
                    <p><?php echo $date ?></p>
                  </div>
                </div>

















                <!-- Setting review -->
          <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Your Reviews</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Reviews</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <form>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email address</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Review</label>
                        <textarea class="form-control"></textarea>
                    </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <div class="card p-2 m-2">
                      <h2>Emmanuel Ntimoah</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                  <div class="card p-2 m-2">
                      <h2>Emmanuel Ntimoah</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                  </div>
              </div>
            </div>

               
            </div> 
            <!-- Sidebar with categories -->
            <div class="col-sm-4">
                <div class="card">
                    <form class="form-inline">
                      <div class="form-group m-2">
                        <input type="text" class="form-control" id="" placeholder="Search">
                      </div>
                    </form>
                    <div class="list-group mt-2">
                      <a href="#" class="list-group-item list-group-item-action active">
                       Categories
                      </a>
                      <a href="#" class="list-group-item list-group-item-action">Aviation</a>
                      <a href="#" class="list-group-item list-group-item-action">Oil and Gas</a>
                      <a href="#" class="list-group-item list-group-item-action">Tech Companies</a>
                      <a href="#" class="list-group-item list-group-item-action">Fashion</a>
                      <a href="#" class="list-group-item list-group-item-action">Marketing and Consultancy</a>
                      <a href="#" class="list-group-item list-group-item-action">Advertising</a>
                    </div>
                    <div class="list-group mt-2">
                      <a href="#" class="list-group-item list-group-item-action active">
                       Locations
                      </a>
                      <a href="#" class="list-group-item list-group-item-action">Accra</a>
                      <a href="#" class="list-group-item list-group-item-action">Tema</a>
                      <a href="#" class="list-group-item list-group-item-action">Kasoa</a>
                      <a href="#" class="list-group-item list-group-item-action">Kumasi</a>
                      <a href="#" class="list-group-item list-group-item-action">Ho</a>
                      <a href="#" class="list-group-item list-group-item-action">Wa</a>
                    </div>
                </div>
                <h1 class="display-5 mt-5">Featured Listing</h1>
                <div class="card mb-2">             
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                <div class="card">             
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>


            </div> 
        </div>
    </div>
</section>

<footer>
    <div class="copy-right">
        <p>&copy; 2020. All Right Reserved. Website Design and Developed By <a href="">ENT</a></p>
    </div>
</footer>
 
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>