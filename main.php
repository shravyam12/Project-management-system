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
              <a class="nav-link js-scroll-trigger" href="about.php">Project Status</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="main.php">Project Details</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="contact.php">Contact</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
<body>
  <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <br>
          <br>
          <br>
          <br>
          <form name="" method="post" action="sub_val.php" enctype="multipart/form-data">
        <div>
          <section>
                <label>Student Name</label>
                <input class="form-control" classtype="text" name="name" placeholder="Student Name" required>
          </section>
           </div>
           <div>
          <section>
                <label>USN</label>
                <input class="form-control" classtype="text" name="usn" placeholder="USN" required>
          </section>
           </div>
       <div>
        <section>
              <label>Project Title</label>
              <input class="form-control" classtype="text" name="ptitle" placeholder="Project Title" required>
        </section>
      </div>
<div>
  <section>
    <label>Project Description</label>
    <input class="form-control" classtype="text" name="pdescription" placeholder="Project Description" required>
  </section>
</div>
<div>
  <section>
    <label>Faculty Details</label>
    <input class="form-control" classtype="text" name="faculty" placeholder="Faculty Details" required>
  </section>
</div>
<div>
      

      <br>
      <label for="image">Upload Project File   : </label>
      <input type="file" name="image" id = "image" accept=".pdf, .zip, .jpg, .jpeg, .png" value=""> <br> <br>

      
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
</section>
</body>
<!-- Footer -->
    <footer>
      <div class="container text-center">
        <p>Copyright &copy;DBMS Project Management System 2023</p>
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