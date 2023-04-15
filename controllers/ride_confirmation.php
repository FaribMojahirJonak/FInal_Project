<?php
    session_start();
    require_once('../models/ride_service.php');
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
            $service = $_REQUEST['service'];
            $phone_number = $_REQUEST['phone_number'];
            $vehicle = $_REQUEST['vehicle'];
            $location = $_REQUEST['location'];

            if($service == "" || $phone_number == "" || $vehicle == "" || $location == "")
            {
                echo "null data found!";
            }
            else
            {
                $ride = ['service'=>$service, 'phone_number'=> $phone_number, 'vehicle'=> $vehicle, 'location'=> $location];
                $status = ride($ride);
                if($status){
                    echo "your ride has been requested. Please wait!";
                }else{
                    echo "please try again";
                }
            }
        }
    }
    else{
        echo "invalid request, please <a href='../../session_login/index.html'>login</a> first.";
    }

?>


