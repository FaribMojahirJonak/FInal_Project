<?php 
    require_once('db.php');

    

    //event announcement start
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
    //event announcement end

    

?>