<?php session_start(); ?>
<?php require_once('../connection/dbconnection.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="img/favicon.ico" rel="icon">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="../client-side-web/css/card.css">
  <link rel="stylesheet" href="../client-side-web/css/home.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/t1.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
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

      <section class="section about-section gray-bg" id="about">
        <div class="container">
          <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6">
              <div class="about-text go-to">
                <h3 class="dark-color"><?php echo $record['consultantUsername'] ?></h3>
                <h6>
                  <?php echo $record['title'] ?>
                </h6>
                <p>
                  <?php echo $record['description'] ?>
                </p>
                <div class="row about-list">
                  <div class="col-md-6">
                    <?php   echo "ID passed: " . $_GET['con_id']; ?>
                    <a href="./components/hire.php?con_id=<?php echo $_GET['con_id']?>"><button>HIRE ME</button></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="about-avatar">
                <img src="../assets/uploads/profile_pics/<?php echo $record['image']; ?>">
              </div>
            </div>

          </div>
        </div>
      </section>

  <?php   }
  }

  ?>

</body>

</html>

<?php mysqli_close($connection); ?>