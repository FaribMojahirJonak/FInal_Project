<head>
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<?php 
    session_start();
    require_once('../models/userModel.php');
    
    if(isset($_REQUEST['submit'])){
        
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        if($username == "" && $password == "")
        {
            echo "<p>null data found</p>";
            echo "<a href='../views/login.html'>Try Again</a>";
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
                echo "<p>invalid user. Please <a href='../views/login.html'>Try Again</a> </p>";
            }
        }
    
    }else{
        header('location: login.html');
    }

?>
</body>