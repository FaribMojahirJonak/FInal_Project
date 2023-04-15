<?php 
    session_start();
    require_once('../models/membership.php');
    if(isset($_SESSION['flag']))
    {
        
?>

<head>
    <title>Membership</title>
    <style>
        body
		{
			background-image: url("../image/hotel.jpg");
			background-repeat: no-repeat;
  			background-size: cover;
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
<a href="../views/membership.php">Membership</a>
<a href="../views/ride.php">Take a Ride</a>
<a href="../views/admin.php">Admin Panel</a>
<a href="../views/reservation.php">Reservation</a>
<a href="../views/event.php">Event Announcement</a>
<a href="logout.php">Log out</a><br>


<?php
        if(isset($_REQUEST['submit']))
        {
            $membership_type = $_REQUEST['membership_type'];
            $membership_length = $_REQUEST['membership_length'];
            $membership = ['membership_type' => $membership_type, 'membership_length' => $membership_length];
            $status = membership($membership);
            If($status)
            {
                echo "<p>Membership request has been submitted.</P>";
            }
            else
            {
                echo "<p>error! please try again!</p>";
            }
        }
    }
    else{
        echo "<p>invalid request, please <a href='../views/login.html'>login</a> first.</p>";
    }

?>
</body>