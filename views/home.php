<?php 
    session_start();
    if(isset($_SESSION['flag'])){
?>
<head>
    <title>Home</title>
    <style>
        a
        {
            color: white;
        }
        body
		{
			background-image: url("../image/hotel.jpg");
			background-repeat: no-repeat;
  			background-size: cover;
		}
    </style>
</head>
<body>
<a href="membership.php">Membership</a>
<a href="ride.php">Take a Ride</a>
<a href="admin.php">Admin Panel</a>
<a href="reservation.php">Reservation</a>
<a href="event.php">Event Announcement</a>
<a href="../controllers/logout.php">Log out</a>
</body>


<?php
    }
    else{
        echo "invalid request, please <a href='index.html'>login</a> first.";
    }

?>

