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

$sql = "UPDATE Booking SET BookingID ='$_POST[BookingID]',StaffID = '$_POST[StaffID]',Username = '$_POST[Username]',Email = '$_POST[Email]',Room = '$_POST[Room]',StartDate = '$_POST[StartDate]',EndDate = '$_POST[EndDate]',StartTime = '$_POST[StartTime]',EndTime = '$_POST[EndTime]',Reason = '$_POST[Reason]' WHERE BookingID = '$_POST[BookingID]'";

if (mysqli_query($conn, $sql))
{
	echo "ONE[1] record edit successfully, <a href= 'EditStaffBooking.php'>Back </a>.";
}
else
{
	echo "Error updating record: " . mysqli_error($conn);
}
$conn->close();
?>
