<?php

    session_start();
    require_once('../models/userModel.php');

    if(isset($_REQUEST['submit']))
    {
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $birthday = $_REQUEST['birthday'];
        $gender = $_REQUEST['gender'];;
        $blood_group = $_REQUEST['bg'];

        if($username == "" || $email == "" || $password == "" || $birthday == "" || $gender == "" || $blood_group == "")
        {
            echo "Null Data Found!";
        }
        else
        {
            $user = ['username'=>$username, 'email'=> $email, 'password'=> $password, 'birthday'=> $birthday, 'gender'=>$gender, 'blood_group'=>$blood_group ];
            $status = addUser($user);

            if($status){
                header('location: ../views/login.html');
            }else{
                echo "DB error, please try again";
            }
        }
    } 
    echo " <a href='index.html'>Log in</a>";
?>