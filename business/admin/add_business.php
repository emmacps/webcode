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
        <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">Name</label>
                <input type="text" class="form-control" name="">
            </div>
            <div class="form-group col-md-6">
                <label for="">Business Description</label>
                <textarea class="form-control" name="description"></textarea>
            </div>
            <div class="form-group col-md-6">
              <label for="">Select Business Category</label>
              <select class="form-control">
              <option>Select Category</option>
              <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="">Select Business Location</label>
              <select class="form-control">
              <option>Select Location</option>
              <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="">Upload Image</label>
              <input type="file" class="form-control">
            </div>
            <div class="form-group col-md-6">
              <label for="">Contact</label>
              <input type="text" class="form-control">
           </div>
           <div class="form-group col-md-6">
              <label for="">Email</label>
              <input type="email" class="form-control">
            </div>
        </div>
          <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
      </div>
        
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include "includes/footer.php"; ?>