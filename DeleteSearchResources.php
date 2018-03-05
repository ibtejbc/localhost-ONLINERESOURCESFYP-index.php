<style type="text/css">
body {
	background-image: url(BackgroundAdmin.jpg);
	background-repeat: repeat;
}
</style>

<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "Online";

//Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
//Check connection
if(!$conn)
{
die("Could not Connect Sucessfully" . mysqli_connect_error());
}

$sql = "DELETE FROM ListResources WHERE Room = '$_POST[Room]'";

if (mysqli_query($conn, $sql))
{
	echo "ONE[1] record delete successfully, <a href= 'Resourcescategory.php'>Back </a> to see list resources.";
}
else
{
	echo "Error updating record: " . mysqli_error($conn);
}
$conn->close();
?>
