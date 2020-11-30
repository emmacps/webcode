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
                  <th>Description</th>
                  <th>Category</th>
                  <th>Location</th>
                  <th>Image</th>
                  <th>Contact</th>
                  <th>Email</th>
                  <th>Publish</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Jonas Alexander</td>
                  <td>Developer</td>
                  <td>Aviation</td>
                  <td>Accra</td>
                  <td>scan.jpg</td>
                  <td>1234567890</td>
                  <td>Aviation</td>
                  <td>Accra</td>
                  <td>scan.jpg</td>
                  <td>1234567890</td>
                </tr>
                <tr>
                  <td>Shad Decker</td>
                  <td>Regional Director</td>
                  <td>Edinburgh</td>
                  <td>51</td>
                  <td>2008/11/13</td>
                  <td>$183,000</td>
                  <td>Aviation</td>
                  <td>Accra</td>
                  <td>scan.jpg</td>
                  <td>1234567890</td>
                </tr>
                <tr>
                  <td>Michael Bruce</td>
                  <td>Javascript Developer</td>
                  <td>Singapore</td>
                  <td>29</td>
                  <td>2011/06/27</td>
                  <td>$183,000</td>
                  <td>Aviation</td>
                  <td>Accra</td>
                  <td>scan.jpg</td>
                  <td>1234567890</td>
                </tr>
                <tr>
                  <td>Donna Snider</td>
                  <td>Customer Support</td>
                  <td>New York</td>
                  <td>27</td>
                  <td>2011/01/25</td>
                  <td>$112,000</td>
                  <td>Aviation</td>
                  <td>Accra</td>
                  <td>scan.jpg</td>
                  <td>1234567890</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include "includes/footer.php"; ?>