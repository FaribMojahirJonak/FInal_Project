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

<h1>Add Room</h1>
<form method="POST" action="../controllers/manage_room_inventory_updated.php" enctype="">
	Room Type:
	<select>
		<option value="single">Single</option>
		<option value="double">Double</option>
		<option value="suite">Suite</option>
		<option value="deluxe">Deluxe</option>
	</select><br>
	Room Number:<input type="number" name="room_number"><br>
	Room Price:<input type="number" name="room_rate"><br>
		
	<input type="submit" name="add_room" value="Add Room">
</form>

<h1>Delete Room</h1>
<form method="POST" action="room_inventory_updated.php" enctype="">
	Room Type:
	<select>
		<option value="single">Single</option>
		<option value="double">Double</option>
		<option value="suite">Suite</option>
		<option value="deluxe">Deluxe</option>
	</select><br>
	
		
	Room Price:<input type="number" name="room_rate"><br><br>
		
	<input type="submit" name="add_room" value="Add Room">
</form>

<?php
    }
    else{
        echo "invalid request, please <a href='login.html'>login</a> first.";
    }

?>