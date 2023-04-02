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

<h1>Edit User Information</h1>
<form method="POST" action="information_confirmation.php" enctype="">
	User Name:<input type="text" name="username"><br><br>
		
    User Email:<input type="email" name="email"><br><br>
	
	User Phone:<input type="tel" name="phone"><br><br>
		
	User Access Level:
	<select name="user-access-level">
		<option value="1">Administrator</option>
		<option value="2">Manager</option>
		<option value="3">Staff</option>
        <option value="4">Customer</option>
	</select><br><br>
		
	<input type="submit" name="submit" value="Save">
</form>

<?php
    }
    else{
        echo "invalid request, please <a href='../../session_login/index.html'>login</a> first.";
    }

?>