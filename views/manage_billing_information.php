<head>
	<title>Manage Billing</title>
	<style>
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
		p
		{
			color: white;
		}
	</style>
</head>
<?php
	session_start();
	if(isset($_SESSION['flag']))
	{
		$id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
		$card_number = $_REQUEST['card_number'];
        $phone_number = $_REQUEST['phone_number'];
        $cvv = $_REQUEST['cvv'];
        $exp = $_REQUEST['exp'];
        $status = $_REQUEST['status'];
?>
<body>
<a href="membership.php">Membership</a>
<a href="ride.php">Take a Ride</a>
<a href="admin.php">Admin Panel</a>
<a href="reservation.php">Reservation</a>
<a href="event.php">Event Announcement</a>
<a href="../controllers/logout.php">Log out</a>

<h2 style="text-align:center; margin-top:100px; color:white">Customer Billing Information Management</h2>
<form method="POST" action="../controllers/update_billing.php" enctype="" onsubmit="billing()">
	<label for="id">Customer ID:</label> <input type="num" name="id" value="<?php echo "$id"?>" id="id"><br>
	<label for="name">Customer Name:</label><input type="text" name="name" value="<?php echo "$name"?>" id="name"><br>
	<label for="card_number">Customer Card Number:</label><input type="text" name="card_number" value="<?php echo "$card_number"?>" id="card_number"><br>	
	<label for="phone">Customer Phone:</label><input type="tel" name="phone_number" value="<?php echo "$phone_number"?>" id="phone"><br>	
	<label for="cvv">CVV:</label><input type="text" name="cvv" value="<?php echo "$cvv"?>" id="cvv"><br>	
	<label for="exp">Exp(MM/YY) :</label><input type="text" name="exp" value="<?php echo "$exp"?>" id="exp"><br>	
	<label for="status">Status:</label>
	<select name="status" value="<?php echo "$status"?>">
		<option value="confirm">confirm</option>
		<option value="cancel">Cancel</option>
	</select><br>	
	<input type="submit" name="submit" value="Update">
</form>
</body>


<?php
    }
    else{
        echo "<p>invalid request, please <a href='login.html'>login</a> first.</p>";
    }

?>

<script>
	function billing()
	{
		let id = document.getElementById('id').value;
		let name = document.getElementById('name').value;
    	let card_number = document.getElementById('card_number').value;
		let phone = document.getElementById('phone').value;
    	let cvv = document.getElementById('cvv').value;
		let exp = document.getElementById('exp').value;
		if(id == "")
		{
			alert("Please fill up id");
		}
		else if(name == "")
		{
			alert("Please fill up name");
		}
    	else if(card_number == "")
		{
			alert("Please fill up card number");
		}
    	else if(phone == "")
		{
			alert("Please fill up phone number");
		}
    	else if(cvv == "")
		{
			alert("Please fill up cvv");
		}
    	else if(exp == "")
		{
			alert("Please fill up expiry date");
		}
	}
</script>