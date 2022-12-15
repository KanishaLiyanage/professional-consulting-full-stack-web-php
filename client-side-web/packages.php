<?php session_start(); ?>
<?php require_once('../connection/dbconnection.php'); ?>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="../client-side-web/css/card.css">
  <link rel="stylesheet" href="../client-side-web/css/home.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <link rel="stylesheet" href="./css/packages.css">
  <title>ConsultPro | Packages</title>
</head>

<body>

  <?php require_once('../client-side-web/components/header.php'); ?>

  <h2 class="title">Choose your plan</h2>

  <div class="pkgCard">

    <div class="background">
      <div class="container">
        <div class="panel pricing-table">
          <div class="pricing-plan">
            <img src="https://s22.postimg.cc/8mv5gn7w1/paper-plane.png" alt="" class="pricing-img">
            <h2 class="pricing-header">Basic</h2>
            <ul class="pricing-features">
              <li class="pricing-features-item">Custom domains</li>
              <li class="pricing-features-item">Sleeps after 30 mins of inactivity</li>
            </ul>
            <span class="pricing-price">$100</span>
            <a href="./components/basicPayment.php?pkg=Basic" class="pricing-button">Sign up</a>
          </div>

          <div class="pricing-plan">
            <img src="https://s28.postimg.cc/ju5bnc3x9/plane.png" alt="" class="pricing-img">
            <h2 class="pricing-header">Standard</h2>
            <ul class="pricing-features">
              <li class="pricing-features-item">Never sleeps</li>
              <li class="pricing-features-item">Multiple workers for more powerful apps</li>
            </ul>
            <span class="pricing-price">$150</span>
            <a href="./components/standardPayment.php?pkg=Standard" class="pricing-button">Free trial</a>
          </div>

          <div class="pricing-plan">
            <img src="https://s21.postimg.cc/tpm0cge4n/space-ship.png" alt="" class="pricing-img">
            <h2 class="pricing-header">Enhanced</h2>
            <ul class="pricing-features">
              <li class="pricing-features-item">Dedicated</li>
              <li class="pricing-features-item">Simple horizontal scalability</li>
            </ul>
            <span class="pricing-price">$400</span>
            <a href="./components/enhancedPayment.php?pkg=Enhanced" class="pricing-button">Free trial</a>
          </div>

        </div>
      </div>
    </div>

  </div>

</body>

</html>

<?php mysqli_close($connection); ?>