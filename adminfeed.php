<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<title>DBMS PROJECT MANAGEMENT SYSTEM</title>
  <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>
  <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">
</head>
<body id="page-top">
  <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">DBMS PROJECT MANAGEMENT SYSTEM</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="pstatusadd.php">Project Status</a>
          </li>
          <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="adminfeed.php">Contact</a>
          </li>
        </ul>
        </div>
      </div>
    </nav>
<!--==========================
      Contact Section
    ============================-->
<section id="contact" class="section-bg wow fadeInUp">
  <div class="container">
    <div class="section-header">
          <br>
          <br>
          <br>
          <br>
          <h3>Contact Us</h3>
          <form name="" method="post" action="admin_contact.php">
           <div>
            <section>
              <label>Name</label>
              <input class="form-control" classtype="text" name="name" placeholder="Enter Your Name" required>
            </section>
           </div>
           <div>
            <section>
              <label>ID</label>
              <input class="form-control" classtype="text" name="id" placeholder="Enter Your ID" required>
            </section>
           </div>
     <div>
            <section>
               <label>Phone Number</label>
              <input class="form-control" classtype="text" name="phone" placeholder="Phone Number" required>
            </section>
   </div>
  <div>
             <section>
               <label>Feedback</label>
                <textarea class="form-control" name="feedback" placeholder="feedback" required> </textarea>
             </section>
   </div>
<p></p>
    <div>
              <section>
                <input class="btn-success" type="submit" name="submit" value="Submit">
                <input class="btn-info" type="reset" name="res_btn" value="Reset">
              </section>
    </div>
</form>
</div>
</div>
</section><!-- #contact -->
<!-- Contact Section -->
    <section id="contact" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <p>Feel free to leave us a comment</p>
             <div class="row">
               <div class="col-lg-6 col-md-6 footer-contact">
                 <img src="picture/reg.jpeg" width="150" height="150">
                  <p>
                    <strong>Shravya M</strong><br>
                    Kasaragod<br>
                    Kerala-671124<br>
                    <strong>Phone:</strong> +91 7306499181<br>
              
                  </p>
                </div>
              <div class="col-lg-6 col-md-6 footer-contact">
                  <img src="picture/rak.jpeg" width="150" height="150">
            <p>
                   <strong>Rakshithaa N</strong><br>
                   Uppinangady<br>
                  Karnataka-574241<br>
                  <strong>Phone:</strong> +91 9482694291<br>
            </p>
            </div>
         </div>
      </div>
   </section>



    <!-- Footer -->
    <footer>
      <div class="container text-center">
        <p>Copyright &copy; Project Management System 2023</p>
         
      </div>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>
</body>
</html>
