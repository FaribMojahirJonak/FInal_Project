<?php 
    session_start();
    if(isset($_SESSION['flag'])){
?>

<a href="membership.php">Membership</a>
<a href="ride.php">Take a Ride</a>
<a href="admin.php">Admin Panel</a>
<a href="setting.php">Settings</a>
<a href="event.php">Event Announcement</a>
<a href="../controllers/logout.php">Log out</a>

<h2> Select an event</h2>
<a href="join_event.php">Join an Event</a>
<a href="post_event.php">post an Event</a>


<?php
    }
    else{
        echo "invalid request, please <a href='../../session_login/index.html'>login</a> first.";
    }

?>