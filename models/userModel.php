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

    

    //show user information
    function showInfo()
    {
        $con = getConnection();
        $sql = "select* from user";
        $result = mysqli_query($con, $sql);
        echo "<table border='1'>";
        echo "<tr><th>Name</th><th>Email</th><th>Password</th><th>Date of Birth</th><th>Gender</th><th>Blood Group</th><th colspan = '2'>Action</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) 
        {
            echo "<tr><td>{$row['username']}</td><td>{$row['email']}</td><td>{$row['password']}</td><td>{$row['birthday']}</td><td>{$row['gender']}</td><td>{$row['blood_group']}</td><td><a href='../views/manage_user_information.php?id={$row['id']}&username={$row['username']}&email={$row['email']}&password={$row['password']}&birthday={$row['birthday']}&gender={$row['gender']}&blood_group={$row['blood_group']}'>Edit</a></td><td><a href='../controllers/delete_user.php?id={$row['id']}'>Delete</a></td></tr>";
        }
        echo "</table>";
        return $result;
    }

    //update user information
    function updateInfo($info)
    {
        $con = getConnection();
        $sql = "UPDATE user SET id = '{$info['id']}', username = '{$info['username']}', email = '{$info['email']}', password = '{$info['password']}', birthday = '{$info['birthday']}', gender = '{$info['gender']}', blood_group = '{$info['blood_group']}' WHERE id = '{$info['id']}'";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    //delete user information
    function deleteUser($id)
    {
        $con = getConnection();
        $sql = "delete from user where id = '$id'";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    

    

   

?>