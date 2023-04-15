<head>
    <title>Make a Reservation</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<?php
    session_start();
    require_once('../models/reservation.php');
    if(isset($_SESSION['flag']))
	{
        
?>
<a href="../views/membership.php">Membership</a>
<a href="../views/ride.php">Take a Ride</a>
<a href="../views/admin.php">Admin Panel</a>
<a href="../views/reservation.php">Reservation</a>
<a href="../views/event.php">Event Announcement</a>
<a href="logout.php">Log out</a><br>

<?php

if(isset($_REQUEST['submit']))
{
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone_number = $_REQUEST['phone_number'];
    $check_in_date = $_REQUEST['check_in_date'];
    $check_out_date = $_REQUEST['check_out_date'];
    $room_type = $_REQUEST['room_type'];
    if($name == "" || $email == "" || $phone_number == "" || $check_in_date == "" || $check_out_date == "" || $room_type == "")
    {
        echo "null data found!";
    }
    else
    {
        $make_reservation = ['name'=>$name, 'email'=>$email,'phone_number'=> $phone_number, 'check_in_date'=> $check_in_date, 'check_out_date'=> $check_out_date, 'room_type'=>$room_type];
        $status = makeReservation($make_reservation);
        if($status){
            echo "<p>Reservation request has been done!<br></p>";
        }else{
            echo "<p>please try again</p>";
        }
    }
}
    }
    else
    {
        echo "<p>invalid request, please <a href='../views/login.html'>login</a> first.</p>";
    }
?>
</body>