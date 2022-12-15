<?php session_start(); ?>
<?php require_once('../connection/dbconnection.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="img/favicon.ico" rel="icon">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/consultantProfile.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>ConsultPro | Consultant</title>
</head>

<body>

  <?php require_once('../client-side-web/components/header.php'); ?>

  <?php

  $query = "SELECT * FROM
            consultants
            WHERE consultant_id = '{$_GET['con_id']}'
            LIMIT 1";

  $result = mysqli_query($connection, $query);

  if ($result) { ?>
    <?php while ($record = mysqli_fetch_array($result)) {

      $_GET['c_id'] = $record['consultant_id'];
      $con_id = $record['consultant_id'];

    ?>

      <div class="consultantProfileCard">
        <div class="small-container single-product">
          <div class="row">
            <div class="col-2">
              <img src="../assets/uploads/profile_pics/<?php echo $record['image']; ?>" alt="<?php echo $record['image']; ?>" width="100%" id="ProductImg" />
            </div>

            <div class="col-2">
              <p class="para">
                <?php echo $record['title'] ?>
              </p>
              <h1><?php echo $record['consultantUsername'] ?></h1>

              <p class="para">Availability: <?php echo $record['availability'] ?></p>

              <a class="txt" href="./components/hire.php?con_id=<?php echo $con_id ?>">
                <button class="btn" type="submit" name="buy">Hire Now</button>
              </a>

              <h3>About Me</h3>
              <br />
              <p align="justify" class="para"><?php echo $record['description'] ?></p>

              <div class="whatsapp_float">
                <a href="https://wa.me/<?php echo $record['consultantMobileNo'] ?>" target="_blank"><img src="../assets/images/client-side/whatsapp.png" width="60px" width="60px" class="whatsapp_float_btn" /></a>
              </div>

            </div>
          </div>
        </div>
      </div>

  <?php   }
  }

  ?>

  <style>
    .whatsapp_float {
      position: fixed;
      bottom: 40px;
      right: 30px;
    }

    .hireP {
      padding: 4px;
    }
  </style>

</body>

</html>

<?php mysqli_close($connection); ?>