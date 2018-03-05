<table width="100%" border="0" align="center">

<tr>
<th> <a href="Staffpage.php"><img src = "logo.png" alt = "IBTE Logo" width = "200" height = "100"/> </th></a>
<th> IBTE JEFRI BOLKIAH CAMPUS RESOURCES ONLINE BOOKING </th>
<th> <a href = "logout.php"> Logout </th>
<script type = "text/javascript">
	window.history.forward();
	function noBack() { window.history.forward();}
	</script>

</table>
  
<!DOCTYPE html>
<style type="text/css"> 

 
#navbar ul { 
	margin: 0; 
	padding: 5px; 
	list-style-type: none; 
	text-align: center; 
	background-color: #000; 
	} 
 
#navbar ul li {  
	display: inline; 
	} 
 
#navbar ul li a { 
	text-decoration: none; 
	padding: .2em 1em; 
	color: #fff; 
	background-color: #000; 
	} 
 
#navbar ul li a:hover { 
	color: #000; 
	background-color: #3CB371;
	} 
.Words {
	font-family: "Default Font";
}
WordWord {
	font-size: medium;
}
 
 
body {
	background-image: url(grey.jpeg);
	background-color: #FFF;
}

<!--End Of Navigation-->
</style> 
</head> 
<body class="Words"> 
<div id="navbar"> 
  <ul> 
	<li><a href="Staffpage.php">HOME</a></li> 
	
	
	<div class="dropdown">
	<li><button class="dropbtn">RESOURCES</button> </li>
<div class="dropdown-content">
<a href="StafflistResources.php">RESOURCES CATEGORY</a>

</div>
</div>

	<div class="dropdown">
	<li><button class="dropbtn">BOOKING</button> </li>
<div class="dropdown-content">
<a href="StaffScheduleBooking.php">SCHEDULE BOOKING</a>
<a href="StaffBooking.php">BOOK RESOURCES</a>
<a href="StaffViewBooking.php">VIEW BOOKING</a>
</div>
</div>

	<li><a href="StaffViewStudentReuqest.php">REQUEST</a></li> 
  </ul> 
</div>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
    background-color: #000;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>
</head>


<pre>   	<MARQUEE BEHAVIOR=alternate><b>Hi Staff, Welcome Back</MARQUEE>
<br>
	
	<b>Booking</b>


 	<a href="StaffScheduleBooking.php"><img src="Booking.png" width="50" height="50" alt="Bookinglogo"></a>  <strong><a href="StaffScheduleBooking.php"style="text-decoration: none;color: #000000;">Schedule Booking </strong></a>          			 	<a href="StaffBooking.php"><img src="Booking.png" width="50" height="50" alt="Bookinglogo"></a> <strong>  <a href="StaffBooking.php"style="text-decoration: none;color: #000000;">Book Resources </strong>                                 </a><a href="StaffViewBooking.php"><img src="Booking.png" width="50" height="50" alt="Bookinglogo"></a> <strong>  <a href="StaffViewBooking.php"style="text-decoration: none;color: #000000;">View Booking</strong></a><a href="#.php"style="text-decoration: none;color: #000000;">			

   
 

	<b>Resources</b>


 	<a href="StafflistResources.php"><img src="Door.png" width="50" height="50" alt="ResourcesLogo"></a> <strong> <a href="StafflistResources.php"  style="text-decoration: none;color: #000000;">Resources Category  </strong></a>					
	


	<b>Request</b> 

   	<a href="StaffViewStudentReuqest.php"></a><a href="StaffViewStudentReuqest.php"><img src="admin1.png" width="60" height="60"></a> <a href="StaffViewStudentReuqest.php" style="text-decoration: none;color: #000000;"> <b>Student Request </b></a>                                         </pre> 
</body> 
</html>