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

<a href="membership.php">Membership</a>
<a href="ride.php">Take a Ride</a>
<a href="admin.php">Admin Panel</a>
<a href="reservation.php">Reservation</a>
<a href="event.php">Event Announcement</a>
<a href="../controllers/logout.php">Log out</a>

<h2>Customer Billing Information Management</h2>
<form method="POST" action="../controllers/update_billing.php" enctype="">
	Customer ID:<input type="num" name="id" value="<?php echo "$id"?>"><br>
	Customer Name:<input type="text" name="name" value="<?php echo "$name"?>"><br>
	Customer Card Number:<input type="text" name="card_number" value="<?php echo "$card_number"?>"><br>	
	Customer Phone:<input type="tel" name="phone_number" value="<?php echo "$phone_number"?>"><br>	
	CVV:<input type="text" name="cvv" value="<?php echo "$cvv"?>"><br>	
	Exp(MM/YY) :<input type="text" name="exp" value="<?php echo "$exp"?>"><br>	
	Status:
	<select name="status" value="<?php echo "$status"?>">
		<option value="confirm">confirm</option>
		<option value="cancel">Cancel</option>
	</select><br>	
	<input type="submit" name="submit" value="Update">
</form>

<?php
    }
    else{
        echo "invalid request, please <a href='../../session_login/index.html'>login</a> first.";
    }

?>