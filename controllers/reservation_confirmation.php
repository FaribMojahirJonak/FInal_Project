<?php
    session_start();
    require_once('../models/reservation.php');
    if(isset($_SESSION['flag']))
	{
        if(isset($_REQUEST['submit']))
        {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
		    $email = $_REQUEST['email'];
            $phone_number = $_REQUEST['phone_number'];
            $check_in_date = $_REQUEST['check_in_date'];
            $check_out_date = $_REQUEST['check_out_date'];
		    $room_type = $_REQUEST['room_type'];
            $status = $_REQUEST['status'];
            if($id == "" ||$name == "" || $email == "" || $phone_number == "" || $check_in_date == "" || $check_out_date == "" || $room_type == "" || $status == "")
            {
                echo "null data found!";
            }
            else
            {
                $reservation = ['id' => $id, 'name'=>$name, 'email'=>$email,'phone_number'=> $phone_number, 'check_in_date'=> $check_in_date, 'check_out_date'=> $check_out_date, 'room_type'=>$room_type,'status' => $status];
                $status = updateReservation($reservation);
                if($status){
                    echo "Reservation has been updated!<br>";
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