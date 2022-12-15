<?php session_start(); ?>
<?php require_once('../connection/dbconnection.php'); ?>

<?php

if (!isset($_SESSION['ad_id'])) {
    header("Location: adminLogin.php");
}

?>

<?php

$customer_list = "";
$numberOfClients = "";

$query = "SELECT * FROM customers
          WHERE
          isDeleted = 0
          ORDER BY
          customer_id";

$customers = mysqli_query($connection, $query);

$numberOfClients = mysqli_num_rows($customers);

if ($customers) {
    while ($customer = mysqli_fetch_assoc($customers)) {
    }
} else {
    echo "DB Failed!";
}

?>

<?php

$consultant_list = "";
$numberOfConsultants = "";

$query = "SELECT * FROM consultants
          WHERE
          isDeleted = 0
          ORDER BY
          consultant_id
          DESC
          LIMIT 5";

$countQuery = "SELECT * FROM consultants
               WHERE
               isDeleted = 0
               ORDER BY
               consultant_id";

$consultants = mysqli_query($connection, $query);
$count = mysqli_query($connection, $countQuery);

$numberOfConsultants = mysqli_num_rows($count);

if ($consultants) {
    while ($consultant = mysqli_fetch_assoc($consultants)) {

        $_GET['consultant_id'] = $consultant['consultant_id'];
        $_GET['consultantUsername'] = $consultant['consultantUsername'];
        $_GET['firstName'] = $consultant['consultantFirstName'];
        $_GET['lastName'] = $consultant['consultantLastName'];
        $_GET['title'] = $consultant['title'];
        $_GET['ratings'] = $consultant['ratings'];

        $consultant_list .= "<tbody>";
        $consultant_list .= "<tr>";
        $consultant_list .= "<td class=\"text-left\"> {$consultant['consultantFirstName']} </td>";
        $consultant_list .= "<td class=\"text-left\"> {$consultant['consultantLastName']} </td>";
        $consultant_list .= "<td class=\"text-left\"> {$consultant['title']} </td>";
        $consultant_list .= "<td class=\"text-left\"> {$consultant['consultantEmail']} </td>";
        $consultant_list .= "<td class=\"text-left\"> {$consultant['consultantMobileNo']} </td>";
        $consultant_list .= "</tr>";
        $consultant_list .= "</tbody>";
    }
} else {
    echo "DB Failed!";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/dashboardMain.css">
    <title>ConsultPro | Admin Dashboard</title>
</head>

<body>

    <?php require_once('./components/sideMenuAdmin.php'); ?>

    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="../assets/images/admin-side/search.png" alt=""></button>
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
                        <h1><?php echo $numberOfClients ?></h1>
                        <h3>Clients</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../assets/images/admin-side/students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1><?php echo $numberOfConsultants ?></h1>
                        <h3>Consultants</h3>
                    </div>
                    <div class="icon-case">
                        <img src="../assets/images/admin-side/teachers.png" alt="">
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Recent Consultants</h2>
                    </div>
                    <table>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Title</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                        </tr>
                        <tr>
                            <?php echo $consultant_list; ?>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>