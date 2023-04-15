<head>
	<title>Manage Ride Service</title>
	<link rel="stylesheet" href="../css/style.css">
</head>

<body>
<?php
    session_start();
    if(isset($_SESSION['flag']))
	{
?>

<a href="membership.php">Membership</a>
<a href="ride.php">Take a Ride</a>
<a href="admin.php">Admin Panel</a>
<a href="reservation.php">Reservation</a>
<a href="event.php">Event Announcement</a>
<a href="../controllers/logout.php">Log out</a><br>
<h1 style="text-align:center; margin-top:100px; color:white">Manage Ride Service</h1>
<form action='../controllers/show_ride_request.php' method='post'>
 	<input type='submit' name='show_ride_request' value='Show Ride Request' />
</form>

<?php
	}
	else
	{
		echo "invalid request, please <a href='login.html'>login</a> first.";
	}
?>



</body>