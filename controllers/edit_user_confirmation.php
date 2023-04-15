<?php
	session_start();
    require_once('../models/userModel.php');
	if(isset($_SESSION['flag']))
	{
		$id = $_REQUEST['id'];
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $birthday = $_REQUEST['birthday'];
		$gender = $_REQUEST['gender'];
        $blood_group = $_REQUEST['blood_group'];

        if($id == "" || $username = "" || $email == "" || $password == "" || $birthday == "" || $gender == "" || $blood_group == "" )
        {
            echo "null data found!";
        }
        else
        {
            $info = ['id' => $id, 'username'=>$username, 'email'=>$email,'password'=> $password, 'birthday'=> $birthday, 'gender'=> $gender, 'blood_group'=>$blood_group];
            $status = updateInfo($info);
            if($status){
                echo "User information has been updated!<br>";
            }else{
                echo "please try again";
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
    else{
        echo "invalid request, please <a href='../../session_login/index.html'>login</a> first.";
    }

?>