<?php
include("connection.php");
{
    if(isset($_POST['wel']))
    $phn=$_POST['usn'];
    $ppass=$_POST['pass'];
    


    
    $query="SELECT * FROM `register` WHERE `usn` = '$phn' AND `password` ='$ppass';";
    $result = mysqli_query($con, $query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    if($phn=='admin' && $ppass== 'admin')
    {
      ?>
      <script> 
      alert("Successfull");
      window.location.href="admin.php";
      
    </script>

<?php



    }
    else if($rows == 1)
    {
      header("Location: main.php");
    }
    else{
?>
      <script> 
      alert("You are not yet registered");
      window.location.href="reg.php";
      
    </script>

<?php

    
    }
    }
?>