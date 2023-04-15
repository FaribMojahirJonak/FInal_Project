<head>
	<title>Manage Reservation</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
		$id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
        $phone_number = $_REQUEST['phone_number'];
        $check_in_date = $_REQUEST['check_in_date'];
        $check_out_date = $_REQUEST['check_out_date'];
		$room_type = $_REQUEST['room_type'];
        $status = $_REQUEST['status'];
?>

<a href="membership.php">Membership</a>
<a href="ride.php">Take a Ride</a>
<a href="admin.php">Admin Panel</a>
<a href="reservation.php">Reservation</a>
<a href="event.php">Event Announcement</a>
<a href="../controllers/logout.php">Log out</a>

<h1 style="text-align:center; margin-top:100px; color:white">Manage Room Reservations</h1>
<form method="POST" action="../controllers/reservation_confirmation.php" enctype="" onsubmit="reservation()">
	<label for="id">Reservation ID:</label><input type="text" name="id" value="<?php echo "$id"?>" id="id"><br>
	<label for="name">Customer Name:</label><input type="text" name="name" value="<?php echo "$name"?>" id="name"><br>
	<label for="email">Customer Email:</label><input type="email" name="email" value="<?php echo "$email"?>" id="email"><br>
	<label for="number">Customer Phone:</label><input type="tel" name="phone_number" value="<?php echo "$phone_number"?>" id="number"><br>	
	<label for="check_in_date">Check-In Date:</label><input type="date" name="check_in_date" value="<?php echo "$check_in_date"?>" id="check_in_date"><br>	
	<label for="check_out_date">Check-Out Date:</label><input type="date" name="check_out_date" value="<?php echo "$check_out_date"?>" id="check_out_date"><br>
	<label for="room_type">Room Type:</label>
	<select  name="room_type" value="<?php echo "$room_type"?>" id="room_type">
		<option value="single">Single</option>
		<option value="double">Double</option>
		<option value="deluxe">Deluxe</option>
		<option value="suite">Suite</option>
	</select><br>	
	<label for="status">Reservation Status:</label>
	<select  name="status" value="<?php echo "$status"?>" id="status">
		<option value="confirmed">Confirmed</option>
		<option value="cancelled">Cancelled</option>
	</select><br>
		
	<input type="submit" name="submit" value="Update">
</form>

<?php
    }
    else{
        echo "<p>invalid request, please <a href='login.html'>login</a> first.</p>";
    }

?>
</body>

<script>
	function reservation()
	{
		let id = document.getElementById('id').value;
		let name = document.getElementById('name').value;
    	let email = document.getElementById('email').value;
		let number = document.getElementById('number').value;
    	let check_in_date = document.getElementById('check_in_date').value;
		let check_out_date = document.getElementById('check_out_date').value;
    	let room_type = document.getElementById('room_type').value;
		if(id == "")
		{
			alert("Please fill up id");
		}
		else if(name == "")
		{
			alert("Please fill up name");
		}
    	else if(email == "")
		{
			alert("Please fill up email");
		}
    	else if(number == "")
		{
			alert("Please fill up phone number");
		}
    	else if(check_in_date == "")
		{
			alert("Please fill up check_in_date");
		}
    	else if(check_out_date == "")
		{
			alert("Please fill up check out date");
		}
    	else if(room_type == "")
		{
			alert("Please fill up room type");
		}
	}
</script>