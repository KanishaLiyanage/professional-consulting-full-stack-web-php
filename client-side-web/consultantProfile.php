<?php session_start(); ?>
<?php require_once('../connection/dbconnection.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="img/favicon.ico" rel="icon">
  <link href="css/style.css" rel="stylesheet">
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
              <p>
                <?php echo $record['title'] ?>
              </p>
              <h1><?php echo $record['consultantUsername'] ?></h1>

              <p>Availability: <?php echo $record['availability'] ?></p>

              <a href="./components/hire.php?con_id=<?php echo $con_id ?>">
                <button class="btn" type="submit" name="buy">Hire Now</button>
              </a>

              <h3>About Me</h3>
              <br />
              <p><?php echo $record['description'] ?></p>
            </div>
          </div>
        </div>
      </div>

  <?php   }
  }

  ?>

</body>

</html>

<?php mysqli_close($connection); ?>