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
<a href="../controllers/logout.php">Log out</a><br><br>

<a href="reserve_room.php"> Make a reservation</a>


<?php
        
    }
    else{
        echo "invalid request, please <a href='login.html'>login</a> first.";
    }

?>