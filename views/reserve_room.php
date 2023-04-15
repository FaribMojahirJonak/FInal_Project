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
	Customer Name:<input type="text" name="name"><br>
	Customer Email:<input type="email" name="email"><br>
	Customer Phone:<input type="tel" name="phone_number"><br>	
	Check-In Date:<input type="date" name="check_in_date"><br>	
	Check-Out Date:<input type="date" name="check_out_date"><br>
	Room Type:
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
        echo "invalid request, please <a href='login.html'>login</a> first.";
    }

?>