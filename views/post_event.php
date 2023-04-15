<?php 
    session_start();
    if(isset($_SESSION['flag'])){
?>
<a href="membership.php">Membership</a>
<a href="ride.php">Take a Ride</a>
<a href="admin.php">Admin Panel</a>
<a href="reservation.php">Reservation</a>
<a href="event.php">Event Announcement</a>
<a href="../controllers/logout.php">Log out</a><br>
<h1>Post an Event</h1>
<form method="post" action="../controllers/post_event_confirmation.php">
    <p>Select an event</p>
    <select name="type" id="">
        <option value="bbq">bbq</option>
        <option value="party">party</option>
        <option value="tour">tour</option>
    </select><br>
    <p>Select date</p>
    <input type="date" name="date" value="" /><br>
    <p>Select time</p>
    <input type="time" name="time" value="" /><br>
    <input type="submit" name="post_event" value="post event" />
</form>

<?php
    }
    else{
        echo "invalid request, please <a href='login.html'>login</a> first.";
    }

?>

