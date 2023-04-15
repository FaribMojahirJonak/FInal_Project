<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
		$id = $_REQUEST['id'];
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $birthday = $_REQUEST['birthday'];
		$gender = $_REQUEST['gender'];
        $blood_group = $_REQUEST['blood_group'];
?>

<a href="membership.php">Membership</a>
<a href="ride.php">Take a Ride</a>
<a href="admin.php">Admin Panel</a>
<a href="reservation.php">Reservation</a>
<a href="event.php">Event Announcement</a>
<a href="../controllers/logout.php">Log out</a>

<h1>Edit User Information</h1>
<form method="POST" action="../controllers/edit_user_confirmation.php" enctype="">
	ID:<input type="text" name="id" value="<?php echo "$id"?>"><br>
	User Name:<input type="text" name="username" value="<?php echo "$username"?>"><br>
	Email:<input type="email" name="email" value="<?php echo "$email"?>"><br>
	Password:<input type="text" name="password" value="<?php echo "$password"?>"><br>	
	Birthday:<input type="date" name="birthday" value="<?php echo "$birthday"?>"><br>	
	Gender:
	<select  name="gender" value="<?php echo "$gender"?>" >
		<option value="male">Male</option>
		<option value="female">Female</option>
		<option value="others">Others</option>
		
	</select><br>
	Blood Group:
	<select  name="blood_group" value="<?php echo "$blood_group"?>" >
		<option value="O+">O+</option>
		<option value="O-">O-</option>
		<option value="AB+">AB+</option>
		<option value="AB-">AB-</option>
		<option value="A+">A+</option>
		<option value="A-">A-</option>
		<option value="B+">B+</option>
		<option value="B-">B-</option>
	</select><br>	
	<input type="submit" name="submit" value="Update">
</form>

<?php
    }
    else{
        echo "invalid request, please <a href='../../session_login/index.html'>login</a> first.";
    }

?>