<?php 
    session_start();
    if(isset($_SESSION['flag'])){
?>

<a href="../membership/membership.php">Membership</a>
<a href="../ride/ride.php">Take a Ride</a>
<a href="admin.php">Admin Panel</a>
<a href="../setting/setting.php">Settings</a>
<a href="../event_announcement/event.php">Event Announcement</a>
<a href="../../session_login/logout.php">Log out</a><br>

<?php
 if(isset($_post['add_room']))
 {
    $room_type = $_post['room_type'];
    $room_number = $_post['room_number'];
    $price = $_post['price'];

    if($room_type == "" || $room_number == "" || $price == "")
        {
            echo "Null Data Found!";
        }
        else
        {
            $addRoom = ['room_type'=>$room_type, 'room_number'=> $room_number, 'price'=> $price];
            $status = addRoom($addRoom);

            if($status){
                echo "room added successfully.";
            }else{
                echo "DB error, please try again";
            }
        }
 }
 ?>

<?php
    }
    else{
        echo "invalid request, please <a href='../../session_login/index.html'>login</a> first.";
    }

?>