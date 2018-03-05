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
$sql = "INSERT INTO Booking( StaffID, Username, Email, Room, StartDate, EndDate, StartTime, EndTime, Reason, Status)
VALUES 
('$_POST[StaffID]','$_POST[Username]','$_POST[Email]','$_POST[Room]','$_POST[StartDate]','$_POST[EndDate]','$_POST[StartTime]','$_POST[EndTime]','$_POST[Reason]','$_POST[Status]')";
if(!mysql_query($sql, $con))
{
die ('Error, check the SQL Syntax' . mysql_error());
}
echo "Your Booking Was Sucessfully Added,  <a href = 'CancelStaffBooking.php'>Back</a>."; 
mysql_close($con);
?>
</body>
</html>
