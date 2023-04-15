<head>
    <style>
        table
        {
            color: white;
        }
    </style>
</head>

<?php 
    require_once('db.php');

    

    //show reservations
    function showReservation()
    {
        $con = getConnection();
        $sql = "select* from reservation";
        $result = mysqli_query($con, $sql);
        echo "<table border='1'>";
        echo "<tr><th>Name</th><th>Email</th><th>Phone Number</th><th>check in date</th><th>check out date</th><th>room type</th><th>status</th><th>Action</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) 
        {
            echo "<tr><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['phone_number']}</td><td>{$row['check_in_date']}</td><td>{$row['check_out_date']}</td><td>{$row['room_type']}</td><td>{$row['status']}</td><td><a href='../views/manage_reservation.php?id={$row['id']}&name={$row['name']}&email={$row['email']}&phone_number={$row['phone_number']}&check_in_date={$row['check_in_date']}&check_out_date={$row['check_out_date']}&room_type={$row['room_type']}&status={$row['status']}'>Edit</a></td></tr>";
        }
        echo "</table>";
        return $result;
    }

    //update reservation
    function updateReservation($reservation)
    {
        $con = getConnection();
        $sql = "UPDATE reservation SET id = '{$reservation['id']}', name = '{$reservation['name']}', email = '{$reservation['email']}', phone_number = '{$reservation['phone_number']}', check_in_date = '{$reservation['check_in_date']}', check_out_date = '{$reservation['check_out_date']}', room_type = '{$reservation['room_type']}', status = '{$reservation['status']}' WHERE id = '{$reservation['id']}'";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    //make reservation
   function makeReservation($make_reservation)
   {
       $con = getConnection();
       $sql = "insert into reservation values('', '{$make_reservation['name']}', '{$make_reservation['email']}', '{$make_reservation['phone_number']}', '{$make_reservation['check_in_date']}', '{$make_reservation['check_out_date']}', '{$make_reservation['room_type']}', 'pending')";
       $status = mysqli_query($con, $sql);
       return $status;
   }

?>