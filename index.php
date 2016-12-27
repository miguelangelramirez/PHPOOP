  <!-- Header Starts -->
  <?php include 'includes/header.php'; ?> 
  <!-- Header Ends -->
  
  <!-- Left side column. contains the logo and sidebar -->
  <?php include 'includes/sidebar.php'; ?>
  <!-- Left side column ends -->
  
  <!-- Content Wrapper starts. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <?php include 'includes/admin-content.php'; ?>
        
        
      
          <!-- Old content starts -->
          <?php include 'includes/old-content.php'; ?>
          <!-- Old content ends  -->
        </div>
      </div>
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  <?php include 'includes/footer.php'?>