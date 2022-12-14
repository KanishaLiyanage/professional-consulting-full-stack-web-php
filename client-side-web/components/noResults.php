<?php session_start(); ?>
<?php require_once('../../connection/dbconnection.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/card.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/noResults.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <title>ConsultPro | Search Result</title>

</head>

<body>

    <nav class="nav">
        <i class="uil uil-bars navOpenBtn"></i>
        <a href="../home.php" class="logo">ConsultPro</a>
        <ul class="nav-links">
            <i class="uil uil-times navCloseBtn"></i>
            <li><a href="../home.php">Home</a></li>
            <li><a href="../consultantList.php">Consultants</a></li>
            <li><a href="../packages.php">Packages</a></li>
            <li><a href="../profile.php">Profile</a></li>
        </ul>
    </nav>

    <div class="resultTitle">
        <h2>No Any Matches Found!</h2>
    </div>

</body>

</html>

<?php mysqli_close($connection); ?>