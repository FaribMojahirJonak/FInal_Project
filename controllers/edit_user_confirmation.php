<head>
    <title>Edit User Information</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php
	session_start();
    require_once('../models/userModel.php');
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

$id = $_REQUEST['id'];
$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$birthday = $_REQUEST['birthday'];
$gender = $_REQUEST['gender'];
$blood_group = $_REQUEST['blood_group'];

if($id == "" || $username = "" || $email == "" || $password == "" || $birthday == "" || $gender == "" || $blood_group == "" )
{
    echo "<p>null data found!</p>";
}
else
{
    $info = ['id' => $id, 'username'=>$username, 'email'=>$email,'password'=> $password, 'birthday'=> $birthday, 'gender'=> $gender, 'blood_group'=>$blood_group];
    $status = updateInfo($info);
    if($status){
        echo "<p>User information has been updated!<br></p>";
    }else{
        echo "<p>please try again</p>";
    }
}
    }
    else{
        echo "<p>invalid request, please <a href='../views/login.html'>login</a> first.</p>";
    }

?>
</body>