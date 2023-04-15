<?php 
    require_once('db.php');

    

    //membership
    function membership($membership)
    {
        $con = getConnection();
        $sql = "insert into membership values('', '{$membership['membership_type']}', '{$membership['membership_length']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

   

?>