<?php session_start(); ?>
<?php require_once('../connection/dbconnection.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="img/favicon.ico" rel="icon">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="../client-side-web/css/team.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../client-side-web/css/card.css">
  <link rel="stylesheet" href="../client-side-web/css/home.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <title>ConsultPro | Consultant</title>
</head>

<body>

  <?php require_once('../client-side-web/components/header.php'); ?>

  <?php
  echo "ID passed: " . $_GET['con_id'];

  $query = "SELECT * FROM consultants WHERE consultant_id = '{$_GET['con_id']}' LIMIT 1";

  $result = mysqli_query($connection, $query);

  if ($result) { ?>
    <?php while ($record = mysqli_fetch_array($result)) {

      $_GET['c_id'] = $record['consultant_id'];
      $pro_id = $_GET['c_id']; //product id
      $prd_id = $record['consultant_id']; //product id

    ?>
      <!-- single product details -->
      <div class="wrapper">
        <div class="sidebar">
          <div class="sidebar-text d-flex flex-column h-100 justify-content-center text-center">
            <img class="mx-auto d-block w-75 bg-primary img-fluid rounded-circle mb-4 p-3" src="../../assets/uploads/profile_pics/<?php echo $record['image']; ?>" alt="<?php echo $record['firstName']; ?>">
            <h1 class="font-weight-bold"><?php echo $record['firstName'] . " " . $record['lastName'] ?></h1>
            <h2 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold"> <?php echo $record['title'] ?> </h2>
            <p class="mb-4">
              <?php $desc = $record['description'] ?>
              <?php echo substr($desc, 0, 100) . " ..." ?>
            </p>
            <a href="../client-side-web/package.php" class="btn btn-lg btn-block btn-primary mt-auto">Make an appointment</a>
          </div>
          <div class="sidebar-icon d-flex flex-column h-100 justify-content-center text-right">
            <i class="fas fa-2x fa-angle-double-right text-primary"></i>
          </div>
        </div>
        <div class="content">
          <!-- Navbar Start -->
          <div class="container p-0">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark">

            </nav>
          </div>
          <!-- Navbar End -->


          <!-- Blog List Start -->
          <div class="container bg-white pt-5">
            <div class="row blog-item px-3 pb-5">
              <div class="col-md-5">
                <img class="img-fluid mb-4 mb-md-0" src="../assets/images/client-side/who am i.jpg" alt="Image">
              </div>
              <div class="col-md-7">
                <h3 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold">Who am I?</h3>

                <p>
                  <?php echo $record['description'] ?>
                </p>

              </div>
            </div>
            <div class="row blog-item px-3 pb-5">
              <div class="col-md-5">
                <img class="img-fluid mb-4 mb-md-0" src="../assets/images/client-side/services.jpg" alt="Image">
              </div>
              <div class="col-md-7">
                <h3 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold">Pick a time to start chatting with your advisor</h3>

                <p>
                  Reffer my available time slots and choose a convenient time for you. <br>
                  click on "Hire me" to hire your consultant.
                </p>

              </div>
            </div>
            <div class="row blog-item px-3 pb-5">
              <table id="shedule">
                <tr>
                  <th>Day</th>
                  <th>Time</th>
                  <th>Hire Advisor</th>
                </tr>

                <tr>
                  <td>Monday</td>
                  <td>8.00AM - 1.00PM <br> 5.00PM - 10.00PM</td>
                  <td><a href="../client-side-web/package.php" class="btn btn-lg btn-block btn-primary mt-auto">Hire me</a></td>
                </tr>

              </table>


            </div>
          </div>
          <!-- Blog List End -->
 
  <?php   }
  }

  ?>

</body>

</html>

<?php mysqli_close($connection); ?>