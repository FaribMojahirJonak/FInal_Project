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


<h1>Welcome Admin</h1>
<a href="manage_room_inventory.php">Manage Room Inventory</a><br>
<a href="user_information.php">Manage User Account</a><br>
<a href="reservation.php">Manage Reservation</a><br>
<a href="billing_information.php">Manage Biiling Information</a>

<?php
    }
    else{
        echo "invalid request, please <a href='../../session_login/index.html'>login</a> first.";
    }

?>