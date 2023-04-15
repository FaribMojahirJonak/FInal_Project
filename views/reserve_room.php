<head>
	<title>make a Reservation</title>
	<link rel="stylesheet" href="../css/style.css">
</head>

<body>
<?php
	session_start();
    require_once('../models/reservation.php');
	if(isset($_SESSION['flag']))
	{
		
?>

<a href="membership.php">Membership</a>
<a href="ride.php">Take a Ride</a>
<a href="admin.php">Admin Panel</a>
<a href="reservation.php">Reservation</a>
<a href="event.php">Event Announcement</a>
<a href="../controllers/logout.php">Log out</a>

<h1>Make a Reservation</h1>
<form method="POST" action="../controllers/make_reservation_confirmation.php" enctype="">
	<label for="name">Customer Name:</label><input type="text" name="name"><br>
	<label for="email">Customer Email:</label><input type="email" name="email"><br>
	<label for="phone">Customer Phone:</label><input type="tel" name="phone_number"><br>	
	<label for="check_in_date">Check-In Date:</label><input type="date" name="check_in_date"><br>	
	<label for="check_out_date">Check-Out Date:</label><input type="date" name="check_out_date"><br>
	<label for="type">Room Type:</label>
	<select  name="room_type" >
		<option value="single">Single</option>
		<option value="double">Double</option>
		<option value="deluxe">Deluxe</option>
		<option value="suite">Suite</option>
	</select><br>
		
	<input type="submit" name="submit" value="Make Reservation">
</form>

<?php
    }
    else{
        echo "<p>invalid request, please <a href='login.html'>login</a> first.</p>";
    }

?>
</body>