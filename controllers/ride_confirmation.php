<?php
    session_start();
    require_once('../models/ride_service.php');
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

<body>
<a href="../views/membership.php">Membership</a>
<a href="../views/ride.php">Take a Ride</a>
<a href="../views/admin.php">Admin Panel</a>
<a href="../views/reservation.php">Reservation</a>
<a href="../views/event.php">Event Announcement</a>
<a href="logout.php">Log out</a><br>


<?php
        if(isset($_REQUEST['submit']))
        {
            $service = $_REQUEST['service'];
            $phone_number = $_REQUEST['phone_number'];
            $vehicle = $_REQUEST['vehicle'];
            $location = $_REQUEST['location'];

            if($phone_number == "" || $location == "")
            {
                echo "<p>Null data found!</p>";
            }
            else
            {
                $ride = ['service'=>$service, 'phone_number'=> $phone_number, 'vehicle'=> $vehicle, 'location'=> $location];
                $status = ride($ride);
                if($status){
                    echo "<p>Your ride has been requested. Please wait!</p>";
                }else{
                    echo "<p>please try again</p>";
                }
            }
        }
    }
    else{
        echo "<p>invalid request, please <a href='../views/login.html'>login</a> first.</P.";
    }

?>

</body>


