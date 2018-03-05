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

$sql = "UPDATE BookingRequest SET RequestBookingID ='$_POST[RequestBookingID]',StudentID = '$_POST[StudentID]',Username = '$_POST[Username]',Course = '$_POST[Course]',Room = '$_POST[Room]',RequestStartDate = '$_POST[RequestStartDate]',RequestEndDate = '$_POST[RequestEndDate]',RequestStartTime = '$_POST[RequestStartTime]',RequestEndTime = '$_POST[RequestEndTime]',RequestSendTo = '$_POST[RequestSendTo]',Reason = '$_POST[Reason]' WHERE RequestBookingID = '$_POST[RequestBookingID]'";

if (mysqli_query($conn, $sql))
{
	echo "ONE[1] record edit successfully, <a href= 'StudentViewBooking.php'>Back </a>.";
}
else
{
	echo "Error updating record: " . mysqli_error($conn);
}
$conn->close();
?>
