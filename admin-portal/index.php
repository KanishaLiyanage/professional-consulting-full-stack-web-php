<?php session_start(); ?>

<?php require_once('../connection/dbconnection.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
</head>
<body>
    <h1>Landing Page</h1>
    <a href="dashboard.php">Go to Dashboard</a>
    <br>
    <a href="adminLogin.php">Sign in as an Admin</a>
    <br>
    <a href="consultantLogin.php">Sign in as a Consultant</a>
</body>
</html>

<?php mysqli_close($connection); ?>