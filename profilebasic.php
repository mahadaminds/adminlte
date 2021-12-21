<?php include_once('includes/header.php'); ?>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

<?php

include_once('includes/navbar.php');

include_once('includes/sidebar.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <form action="mainprofile.js" method="post" id="createprofile">
                        <div class="form-group">
                <label for="inputName">DummyId</label>
                <input type="text" id="id" name="id" class="form-control">
              </div>
             <div class="form-group">
                <label for="inputName">Customer Id</label>
                <input type="text" id="cust_id" name="cust_id" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Email</label>
                <input type="email" name="email" id="email" class="form-control">
              </div>
                 <div class="form-group">
                <label for="inputName">Age</label>
                <input type="number" name="age" id="age" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">Height</label>
                <input type="number" name="height" id="height" class="form-control">
              </div>
              <div class="form-group">
              
 
                <label for="inputStatus">Sex</label>
                <input type="radio" name="gender" id="male" value="Male">Male
                <input type="radio" name="gender" id="female" value="Female">Female
                  
              </div>
                 <div class="form-group">
                <label for="inputName">religion</label>
                <input type="text" name="religion" id="religion" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">caste</label>
                <input type="text" name="caste" id="caste" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">subcaste</label>
                <input type="text" name="subcaste" name="subcaste" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">district</label>
                <input type="text" name="district" id="district" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">State</label>
                <input type="text" name="state" id="state" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">country</label>
                <input type="text" name="country" id="country" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">marital status</label>
                <input type="text" name="ms" id="ms" class="form-control">
              </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <button type="submit" id="createprofile" class="btn btn-success float-right">createprofile</button>
        </div>
      </div>
</form>


 <?php include_once('includes/footer.php'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
</body>
</html>
