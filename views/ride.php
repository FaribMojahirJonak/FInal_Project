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
<a href="../controllers/logout.php">Log out</a>

<h1>Take a ride service.</h1>
<form method="POST" action="../controllers/ride_confirmation.php" enctype="">   
    Select a Service:
    <select name="service">
        <option value="drop">Drop Off</option>
        <option value="pick">Pick Up</option>
    </select><br>
    Contact Number:<input type="tel" name="phone_number" /><br>
    Select a Vehicle:
    <select name="vehicle">
        <option value="car">Car</option>
        <option value="coaster">Coaster</option>
        <option value="bike">Bike</option>
    </select><br>
    Location:<input type="textarea" name="location" /><br>
    <input type="submit" name="submit" value="Send Ride" />
</form>

<?php
    }
    else{
        echo "invalid request, please <a href='../../session_login/index.html'>login</a> first.";
    }

?>


