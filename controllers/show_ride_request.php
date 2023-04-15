<?php
    session_start();
    require_once('../models/ride-confirmation.php');
    if(isset($_SESSION['flag']))
	{

?>
<a href="../views/membership.php">Membership</a>
<a href="../views/ride.php">Take a Ride</a>
<a href="../views/admin.php">Admin Panel</a>
<a href="../views/reservation.php">Reservation</a>
<a href="../views/event.php">Event Announcement</a>
<a href="logout.php">Log out</a><br>
<?php
        if(isset($_REQUEST['show_ride_request']))
        {
            $result = showRide();
        }
    }
    else
    {
        echo "invalid request, please <a href='../views/login.html'>login</a> first.";
    }
?>