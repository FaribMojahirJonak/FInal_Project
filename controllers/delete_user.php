<?php
	session_start();
    require_once('../models/userModel.php');
	if(isset($_SESSION['flag']))
	{
		$id = $_REQUEST['id'];

        $status = deleteUser($id);
        if($status){
            echo "User has been deleted!<br>";
        }else{
            echo "please try again";
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
        echo "invalid request, please <a href='../../session_login/index.html'>login</a> first.";
    }

?>