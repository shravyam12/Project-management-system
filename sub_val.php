<?php
include("connection.php");
$name=$_POST['name'];
$usn=$_POST['usn'];
$ptitle=$_POST['ptitle'];
$pdescriptin=$_POST['pdescription'];
$faculty=$_POST['faculty'];

try{
$query=mysqli_query($con,"INSERT INTO `information`(`StudentName`,`USN`,`ProjectTitle`, `ProjectDescription`, `FacultyDetails`) VALUES ('$name','$usn','$ptitle','$pdescriptin','$faculty')") or die(mysqli_error($con));
if($query)
{
	?>
	<script> 
		alert("Your information has been submitted successfully");
		window.location.href="main.php";
	</script>
	<?php
}
else
{
	?>
	<script>
		alert("Something went wrong");
		window.location.href="main.php";
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
		window.location.href="main.php";
	</script>
	<?php
    } 
    else 
    {
        throw $e;
    }
}
?>


<?php
include("connection.php");
if(isset($_POST["submit"]))
{
  $name = $_POST["name"];
  if($_FILES["image"]["error"] == 4)
  {
    echo
    "<script> alert('Image Does Not Exist'); </script>"
    ;
  }
  else
  {		
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['zip','pdf','jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      echo
      "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
    }
    else
    {
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, 'img/' . $newImageName);
      $query = "INSERT INTO tb_upload VALUES('', '$name', '$newImageName')";
      mysqli_query($conn, $query);
      echo
      "
      <script>
        alert('Successfully Added');
        
      </script>
      ";
    }
  }
}

