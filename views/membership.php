<?php 
    session_start();
    if(isset($_SESSION['flag'])){
?>

<head>
    <title>buy Premium Membership</title>
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
        h1
        {
            color: white;
        }
        label
        {
            color: white;
        }
        form
		{
			position: relative;
			margin: 10px 500px;
		}
        input 
		{
			border: 2px solid white;
  			border-radius: 4px;
			height: 35px;
			width: 150px;
			margin: 5px;
			background: transparent;
			color: white;
  		}
          select 
		{
			border: 2px solid white;
  			border-radius: 4px;
			height: 35px;
			width: 200px;
			margin: 5px;
			background: transparent;
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

<h1 style="text-align: center; margin-top: 100px">Buy Premium Membership</h1>

<form method="POST" action="../controllers/membership_successfull.php" enctype="">
    <label for="tyle">Membership Type</label>
    <select name="membership_type">
        <option value="silver_memebrship">Silver Membership</option>
        <option value="gold_membership">Gold Membeship</option>
        <option value="platinum_membership">Platinum Membership</option>
    </select><br>
    <label for="length">Membership Length:</label>
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
        echo "<p>invalid request, please <a href='login.html'>login</a> first.</p>";
    }

?>
</body>
 


