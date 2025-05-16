<html>
    <head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Smart Hire</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <link rel="stylesheet" href="css/_all-skins.min.css">
  <link rel="stylesheet" href="css/custom.css">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
<body background="book.jpg" text="white" >
<body class="hold-transition skin-green sidebar-mini" style="background-color:#E8E8E8; font-family:algerian;">
<header class="main-header">

<!-- Logo -->
<a href="index.php" class="logo logo-bg">
  <span class="logo-lg" style="font-family:algerian;"><b>Smart Hire</b></span>
</a>

<nav class="navbar navbar-static-top">
  <!-- Navbar Right Menu -->
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <li>
        <a href="jobs.php">Jobs</a>
      </li>
      <li>
        <a href="#candidates">Candidates</a>
      </li>
      <li>
        <a href="#company">Company</a>
      </li>
      <li>
        <a href="#about">About Us</a>
      </li>
      <?php if(empty($_SESSION['id_user']) && empty($_SESSION['id_company'])) { ?>
      <li>
        <a href="login.php">Login</a>
      </li>
      <li>
        <a href="sign-up.php">Sign Up</a>
      </li>  
      <li>
        <a href="Help.php">Quiz</a>
      </li>  
      <?php } else { 

        if(isset($_SESSION['id_user'])) { 
      ?>        
      <li>
        <a href="user/index.php">Dashboard</a>
      </li>
      <?php
      } else if(isset($_SESSION['id_company'])) { 
      ?>        
      <li>
        <a href="company/index.php">Dashboard</a>
      </li>
      <?php } ?>
      <li>
        <a href="logout.php">Logout</a>
      </li>
      <?php } ?>
    </ul>
  </div>
</nav>
      </div>
      </div>
</header>
<marquee style="background-color:white; font-family:algerian;"><h4>Welcome to<b> Smart Hire </b> – Streamlining HR Recruitment with Intelligence and Efficiency for a Smarter Workforce!</h4>
   </marquee>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0px;">

    <section class="content-header">
      <div class="container">
        <div class="row latest-job margin-top-50 margin-bottom-20">
          <h1 class="text-center margin-bottom-20" style="font-family:algerian;">Login </h1>
          <div class="col-md-6 latest-job ">
            <div class="small-box bg-yellow padding-5">
              <div class="inner">
                <h3 class="text-center">Candidates Login</h3>
              </div>
              <a href="login-candidates.php" class="small-box-footer">
                Login <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6 latest-job ">
            <div class="small-box bg-red padding-5">
              <div class="inner">
                <h3 class="text-center">Company Login</h3>
              </div>
              <a href="login-company.php" class="small-box-footer">
                Login <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer" style="margin-left: 0px;">
    <div class="text-center">
      <strong>Anshika &#10084; 2025 <a href="index.php">SmartHire</a>.</strong> All rights
    reserved.
    </div>
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
</body>
</html>
