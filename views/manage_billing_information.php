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

<h2>Customer Billing Information Management</h2>
<form method="POST" action="billing_confirmation.php" enctype="">
	Customer Name:<input type="text" name="customer-name"><br>
		
	Customer Email:<input type="email" name="customer-email"><br>
		
	Customer Phone:<input type="tel" name="customer-phone"><br>
		
	Reservation ID:<input type="text" name="reservation-id"><br>
		
	Room Type:<input type="text" name="room-type"><br>
		
	Check-In Date:<input type="date" name="check-in-date"><br>
		
	Check-Out Date:<input type="date" name="check-out-date"><br>
		
	Total Amount:<input type="number" name="total-amount"><br>
		
	Payment Method:
	<select name="payment-method">
		<option value="mobile-banking">Mobile Banking</option>
		<option value="internet-banking">internet Banking</option>
		<option value="cash">Cash</option>
	</select><br>

    Payment Status:
	<select name="payment-status">
		<option value="paid">Paid</option>
		<option value="due">Due</option>
	</select><br>
		
	<input type="submit" name="submit" value="Update">
</form>

<?php
    }
    else{
        echo "invalid request, please <a href='../../session_login/index.html'>login</a> first.";
    }

?>