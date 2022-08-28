<?php session_start(); ?>
<?php require_once('../connection/dbconnection.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Business Advisor</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free Website Template" name="keywords">
  <meta content="Free Website Template" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:300;400;600;700;800&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="../client-side-web/css/team.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

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
            <h1 class="font-weight-bold"><?php echo $record['firstName']." ".$record['lastName'] ?></h1>
            <h2 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold"> <?php echo $record['title'] ?> </h2>
            <p class="mb-4">
              <?php $desc = $record['description'] ?>
              <?php echo substr($desc,0,100)." ..." ?>
            </p>
            <div class="d-flex justify-content-center mb-5">
              <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-twitter"></i></a>
              <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
              <a class="btn btn-outline-primary mr-2" href="#"><i class="fab fa-instagram"></i></a>
            </div>
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

                <tr>
                  <td>Tuesday</td>
                  <td>8.00AM - 1.00PM<br> 5.00PM - 10.00PM</td>
                  <td><a href="../client-side-web/package.php" class="btn btn-lg btn-block btn-primary mt-auto">Hire me</a></td>
                </tr>

                <tr>
                  <td>Wednesday</td>
                  <td>8.00AM - 1.00PM<br> 5.00PM - 10.00PM</td>
                  <td><a href="../client-side-web/package.php" class="btn btn-lg btn-block btn-primary mt-auto">Hire me</a></td>
                </tr>

                <tr>
                  <td>Thursday</td>
                  <td>8.00AM - 1.00PM <br> 5.00PM - 10.00PM</td>
                  <td><a href="../client-side-web/package.php" class="btn btn-lg btn-block btn-primary mt-auto">Hire me</a></td>
                </tr>

                <tr>
                  <td>Friday</td>
                  <td>8.00AM - 1.00PM <br> 5.00PM - 10.00PM</td>
                  <td><a href="../client-side-web/package.php" class="btn btn-lg btn-block btn-primary mt-auto">Hire me</a></td>
                </tr>

                <tr>
                  <td>Saturday</td>
                  <td>8.00AM - 1.00PM <br> 5.00PM - 10.00PM</td>
                  <td><a href="../client-side-web/package.php" class="btn btn-lg btn-block btn-primary mt-auto">Hire me</a></td>
                </tr>

                <tr>
                  <td>Sunday</td>
                  <td>8.00AM - 1.00PM <br> 5.00PM - 10.00PM</td>
                  <td><a href="../client-side-web/package.php" class="btn btn-lg btn-block btn-primary mt-auto">Hire me</a></td>
                </tr>
              </table>


            </div>
          </div>
          <!-- Blog List End -->


          <!-- Subscribe Start -->
          <div class="container py-5 px-4 bg-secondary text-center">
            <h1 class="text-white font-weight-bold">Search for my experience</h1>
            <p class="text-white">Get an idea about my works</p>
            <form class="form-inline justify-content-center">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Your Email">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit">Search</button>
                </div>
              </div>
            </form>
          </div>
          <!-- Subscribe End -->


          <!-- Blog List Start -->
          <div class="container bg-white pt-5">
            <div class="row blog-item px-3 pb-5">

              <div class="col-md-8">
                <h3 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold">Some main services we offer</h3>
                <div class="col-md-12 pt-4">

                  <div class="row">
                    <div class="col-md-4 col-sm-6">
                      <div id="ho_color" class="service_box">
                        <img src="../assets/images/client-side/service_icon1.png" alt="#" />
                        <h3>Digital marketing</h3>
                        <p>A brief description about this service </p>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                      <div id="ho_color" class="service_box">
                        <img src="../assets/images/client-side/service_icon2.png" alt="#" />
                        <h3>Financial Planning</h3>
                        <p>A brief description about this service </p>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                      <div id="ho_color" class="service_box">
                        <img src="../assets/images/client-side/service_icon3.png" alt="#" />
                        <h3>Progress Evaluating</h3>
                        <p>A brief description about this service </p>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                      <div id="ho_color" class="service_box">
                        <img src="../assets/images/client-side/service_icon4.png" alt="#" />
                        <h3>Business Consulting</h3>
                        <p>A brief description about this service </p>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                      <div id="ho_color" class="service_box">
                        <img src="../assets/images/client-side/service_icon5.png" alt="#" />
                        <h3>Marketing Research</h3>
                        <p>A brief description about this service </p>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                      <div id="ho_color" class="service_box">
                        <img src="../assets/images/client-side/service_icon6.png" alt="#" />
                        <h3>UX Reasearch</h3>
                        <p>A brief description about this service </p>
                      </div>
                    </div>




                  </div>


                </div>
              </div>



            </div>
            <div class="row blog-item px-3 pb-5">
              <div class="col-md-7">
                <h3 class="mt-md-4 px-md-3 mb-2 py-2 bg-white font-weight-bold">Ratings and feedbacks will display here</h3>
                <span class="heading">User Rating</span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <p>4.1 average based on 254 reviews.</p>
                <hr style="border:3px solid #f1f1f1">

                <div class="row">
                  <div class="side">
                    <div>5 star</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div class="bar-5"></div>
                    </div>
                  </div>
                  <div class="side right">
                    <div>150</div>
                  </div>
                  <div class="side">
                    <div>4 star</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div class="bar-4"></div>
                    </div>
                  </div>
                  <div class="side right">
                    <div>63</div>
                  </div>
                  <div class="side">
                    <div>3 star</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div class="bar-3"></div>
                    </div>
                  </div>
                  <div class="side right">
                    <div>15</div>
                  </div>
                  <div class="side">
                    <div>2 star</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div class="bar-2"></div>
                    </div>
                  </div>
                  <div class="side right">
                    <div>6</div>
                  </div>
                  <div class="side">
                    <div>1 star</div>
                  </div>
                  <div class="middle">
                    <div class="bar-container">
                      <div class="bar-1"></div>
                    </div>
                  </div>
                  <div class="side right">
                    <div>20</div>
                  </div>
                </div>
                <a class="btn btn-link p-0" href="">Read More <i class="fa fa-angle-right"></i></a>
              </div>
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