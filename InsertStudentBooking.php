<html>
<style type="text/css">
body {
	background-image: url(BackgroundAdmin.jpg);
	background-repeat: repeat;
}
</style>
<body> 
<?php

$con = mysql_connect("localhost", "root", "mysql");
if (!$con)
{
die('Could not connect:' . mysql_error());
}
echo 'Connected successfully' . "<br>";
mysql_select_db("Online");
$sql = "INSERT INTO BookingRequest(StudentID, Username, Email, Course, Room, RequestStartDate, RequestEndDate, RequestStartTime, RequestEndTime, RequestSendTo, Reason, Status)
VALUES 
('$_POST[StudentID]','$_POST[Username]','$_POST[Email]','$_POST[Course]','$_POST[Room]','$_POST[RequestStartDate]','$_POST[RequestEndDate]','$_POST[RequestStartTime]','$_POST[RequestEndTime]','$_POST[RequestSendTo]','$_POST[Reason]','$_POST[Status]')";
if(!mysql_query($sql, $con))
{
die ('Error, check the SQL Syntax' . mysql_error());
}
echo "Your Booking Sucessfully Added,  <a href = 'CancelStudentBooking.php'>Back</a>."; 
mysql_close($con);
?>
</body>
</html>
