<?php
include("connection.php");
{
    if(isset($_POST['wel']))
    $phn=$_POST['id'];
    $ppass=$_POST['pass'];
    
    $query="SELECT * FROM `adminregister` WHERE `id` = '$phn' AND `apassword` ='$ppass';";
    
    $result = mysqli_query($con, $query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    if($rows == 1)
    {
      header("Location: pstatusadd.php");
    }
    else{
?>
      <script> 
      alert("You are not yet registered");
      window.location.href="admreg.php";
      
    </script>

<?php

    
    }
    }
?>