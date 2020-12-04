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
          <div class="form-group">
            <label>Add Category</label>
            <input type="text" name="category" placeholder="Add Category" class="form-control">
            <input type="submit" name="submit" value="Add" class="btn btn-primary mt-2">
          </div>
        </div>
        <div class="col-sm-8">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Jonas Alexander</td>
                  <td>Developer</td>
                  <td>Aviation</td>
                </tr>
                <tr>
                  <td>Shad Decker</td>
                  <td>Regional Director</td>
                  <td>Edinburgh</td>
                </tr>
                <tr>
                  <td>Michael Bruce</td>
                  <td>Javascript Developer</td>
                  <td>Singapore</td>
                </tr>
                <tr>
                  <td>Donna Snider</td>
                  <td>Customer Support</td>
                  <td>New York</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include "includes/footer.php"; ?>