<?php 
    require_once('db.php');

    

    //ride service start
    function ride($ride)
    {
        $con = getConnection();
        $sql = "insert into ride_service values('', '{$ride['service']}', '{$ride['phone_number']}', '{$ride['vehicle']}', '{$ride['location']}', 'pending')";
        $status = mysqli_query($con, $sql);
        return $status;
    }
    //ride service end

    //admin start
    //show ride request
    function showRide()
    {
        $con = getConnection();
        $sql = "select* from ride_service";
        $result = mysqli_query($con, $sql);
        echo "<table border='1'>";
        echo "<tr><th>Service</th><th>Phone Number</th><th>Vehicle</th><th>Location</th><th>Status</th><th>Action</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) 
        {
            echo "<tr><td>{$row['service']}</td><td>{$row['phone_number']}</td><td>{$row['vehicle']}</td><td>{$row['location']}</td><td>{$row['status']}</td><td><a href='../views/update_ride_request.php?id={$row['id']}&service={$row['service']}&phone_number={$row['phone_number']}&vehicle={$row['vehicle']}&location={$row['location']}&status={$row['status']}'>Edit</a></td></tr>";
        }
        echo "</table>";
        return $result;
    }

    //update ride request
    function rideUpdate($rideUpdate)
    {
        $con = getConnection();
        $sql = "UPDATE ride_service SET id = '{$rideUpdate['id']}', service = '{$rideUpdate['service']}', phone_number = '{$rideUpdate['phone_number']}', vehicle = '{$rideUpdate['vehicle']}', location = '{$rideUpdate['location']}', status = '{$rideUpdate['status']}' WHERE id = '{$rideUpdate['id']}'";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    

?>