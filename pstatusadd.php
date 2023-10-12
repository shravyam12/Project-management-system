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
    <!-- About Section -->
    <section id="about" class="content-section text-center">
      <div class="container">
      <div class="row">
      <div class="col-lg-8 mx-auto">
        <h2>Project Status</h2>
      <div class="container">
      <div class="row">
      <div class="col-sm-8">
      <div class="table-responsive">
        <table class="table table-bordered">
        <table border="1" align="center" width="800px">
        <thead><tr>
         <th>Student Name</th>
         <th>USN</th>
         <th>Project Title</th>
         <th>Project Description</th>
         <th>Faculty Details</th>
         <th>Project Status</th>
        
        </thead>
        <tbody>
<?php 
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'test');
$query = "SELECT * FROM `information`;";
$result = $con->query($query);
  if ($result->num_rows > 0) 
  {
    while($row = $result->fetch_assoc())
    {
?>
      <tr>
      <td><?php echo $row["StudentName"]; ?></td>
      <td><?php echo $row["USN"]; ?></td>
      <td><?php echo $row["ProjectTitle"]; ?></td>
      <td><?php echo $row["ProjectDescription"]; ?></td>
      <td><?php echo $row["FacultyDetails"]; ?></td>
      <td><?php echo $row["ProjectStatus"]; ?></td>
      </tr>
<?php
    }    
    } 
?>
    
          </tbody>
  </table>
     </table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<form name="" method="post" action="update.php" enctype="multipart/form-data">
<div>
        <section>
              <label>USN</label>
              <input class="form-control" width="50%" classtype="text" name="usn" placeholder="USN" required>
        </section>
      </div>
      <div>
        <section>
              <label>Project Status</label>
              <input class="form-control" classtype="text" name="pstatus" placeholder="Project Status" required>
        </section>
      </div>
      <br>
      <div>
      <section>
        <input class="btn-success" type="submit" name="submit" value="Submit">
      </section>
    </div>
    </form>




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
