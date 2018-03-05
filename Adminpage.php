<table width="100%" border="0" align="center">

<tr>
<th> <a href="Adminpage.php"><img src = "logo.png" alt = "IBTE Logo" width = "200" height = "100"/> </th></a>
<th> IBTE JEFRI BOLKIAH CAMPUS RESOURCES ONLINE BOOKING </th>
<th> <a href = "logout.php"> Logout </th>

</table>

<style type="text/css">
body {
	background-color: #CCC;
	margin-bottom: 60px;
	background-image: url(grey.jpeg);
}
</style>
<body onload = "noBack();"
	onpagehow "if (event.persisted) noBack();" onunload = "">
	
	<script type = "text/javascript">
	window.history.forward();
	function noBack() { window.history.forward();}
	</script>
  
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
	font-family: font default;
}
WordWord {
	font-size: medium;
}
 
 



<!--End Of Navigation-->
</style> 
</head> 
<body class="Words"> 
<div id="navbar"> 
  <ul> 
	<li><a href="Adminpage.php"  >HOME</a></li> 
	
	<div class="dropdown">
 <li><button class="dropbtn">USERS</button> </li>
  <div class="dropdown-content">
    <a href="StaffRegistration.php">REGISTRATION STAFF</a>
    <a href="StudentRegistration.php">REGISTRATION STUDENT</a>
    <a href="UsersDetails.php">USER DETAILS</a>
	</div>
	</div>
	
	<div class="dropdown">
	<li><button class="dropbtn">RESOURCES</button> </li>
<div class="dropdown-content">
<a href="ResourcesCategory.php">RESOURCES CATEGORY </a>
<a href="EditResources.php">EDIT RESOURCES</a>
</div>
</div>

	<div class="dropdown">
	<li><button class="dropbtn">BOOKING</button> </li>
<div class="dropdown-content">
<a href="ViewBooking.php">SCHEDULE BOOKING</a>
<a href="BookingRequest.php">BOOKING REQUEST</a>
</div>
</div>

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

<pre><strong>  	<MARQUEE BEHAVIOR=alternate>Hi Admin, Welcome Back</MARQUEE>
</strong><strong></strong>
 
 <strong>	 Users </strong>


  	 <a href="StaffRegistration.php"><img src="logostaff.png" width="50" height="50" alt="StaffLogo"></a> <strong><a href = "StaffRegistration.php" style="text-decoration: none;color: #000000;"> Registration Staff </strong>  				 	<a href="StudentRegistration.php"><img src="logostaff.png" width="50" height="50" alt="StaffLogo"></a> <strong> <a href="StudentRegistration.php"  style="text-decoration: none;color: #000000;"> Registration Student</strong> </a>  			 <a href="UsersDetails.php"><img src="logostaff.png" width="50" height="50" alt="StaffLogo"></a> <strong> <a href="UsersDetails.php" style="text-decoration: none;color: #000000;" >Users Details</strong> </a>

 
 
<strong> 	Resources</strong>


 	 <a href="ResourcesCategory.php"><img src="Door.png" width="50" height="50" alt="ResourcesLogo"></a> <strong>  <a href="ResourcesCategory.php"style="text-decoration: none;color: #000000;">Resources Category </strong></a>                              	 <a href="EditResources.php"><img src="Door.png" width="50" height="50" alt="ResourcesLogo"></a> <strong>  <a href="EditResources.php"style="text-decoration: none;color: #000000;">Edit Resources </strong></a>
<strong>	

       Booking
</strong>

 	<a href="ViewBooking.php"><img src="Booking.png" width="50" height="50" alt="Bookinglogo"></a>  <strong><a href="ViewBooking.php"style="text-decoration: none;color: #000000;">Schedule Booking </strong></a>          			 	<a href="BookingRequest.php"><img src="Booking.png" width="50" height="50" alt="Bookinglogo"></a> <strong>  <a href="BookingRequest.php"style="text-decoration: none;color: #000000;">Booking Request </strong></pre> 
</body> 
</html>