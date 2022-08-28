<?php session_start(); ?>
<?php require_once('../connection/dbconnection.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Packages</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

  <link rel="stylesheet" href="../client-side-web/css/team.css">

  <script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
  <script type="text/javascript" src="layout/scripts/jquery.jcarousel.pack.js"></script>
  <script type="text/javascript" src="layout/scripts/jquery.jcarousel.setup.js"></script>
</head>

<body id="top">

  <div class="wrapper col2">
    <div id="featured_slide">
      <div id="featured_content">
        <ul>
          <li><img src="../../assets/images/payment.jpg" alt="" />
            <div class="floater">
              <h1 class="text-white font-weight-bold">Choose your Package</h1>

              <p>You're Covered Anywhere In The U.S. & With Some Plans, For Medical Emergencies Abroad. Choosing Cigna, You Get Trusted Coverage, Competitive Rates & Helpful Customer Service.Choose Your Own Doctors · Competitive Rates · Competitive Rates</p>


            </div>

        </ul>
      </div>
      </li>
    </div>

    <div class="wrapper col3">
      <div id="container">
        <div class="homepage">
          <ul>
            <li>
              <h2 class="mt-md-4 px-md-3 mb-2 py-2 bg-light font-weight-bold text-align: center"> Basic <br> $50 </h2>

              <p>Feature 1 <br> Feature 2 <br> Feature 3 <br> Feature 4 <br> Feature 5 <br></p>

              <a href="" class="btn btn-lg btn-block btn-primary mt-auto ">Choose this package</a>
            </li>

            <li>
              <h2 class="mt-md-4 px-md-3 mb-2 py-2 bg-light font-weight-bold text-align: center"> Standard <br> $150 </h2>

              <p>Feature 1 <br> Feature 2 <br> Feature 3 <br> Feature 4 <br> Feature 5 <br></p>

              <a href="" class="btn btn-lg btn-block btn-primary mt-auto">Choose this package</a>
            </li>

            <li>
              <h2 class="mt-md-4 px-md-3 mb-2 py-2 bg-light font-weight-bold text-align: center"> Enhansed <br> $250 </h2>

              <p>Feature 1 <br> Feature 2 <br> Feature 3 <br> Feature 4 <br> Feature 5 <br></p>

              <a href="" class="btn btn-lg btn-block btn-primary mt-auto">Choose this package</a>
            </li>



          </ul>
          <br class="clear" />
        </div>
      </div>
    </div>

</body>

</html>

<?php mysqli_close($connection); ?>