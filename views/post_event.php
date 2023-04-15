<ehead>
    <title>Post an Event</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php 
    session_start();
    if(isset($_SESSION['flag'])){
?>
<a href="membership.php">Membership</a>
<a href="ride.php">Take a Ride</a>
<a href="admin.php">Admin Panel</a>
<a href="reservation.php">Reservation</a>
<a href="event.php">Event Announcement</a>
<a href="../controllers/logout.php">Log out</a><br>
<h1 style="color: white; text-align: center; margin-top:100px"> Post an Event</h1>
<form method="post" action="../controllers/post_event_confirmation.php" onsubmit="event()">
    <label for="event">Select an event</label>
    <select name="type" id="">
        <option value="bbq">bbq</option>
        <option value="party">party</option>
        <option value="tour">tour</option>
    </select><br>
    <label for="date">Select date</label>
    <input type="date" name="date" value="" id="date" /><br>
    <label for="time">Select time</label>
    <input type="time" name="time" value="" id="time"/><br>
    <input type="submit" name="post_event" value="post event" />
</form>

<?php
    }
    else{
        echo "invalid request, please <a href='login.html'>login</a> first.";
    }

?>


</body>

<script>
	function event()
	{
		let date = document.getElementById('date').value;
    	let time = document.getElmentById('time').value;
		
		
		if(date == "")
		{
			alert("Please fill up date");
		}
    	else if(time == "")
		{
			alert("Please fill up time");
		}
    	
	}
</script>