<?php
    session_start();
    require_once('../models/ride_service.php');
    if(isset($_SESSION['flag']))
	{
        if(isset($_REQUEST['submit']))
        {
            $id = $_REQUEST['id'];
            $service = $_REQUEST['service'];
            $phone_number = $_REQUEST['phone_number'];
            $vehicle = $_REQUEST['vehicle'];
            $location = $_REQUEST['location'];
            $status = $_REQUEST['status'];
            if($id == "" ||$service == "" || $phone_number == "" || $vehicle == "" || $location == "" || $status == "")
            {
                echo "null data found!";
            }
            else
            {
                $rideUpdate = ['id' => $id, 'service'=>$service, 'phone_number'=> $phone_number, 'vehicle'=> $vehicle, 'location'=> $location, 'status' => $status];
                $status1 = rideUpdate($rideUpdate);
                if($status1){
                    echo "Ride request has been updated!<br>";
                }else{
                    echo "please try again";
                }
            }
        }
?>
<a href="../views/membership.php">Membership</a>
<a href="../views/ride.php">Take a Ride</a>
<a href="../views/admin.php">Admin Panel</a>
<a href="../views/reservation.php">Reservation</a>
<a href="../views/event.php">Event Announcement</a>
<a href="logout.php">Log out</a><br>

<?php
    }
    else
    {
        echo "invalid request, please <a href='../views/login.html'>login</a> first.";
    }
?>