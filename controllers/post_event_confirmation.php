<head>
    <title>Post an Event</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<?php 
    session_start();
    require_once('../models/event.php');
    if(isset($_SESSION['flag'])){
?>

<a href="../views/membership.php">Membership</a>
<a href="../views/ride.php">Take a Ride</a>
<a href="../views/admin.php">Admin Panel</a>
<a href="../views/reservation.php">Reservation</a>
<a href="../views/event.php">Event Announcement</a>
<a href="logout.php">Log out</a><br>

<?php
if(isset($_REQUEST['post_event']))
{
    $type = $_REQUEST['type'];
    $date = $_REQUEST['date'];
    $time = $_REQUEST['time'];
    if($type == "" || $date == "" || $time == "")
            {
                echo "<p>Null Data Found!</p>";
            }
            else
            {
                $postEvent = ['event_type'=> $type, 'event_date'=> $date, 'event_time'=> $time];
                $status = postEvent($postEvent);

                if($status)
                {
                    echo "<p>Event is posted.</p>";
                }else
                {
                    echo "<p>DB error, please try again</p>";
                }
            }
}
 ?>

<?php
    }
    else{
        echo "<p>invalid request, please <a href='../views/login.html'>login</a> first.</p>";
    }

?>
</body>