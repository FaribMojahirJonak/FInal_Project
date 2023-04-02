<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>

<a href="../membership/membership.php">Membership</a>
<a href="../ride/ride.php">Take a Ride</a>
<a href="admin.php">Admin Panel</a>
<a href="../setting/setting.php">Settings</a>
<a href="../event_announcement/event.php">Event Announcement</a>
<a href="../../session_login/logout.php">Log out</a>

<h1>Manage Room Reservations</h1>
<form method="POST" action="reservation_confirmation.php" enctype="">
	Reservation ID:<input type="text" id="reservation-id" name="reservation-id"><br>
	
	Room Type:<input type="text" name="room-type"><br>
		
	Check-In Date:<input type="date" name="check-in-date"><br>
		
	Check-Out Date:<input type="date" name="check-out-date"><br>
		
	Customer Name:<input type="text" name="customer-name"><br>
		
	Customer Email:<input type="email" name="customer-email"><br>
		
	Customer Phone:<input type="tel" name="customer-phone"><br>
		
	Reservation Status:
	<select  name="reservation-status">
		<option value="confirmed">Confirmed</option>
		<option value="pending">Pending</option>
		<option value="cancelled">Cancelled</option>
	</select><br>
		
	<input type="submit" name="submit" value="Update">
</form>

<?php
    }
    else{
        echo "invalid request, please <a href='../../session_login/index.html'>login</a> first.";
    }

?>