<head>
	<title>Manage User Information</title>
	<link rel="stylesheet" href="../css/style.css">
</head>

<body>
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

<h1 style="text-align:center; margin-top:100px; color:white">Edit User Information</h1>
<form method="POST" action="../controllers/edit_user_confirmation.php" enctype="">
  <label for="id">ID:</label>
  <input type="text" id="id" name="id" value="<?php echo "$id"?>"><br>

  <label for="username">User Name:</label>
  <input type="text" id="username" name="username" value="<?php echo "$username"?>"><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" value="<?php echo "$email"?>"><br>

  <label for="password">Password:</label>
  <input type="text" id="password" name="password" value="<?php echo "$password"?>"><br>	

  <label for="birthday">Birthday:</label>
  <input type="date" id="birthday" name="birthday" value="<?php echo "$birthday"?>"><br>	

  <label for="gender">Gender:</label>
  <select id="gender" name="gender">
    <option value="male" <?php if($gender == "male") echo "selected"; ?>>Male</option>
    <option value="female" <?php if($gender == "female") echo "selected"; ?>>Female</option>
    <option value="others" <?php if($gender == "others") echo "selected"; ?>>Others</option>
  </select><br>

  <label for="blood_group">Blood Group:</label>
  <select id="blood_group" name="blood_group">
    <option value="O+" <?php if($blood_group == "O+") echo "selected"; ?>>O+</option>
    <option value="O-" <?php if($blood_group == "O-") echo "selected"; ?>>O-</option>
    <option value="AB+" <?php if($blood_group == "AB+") echo "selected"; ?>>AB+</option>
    <option value="AB-" <?php if($blood_group == "AB-") echo "selected"; ?>>AB-</option>
    <option value="A+" <?php if($blood_group == "A+") echo "selected"; ?>>A+</option>
    <option value="A-" <?php if($blood_group == "A-") echo "selected"; ?>>A-</option>
    <option value="B+" <?php if($blood_group == "B+") echo "selected"; ?>>B+</option>
    <option value="B-" <?php if($blood_group == "B-") echo "selected"; ?>>B-</option>
  </select><br>

  <input type="submit" name="submit" value="Update">
</form>


<?php
    }
    else{
        echo "invalid request, please <a href='login.html'>login</a> first.";
    }

?>
</body>