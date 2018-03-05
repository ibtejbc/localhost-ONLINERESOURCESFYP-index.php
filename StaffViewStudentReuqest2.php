
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

$sql = "UPDATE BookingRequest SET RequestBookingID ='$_POST[RequestBookingID]',Status = '$_POST[Status]' WHERE RequestBookingID = '$_POST[RequestBookingID]'";

if (mysqli_query($conn, $sql))
{
	echo "ONE[1] record edit successfully, <a href= 'StaffViewStudentReuqest.php'>Back </a>.";
}
else
{
	echo "Error updating record: " . mysqli_error($conn);
}
$conn->close();
?>
