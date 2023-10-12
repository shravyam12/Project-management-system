<?php
include("connection.php");
  $name=$_POST['name'];
  $phn=$_POST['id'];
  $pass=$_POST['pass'];
  $pas1=$_POST['pass1'];
  if($pass==$pas1)
  {
    $check=mysqli_num_rows(mysqli_query($con,"SELECT * FROM `adminregister` WHERE `id`='$phn';"));
	
    if($check == 1)
	{
	 ?>
	 <script> 
	 alert("ID already registered");
	 window.location.href="admreg.php";
	 </script>
	 <?php
    }
    else
	{
        $query=mysqli_query($con,"INSERT INTO `adminregister`(`aname`,`id`,`apassword`) VALUES ('$name','$phn','$pass')") or die(mysqli_error($con));
        if($query)
        {
	     ?>
	     <script> 
		 alert("Registered successfully");
		 window.location.href="pstatusadd.php";
	     </script>
	     <?php
        }
        else
        {
	     ?>
	     <script>
		 alert("Something went wrong");
		 window.location.href="admreg.php";
	     </script>
	     <?php
        }
    }
 }
  if($pass!=$pas1){
	?>
	<script> 
		alert("password does not match");
		window.location.href="reg.php";
	</script>
	<?php

  }
?>