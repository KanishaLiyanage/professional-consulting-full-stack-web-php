<?php session_start(); ?>

<?php require_once('../connection/dbconnection.php'); ?>

<?php

if (!isset($_SESSION['con_id'])) {
    header("Location: consultantLogin.php");
}

if (!isset($_SESSION['con_id'])) {
    echo "Consultant ID pass failed!";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultant Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">

</head>

<body>

    <center>

        <h1>Dashboard</h1>
        <a href="../admin-portal/components/logout.php"> Logout </a>

        <div class="gridContainer">

            <a href="orders.php">
                <div>
                    <P>Reservations</P>
                    <img src="../assets/icons/reservations.png">
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
                    <p>Services Status</p>
                    <img src="../assets/icons/services.png">
                </div>
            </a>

        </div>

    </center>

</body>

</html>

<?php mysqli_close($connection); ?>