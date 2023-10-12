<?php
include("connection.php");
$usn=$_POST['usn'];
$pstatus=$_POST['pstatus'];
try{
$query = mysqli_query($con,"UPDATE `information` SET `ProjectStatus`='$pstatus' WHERE `USN`= '$usn';") or die(mysqli_error($con));
if($query)
{
	?>
	<script> 
		alert("Status submitted");
		window.location.href="pstatusadd.php";
	</script>
	<?php
}
else
{
	?>
	<script>
		alert("Something went wrong");
		window.location.href="pstatusadd.php";
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
		window.location.href="pstatusadd.php";
	</script>
	<?php
    } else 
    {
        throw $e;
    }
}
?>