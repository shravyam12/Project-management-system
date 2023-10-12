<?php
include("connection.php");
  $name=$_POST['name'];
  $usn=$_POST['usn'];
  $phn=$_POST['phone'];
  $pass=$_POST['feedback'];
try{
  $query=mysqli_query($con,"INSERT INTO `contact`(`Name`,`USN`,`PhoneNumber`,`Feedback`) VALUES ('$name','$usn','$phn','$pass')") or die(mysqli_error($con));
if($query)
{
	?>
	<script> 
		alert("Your feedback has been submitted successfully");
		window.location.href="contact.php";
	</script>
	<?php
}
else
{
	?>
	<script>
		alert("Something went wrong");
		window.location.href="contact.php";
	</script>
	<?php
}
}
catch (PDOException $e) {
    if ($e->getCode() == 1062)
    {
    	?>
        <script>
		alert("Something went wrong");
		window.location.href="contact.php";
	</script>
	<?php
    } else 
    {
        throw $e;
    }
}
?>