<head>
    <style>
        table
        {
            color: white;
            margin-top: 100px;
            text-align: center;
            
        }
    </style>
</head>

<?php 
    require_once('db.php');

    

    //show billing information
    function showBillingInfo()
    {
        $con = getConnection();
        $sql = "select* from billing_information";
        $result = mysqli_query($con, $sql);
        echo "<table border='1'>";
        echo "<tr><th>Name</th><th>Card Number</th><th>phone number</th><th>cvv</th><th>exp(mm/yy)</th><th>status</th><th>Action</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) 
        {
            echo "<tr><td>{$row['name']}</td><td>{$row['card_number']}</td><td>{$row['phone_number']}</td><td>{$row['cvv']}</td><td>{$row['exp']}</td><td>{$row['status']}</td><td><a href='../views/manage_billing_information.php?id={$row['id']}&name={$row['name']}&card_number={$row['card_number']}&phone_number={$row['phone_number']}&cvv={$row['cvv']}&exp={$row['exp']}&status={$row['status']}'>Edit</a></td></tr>";
        }
        echo "</table>";
        return $result;
    }

    //update billing information
    function updateBilling($billing)
    {
        $con = getConnection();
        $sql = "UPDATE billing_information SET id = '{$billing['id']}', name = '{$billing['name']}', card_number = '{$billing['card_number']}', phone_number = '{$billing['phone_number']}', cvv = '{$billing['cvv']}', status = '{$billing['status']}' WHERE id = '{$billing['id']}'";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    

?>