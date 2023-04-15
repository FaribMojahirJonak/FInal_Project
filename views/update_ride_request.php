<?php
    session_start();
    if(isset($_SESSION['flag']))
	{
        $id = $_REQUEST['id'];
        $service = $_REQUEST['service'];
        $phone_number = $_REQUEST['phone_number'];
        $vehicle = $_REQUEST['vehicle'];
        $location = $_REQUEST['location'];
        $status = $_REQUEST['status'];
?>
<a href="membership.php">Membership</a>
<a href="ride.php">Take a Ride</a>
<a href="admin.php">Admin Panel</a>
<a href="reservation.php">Reservation</a>
<a href="event.php">Event Announcement</a>
<a href="../controllers/logout.php">Log out</a><br>
<form method="POST" action="../controllers/update_ride_confirmation.php" enctype="">   
    ID: <input type="num" name="id" value="<?php echo "$id"?>" /><br>
    Select a Service:
    <select name="service" value="<?php echo "$service"?>">
        <option value="drop">Drop Off</option>
        <option value="pick">Pick Up</option>
    </select><br>
    Contact Number:<input type="tel" name="phone_number" value="<?php echo "$phone_number"?>" /><br>
    Select a Vehicle:
    <select name="vehicle" value="<?php echo "$vehicle"?>">
        <option value="car">Car</option>
        <option value="coaster">Coaster</option>
        <option value="bike">Bike</option>
    </select><br>
    Location:<input type="textarea" name="location" value="<?php echo "$location"?>"/><br>
    Status:
    <select name="status" value="<?php echo "$status"?>">
        <option value="confirm">Confirm</option>
        <option value="Cancel">Cancel</option>
    </select><br>
    <input type="submit" name="submit" value="Update" />
</form>
<?php
    }
    else
    {
        echo "invalid request, please <a href='login.html'>login</a> first.";
    }
?>