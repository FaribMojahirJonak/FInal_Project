<?php 
    session_start();
    require_once('../models/membership.php');
    if(isset($_SESSION['flag'])){
        if(isset($_REQUEST['submit']))
            {
                $membership_type = $_REQUEST['membership_type'];
                $membership_length = $_REQUEST['membership_length'];
                $membership = ['membership_type' => $membership_type, 'membership_length' => $membership_length];
                $status = membership($membership);
                If($status)
                {
                    echo "membership request has been submitted.";
                }
                else
                {
                    echo "error! please try again!";
                }
            }
?>

<a href="../views/membership.php">Membership</a>
<a href="../views/ride.php">Take a Ride</a>
<a href="../views/admin.php">Admin Panel</a>
<a href="../views/reservation.php">Reservation</a>
<a href="../views/event.php">Event Announcement</a>
<a href="logout.php">Log out</a><br>


<?php
    }
    else{
        echo "invalid request, please <a href='../views/login.html'>login</a> first.";
    }

?>