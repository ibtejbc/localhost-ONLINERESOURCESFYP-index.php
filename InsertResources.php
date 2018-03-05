
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
$sql = "INSERT INTO ListResources(ImageRoom, RoomID, Room, Department, LevelFloor, GroupCode, Course, StaffinCharge)
VALUES 
('$_POST[ImageRoom]','$_POST[RoomID]','$_POST[Room]','$_POST[Department]','$_POST[LevelFloor]','$_POST[GroupCode]','$_POST[Course]','$_POST[StaffinCharge]')";
if(!mysql_query($sql, $con))
{
die ('Error, check the SQL Syntax' . mysql_error());
}
echo "ONE(1) Resources Sucessfully Added,  <a href = 'ResourcesCategory.php'>Back</a>."; 
mysql_close($con);
?>
</body>
</html>
