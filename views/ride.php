<?php
    session_start();
    if(isset($_SESSION['flag']))
    {
?>

<head>
    <title>Take a Ride</title>
    <style>
        input 
		{
			border: 2px solid white;
  			border-radius: 4px;
			height: 35px;
			width: 200px;
			margin: 5px;
			background: transparent;
			color: white;
  		}
		select 
		{
			border: 2px solid white;
  			border-radius: 4px;
			height: 35px;
			width: 100px;
			margin: 5px;
			background: transparent;
			color: white;
		}
		form
		{
			position: relative;
			margin: 10px 500px;
		}
		body
		{
			background-image: url("../image/hotel.jpg");
			background-repeat: no-repeat;
  			background-size: cover;
		}
		label
		{
			color: white;
		}
		a
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

<h1>Take a ride service.</h1>
<form method="POST" action="../controllers/ride_confirmation.php" enctype="" onsubmit="ride()">   
    <label for="service">Select a Service:</label>
    <select name="service">
        <option value="drop">Drop Off</option>
        <option value="pick">Pick Up</option>
    </select><br>
    <label for="number">Contact Number:</label><input type="tel" name="phone_number" id="phone_number"/><br>
    <label for="vehicle">Select a Vehicle:</label>
    <select name="vehicle">
        <option value="car">Car</option>
        <option value="coaster">Coaster</option>
        <option value="bike">Bike</option>
    </select><br>
    <label for="lacation">Location:</label><input type="textarea" name="location" id="location"/><br>
    <input type="submit" name="submit" value="Send Ride" />
</form>

<?php
    }
    else{
        echo "invalid request, please <a href='login.html'>login</a> first.";
    }

?>
</body>


<script>
	function ride()
	{
		let number = document.getElementById('phone_number').value;
		let location = document.getElementById('location').value;
		if(number == "")
		{
			alert("Please provide your phone number");
		}
		else if(location == "")
		{
			alert("Please provide your location");
		}
	}
</script>



