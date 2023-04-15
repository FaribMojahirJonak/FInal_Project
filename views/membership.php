<?php 
    session_start();
    if(isset($_SESSION['flag'])){
?>

<a href="membership.php">Membership</a>
<a href="ride.php">Take a Ride</a>
<a href="admin.php">Admin Panel</a>
<a href="reservation.php">Reservation</a>
<a href="event.php">Event Announcement</a>
<a href="../controllers/logout.php">Log out</a>

<h1>Buy Premium Membership</h1>

<form method="POST" action="../controllers/membership_successfull.php" enctype="">
    Membership Type
    <select name="membership_type">
        <option value="silver_memebrship">Silver Membership</option>
        <option value="gold_membership">Gold Membeship</option>
        <option value="platinum_membership">Platinum Membership</option>
    </select><br>
    Membership Length:
    <select name="membership_length">
        <option value="6_month">6 Month</option>
        <option value="12_month">12 Month</option>
        <option value="18_month">18 Month</option>
    </select><br>
    <input type="submit" name="submit" value="Buy Membership" />
 </form>

 <?php
    }
    else{
        echo "invalid request, please <a href='login.html'>login</a> first.";
    }

?>


