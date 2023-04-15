<?php
    session_start();
    if(isset($_SESSION['flag'])){
?>
<head>
    <style>
        body
        {
            background-image: url("../image/hotel.jpg");
        }
        a
		{
			color: white;
		}
        p
		{
			color: white;
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


<h1 style="margin-top:100px; color:white">Welcome Admin</h1>  
<a href="show_user_information.php">Manage User Account</a><br>
<a href="show_reservation.php">Manage Reservation</a><br>
<a href="show_billing_info.php">Manage Biiling Information</a><br>
<a href="manage_ride_service.php">Manage Ride Service</a>

<?php
    }
    else{
        echo "<p>invalid request, please <a href='login.html'>login</a> first.</p>";
    }

?>
</body>

