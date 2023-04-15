<head>
    <title>Manage Ride Service</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<?php
    session_start();
    if(isset($_SESSION['flag']))
	{
        $id = $_REQUEST['id'];
        $service = $_REQUEST['service'];
        $phone_number = $_REQUEST['phone_number'];
        $vehicle = $_REQUEST['vehicle'];
        $location = $_REQUEST['location'];
        $status = $_REQUEST['status'];
?>
<a href="membership.php">Membership</a>
<a href="ride.php">Take a Ride</a>
<a href="admin.php">Admin Panel</a>
<a href="reservation.php">Reservation</a>
<a href="event.php">Event Announcement</a>
<a href="../controllers/logout.php">Log out</a><br>

<h1 style="text-align:center; margin-top:100px; color:white">Manage Ride Request</h1>
<form method="POST" action="../controllers/update_ride_confirmation.php" enctype="" onsubmit="updateRide()">   
    <label for="id">ID:</label> <input type="num" name="id" value="<?php echo "$id"?>" id="id"/><br>
    <label for="service">Select a Service:</label>
    <select name="service" value="<?php echo "$service"?>" id="name">
        <option value="drop">Drop Off</option>
        <option value="pick">Pick Up</option>
    </select><br>
    <label for="number">Contact Number:</label><input type="tel" name="phone_number" value="<?php echo "$phone_number"?>" id="number" /><br>
    <label for="vehicle">Select a Vehicle:</label>
    <select name="vehicle" value="<?php echo "$vehicle"?>">
        <option value="car">Car</option>
        <option value="coaster">Coaster</option>
        <option value="bike">Bike</option>
    </select><br>
    <label for="location">Location:</label><input type="textarea" name="location" value="<?php echo "$location"?>" id="location"/><br>
    <label for="status">Status:</label>
    <select name="status" value="<?php echo "$status"?>">
        <option value="confirm">Confirm</option>
        <option value="Cancel">Cancel</option>
    </select><br>
    <input type="submit" name="submit" value="Update" />
</form>
<?php
    }
    else
    {
        echo "invalid request, please <a href='login.html'>login</a> first.";
    }
?>
</body>

<script>
	function updateRide()
	{
		let id = document.getElementById('id').value;
		let name = document.getElementById('name').value;
		let number = document.getElementById('number').value;
        let location = document.getElementById('location').value;
    	
		if(id == "")
		{
			alert("Please fill up id");
		}
		else if(name == "")
		{
			alert("Please fill up name");
		}
    	else if(number == "")
		{
			alert("Please fill up phone number");
		}
    	else if(location == "")
		{
			alert("Please fill up location");
		}
	}
</script>