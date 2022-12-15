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
    <link rel="stylesheet" href="./css/consultProfile.css">
    <title>ConsultPro | Consultant Dashboard</title>
</head>

<body>

    <?php require_once('./components/sideMenuConsultant.php'); ?>

    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="img/search.png" alt=""></button>
                </div>
            </div>
        </div>
        <div class="profileCard">
            <h1>My Profile</h1>
        </div>
    </div>

</body>

</html>