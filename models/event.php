<head>
  <style>
    p
    {
      color: white;
    }
  </style>
</head>

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
              echo "<p>Event Type: " . $row["event_type"] . "<br></p>";
              echo "<p>Event Date: " . $row["event_date"] . "<br></p>";
              echo "<p>Event Time: " . $row["event_time"] . "<br><br></p>";
            }
          } 
          else 
          {
            echo "<p>No event is listed currently!</p>";
          }
    }
    //event announcement end

    

?>