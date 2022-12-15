<?php session_start(); ?>
<?php require_once('../connection/dbconnection.php'); ?>

<?php

if (!isset($_SESSION['ad_id'])) {
    header("Location: adminLogin.php");
}

if (!isset($_SESSION['ad_id'])) {
    echo "Admin ID pass failed!";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/testIndex.css">
    <title>ConsultPro | Admin Dashboard</title>
</head>

<body>

    <?php require_once('./components/sideMenu.php'); ?>

    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="img/search.png" alt=""></button>
                </div>
                <div class="user">
                    <div class="img-case">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>2194</h1>
                        <h3>Clients</h3>
                    </div>
                    <div class="icon-case">
                        <img src="img/students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>53</h1>
                        <h3>Consultants</h3>
                    </div>
                    <div class="icon-case">
                        <img src="img/teachers.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>5</h1>
                        <h3>Companies</h3>
                    </div>
                    <div class="icon-case">
                        <img src="img/schools.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>350000</h1>
                        <h3>Income</h3>
                    </div>
                    <div class="icon-case">
                        <img src="img/income.png" alt="">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Recent Payments</h2>
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Profession</th>
                            <th>Package</th>
                            <th>Option</th>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">Delete</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">Delete</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">Delete</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">Delete</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">Delete</a></td>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>St. James College</td>
                            <td>$120</td>
                            <td><a href="#" class="btn">Delete</a></td>
                        </tr>
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>New Clients</h2>
                    </div>
                    <table>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>option</th>
                        </tr>
                        <tr>
                            <td><img src="img/user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="img/info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="img/user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="img/info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="img/user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="img/info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="img/user.png" alt=""></td>
                            <td>John Steve Doe</td>
                            <td><img src="img/info.png" alt=""></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>