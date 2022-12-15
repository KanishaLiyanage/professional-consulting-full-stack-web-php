<?php session_start(); ?>

<?php require_once('../connection/dbconnection.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/landing.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>ConsultPro | Dashboard</title>

</head>

<body>

    <section>

        <header>
            <h2><a href="" class="logo">ConsultPro</a></h2>
            <div class="navigation">
                <a href="./adminLogin.php">Sign in as an Admin</a>
                <a href="./consultantLogin.php">Sign in as a Consultant</a>
            </div>
        </header>
        <div class="content">
            <div class="info">
                <h2>like nature <br><span>be creative!</span></h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium ipsum, ullam doloremque quidem fuga eveniet. Praesentium officiis repellat, accusamus perspiciatis reprehenderit soluta sapiente quas, velit deserunt excepturi adipisci ducimus? Odio.</p>
            </div>
        </div>

    </section>

</body>

</html>

<?php mysqli_close($connection); ?>