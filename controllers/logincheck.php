<?php 
    session_start();
    require_once('../models/userModel.php');
    
    if(isset($_REQUEST['submit'])){
        
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        if($username == "" && $password == "")
        {
            echo "null data found...";
        }
        else
        {
            $status = auth($username, $password);
            if($status)
            {
                $_SESSION['flag'] = "true";
                $_SESSION['username'] = $username;
                header('location: ../views/home.php');
            }
            else
            {
                echo "invalid user";
            }
        }
    
    }else{
        header('location: login.html');
    }

?>