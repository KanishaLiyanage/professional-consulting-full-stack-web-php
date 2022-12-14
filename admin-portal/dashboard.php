<?php session_start(); ?>

<?php require_once('../connection/dbconnection.php'); ?>

<?php

if (!isset($_SESSION['ad_id'])) {
    header("Location: adminLogin.php");
}

if (!isset($_SESSION['ad_id'])) {
    echo "Admin ID pass failed!";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">

</head>

<body>

    <center>

        <h1>Dashboard</h1>
        <a href="../admin-portal/components/logout.php"> Logout </a>

        <div class="gridContainer">

            <a href="consultants.php">
                <div>
                    <p>Consultants List</p>
                    <img src="../assets/icons/browse.png">
                </div>

            </a>
            <a href="addConsultantInfo.php">
                <div>
                <p>Add Consultant</p>
                <img src="../assets/icons/add.png">
                </div>
            </a>

            <a href="orders.php">
                <div>
                    <P>Orders</P>
                    <img src="../assets/icons/orders.png">
                </div>
            </a>

            <a href="users.php">
                <div>
                    <p>Users</p>
                    <img src="../assets/icons/users.png">
                </div>
            </a>

            <a href="shipments.php">
                <div>
                    <p>Shipments</p>
                    <img src="../assets/icons/shipments.png">
                </div>
            </a>

        </div>

    </center>

</body>

</html>

<?php mysqli_close($connection); ?>