<?php
    session_start();
    require_once('../models/billing_information.php');
    if(isset($_SESSION['flag']))
	{
        if(isset($_REQUEST['submit']))
        {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
		    $card_number = $_REQUEST['card_number'];
            $phone_number = $_REQUEST['phone_number'];
            $cvv = $_REQUEST['cvv'];
            $exp = $_REQUEST['exp'];
            $status = $_REQUEST['status'];
            if($id == "" ||$name == "" || $card_number == "" || $phone_number == "" || $cvv == "" || $exp == "" || $status == "")
            {
                echo "null data found!";
            }
            else
            {
                $billing = ['id' => $id, 'name'=>$name, 'card_number'=>$card_number,'phone_number'=> $phone_number, 'cvv'=> $cvv, 'exp'=> $exp, 'status' => $status];
                $status = updateBilling($billing);
                if($status){
                    echo "Billing has been updated!<br>";
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