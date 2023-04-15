<head>
    <title>Show User Information</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<?php
	session_start();
    require_once('../models/userModel.php');
	if(isset($_SESSION['flag'])){
?>
<a href="membership.php">Membership</a>
<a href="ride.php">Take a Ride</a>
<a href="admin.php">Admin Panel</a>
<a href="reservation.php">Reservation</a>
<a href="event.php">Event Announcement</a>
<a href="../controllers/logout.php">Log out</a><br><br>
<h2 style="text-align:center; margin-top:100px; color:white">Show user information</h2>
<form action="show_user_information.php" method="post">
    <input type="submit" name="submit" value="Show User Information" />
</form>
<?php
        if(isset($_REQUEST['submit']))
        {
            $result = showInfo();
        }
    }
    else{
        echo "<p>invalid request, please <a href='login.html'>login</a> first.</p>";
    }

?>
</body>