
<?php
//This program is used to read records from student table and display in the browser
$con = mysql_connect('localhost', 'root', 'mysql');
if(!$con)
{
die('Could not Connect Sucessfully' . mysql_error());
}
echo '' . "<br>";
mysql_select_db("Online");
$result = mysql_query("SELECT * FROM Booking WHERE StartDate = '2018-02-00'. AND StartTime = '13:10:00'. AND Room = 'Surau'. AND Department = 'SICT Department");


$result = mysql_query("SELECT * FROM Booking WHERE StartTime = '13:10:00'");


echo "<table width=100% border=2 align=center> 
<center><b>Schedule Booking</b></enter></center>
<br><br><br>
<b>Monday<b>
<br> <br>
<tr>
<th>7.00 AM - 8.00 AM</th>
<th>9.00 AM - 10.00 AM</th>
<th>11.00 AM - 12.00 PM </th>
<th>1.00 PM - 2.00 PM</th>  
<th>3.00 PM - 4.00 PM</th>
<th>5.00 PM - 5.30 PM</th>

</tr>";

while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['BookingID'] . "</td>";
echo "<td>" . $row['UserID'] . "</td>";
echo "<td>" . $row['Username'] . "</td>";
echo "<td>" . $row['Dep'] . "</td>";
echo "<td>" . $row['Room'] . "</td>";
echo "<td>" . $row['StartDate'] . "</td>";
echo "<td>" . $row['StartTime'] . "</td>";


echo "</tr>";
}

$result = mysql_query("SELECT * FROM Booking WHERE StartDate = '2018-02-00'. AND StartTime = '13:00:00'. AND Room = 'Surau'. AND Department = 'SICT Department");





echo "<table width=100% border=2 align=center> 
<center><b>Schedule Booking</b></enter></center>
<br><br><br>
<b>Monday<b>
<br> <br>
<tr>
<th>7.00 AM - 8.00 AM</th>
<th>9.00 AM - 10.00 AM</th>
<th>11.00 AM - 12.00 PM </th>
<th>1.00 PM - 2.00 PM</th>  
<th>3.00 PM - 4.00 PM</th>
<th>5.00 PM - 5.30 PM</th>

</tr>";

while($row=mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['BookingID'] . "</td>";
echo "<td>" . $row['UserID'] . "</td>";
echo "<td>" . $row['Username'] . "</td>";
echo "<td>" . $row['Dep'] . "</td>";
echo "<td>" . $row['Room'] . "</td>";
echo "<td>" . $row['StartDate'] . "</td>";
echo "<td>" . $row['StartTime'] . "</td>";


echo "</tr>";
}



mysql_close($con);
?>
<br> <br>
<center>
<input type="button" onClick="location = 'SearchConfirmationAdminStaffBookingRequest.php'" value="Search & Confirmation">
<button onClick="window.print()">Print </button></center>



