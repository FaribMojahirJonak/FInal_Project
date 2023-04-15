<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
		$id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
        $phone_number = $_REQUEST['phone_number'];
        $check_in_date = $_REQUEST['check_in_date'];
        $check_out_date = $_REQUEST['check_out_date'];
		$room_type = $_REQUEST['room_type'];
        $status = $_REQUEST['status'];
?>

<a href="membership.php">Membership</a>
<a href="ride.php">Take a Ride</a>
<a href="admin.php">Admin Panel</a>
<a href="reservation.php">Reservation</a>
<a href="event.php">Event Announcement</a>
<a href="../controllers/logout.php">Log out</a>

<h1>Manage Room Reservations</h1>
<form method="POST" action="../controllers/reservation_confirmation.php" enctype="">
	Reservation ID:<input type="text" name="id" value="<?php echo "$id"?>"><br>
	Customer Name:<input type="text" name="name" value="<?php echo "$name"?>"><br>
	Customer Email:<input type="email" name="email" value="<?php echo "$email"?>"><br>
	Customer Phone:<input type="tel" name="phone_number" value="<?php echo "$phone_number"?>"><br>	
	Check-In Date:<input type="date" name="check_in_date" value="<?php echo "$check_in_date"?>"><br>	
	Check-Out Date:<input type="date" name="check_out_date" value="<?php echo "$check_out_date"?>"><br>
	Room Type:
	<select  name="room_type" value="<?php echo "$room_type"?>" >
		<option value="single">Single</option>
		<option value="double">Double</option>
		<option value="deluxe">Deluxe</option>
		<option value="suite">Suite</option>
	</select><br>	
	Reservation Status:
	<select  name="status" value="<?php echo "$status"?>" >
		<option value="confirmed">Confirmed</option>
		<option value="cancelled">Cancelled</option>
	</select><br>
		
	<input type="submit" name="submit" value="Update">
</form>

<?php
    }
    else{
        echo "invalid request, please <a href='login.html'>login</a> first.";
    }

?>