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

$sql = "UPDATE ListResources SET RoomID ='$_POST[RoomID]',Room= '$_POST[Room]',Department = '$_POST[Department]',LevelFloor = '$_POST[LevelFloor]',GroupCode = '$_POST[GroupCode]',Course = '$_POST[Course]',StaffinCharge = '$_POST[StaffinCharge]' WHERE RoomID = '$_POST[RoomID]'";

if (mysqli_query($conn, $sql))
{
	echo "ONE[1] record edit successfully, <a href= 'ResourcesCategory.php'>Back </a> to see list resources.";
}
else
{
	echo "Error updating record: " . mysqli_error($conn);
}
$conn->close();
?>
