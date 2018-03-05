
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

$sql = "UPDATE Booking SET BookingID ='$_POST[BookingID]',Status = '$_POST[Status]' WHERE BookingID = '$_POST[BookingID]'";

if (mysqli_query($conn, $sql))
{
	echo "ONE[1] record edit successfully, <a href= 'BookingRequest.php'>Back </a>.";
}
else
{
	echo "Error updating record: " . mysqli_error($conn);
}
$conn->close();
?>
