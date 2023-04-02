<?php 
    session_start();
    require_once('../models/userModel.php');
    if(isset($_SESSION['flag'])){
?>

<a href="../views/membership.php">Membership</a>
<a href="../views/ride.php">Take a Ride</a>
<a href="../views/admin.php">Admin Panel</a>
<a href="../views/setting.php">Settings</a>
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
                echo "Null Data Found!";
            }
            else
            {
                $postEvent = ['event_type'=> $type, 'event_date'=> $date, 'event_time'=> $time];
                $status = postEvent($postEvent);

                if($status)
                {
                    echo "event is posted.";
                }else
                {
                    echo "DB error, please try again";
                }
            }
}
 ?>

<?php
    }
    else{
        echo "invalid request, please <a href='../views/login.html'>login</a> first.";
    }

?>