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
$sql = "INSERT INTO Student(StudentID, Username, Password, Firstname, Lastname, Email, PhoneNo, Course, GroupCode)
VALUES 
('$_POST[StudentID]','$_POST[Username]','$_POST[Password]','$_POST[Firstname]','$_POST[Lastname]','$_POST[Email]', '$_POST[PhoneNo]', '$_POST[Course]', '$_POST[GroupCode]')";
if(!mysql_query($sql, $con))
{
die ('Error, check the SQL Syntax' . mysql_error());
}
echo "ONE(1) record Sucessfully Regsiter,  <a href = 'Studentcategory.php'>Back</a>."; 
mysql_close($con);
?>
</body>
</html>
