<?php 
    require_once('db.php');

    function auth($username, $password)
    {

        $con = getConnection();
        $sql = "select * from user where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function addUser($user)
    {
        $con = getConnection();
        $sql = "insert into user values('', '{$user['username']}', '{$user['email']}', '{$user['password']}', '{$user['birthday']}', '{$user['gender']}', '{$user['blood_group']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    // function addRoom($addRoom)
    // {
    //     $con = getConnection();
    //     $sql = "insert into room_inventory values('', '{$addRoom['room_type']}', '{$addRoom['room_number']}', '{$addRoom['price']}')";
    //     $status = mysqli_query($con, $sql);
    //     return $status;

    // }

    function postEvent($postEvent)
    {
        $con = getConnection();
        $sql = "insert into event values('', '{$postEvent['event_type']}', '{$postEvent['event_date']}', '{$postEvent['event_time']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function joinEvent()
    {
        $con = getConnection();
        $sql = "select* from event";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) 
        {
            while($row = mysqli_fetch_assoc($result)) 
            {
              echo "Event Type: " . $row["event_type"] . "<br>";
              echo "Event Date: " . $row["event_date"] . "<br>";
              echo "Event Time: " . $row["event_time"] . "<br><br>";
            }
          } 
          else 
          {
            echo "No event is listed currently!";
          }
    }

?>