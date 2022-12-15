<?php require_once('../connection/dbconnection.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../client-side-web/css/card.css">
    <link rel="stylesheet" href="../client-side-web/css/home.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" type="text/css" href="./css/services.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>ConsultPro | Services</title>
</head>

<body>

    <h2 class="title">Our Services</h2>

    <?php require_once('../client-side-web/components/header.php'); ?>

    <div class="service">

        <div class="box">

            <div class="card">
                <i class="fas fa-bars"></i>
                <h5>Strategy Consulting</h5>
                <div class="pra">
                    <p>when business people generally executives, 
                        strategy consultants usually have considerable industry
                        knowledge and are expected to assess high-level
                        business issues.</p>
                    <!-- <p style="text-align: center;">
                        <a class="button" href="#">Read More</a>
                    </p> -->
                </div>
            </div>

            <div class="card">
                <i class="far fa-user"></i>
                <h5>Business Consulting</h5>
                <div class="pra">
                    <p>Business consultants serve as professional advisors to help companies achieve their goals or streamline operations in a particular area of the business.</p>
                </div>
            </div>

            <div class="card">
                <i class="far fa-bell"></i>
                <h5>Financial Consulting</h5>
                <div class="pra">
                    <p>Financial consultants look at the whole picture of a client's financial life, to help clients determine what those goals should be. </p>
                </div>
            </div>

        </div>
    </div>

</body>

</html>

<?php mysqli_close($connection); ?>