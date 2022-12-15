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

<?php

$consultant_list = "";

$query = "SELECT * FROM consultants
          WHERE
          isDeleted = 0
          ORDER BY
          consultant_id";

$consultants = mysqli_query($connection, $query);

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
        $consultant_list .= "<td class=\"text-left\"> {$consultant['consultant_id']} </td>";
        $consultant_list .= "<td class=\"text-left\"> {$consultant['consultantUsername']} </td>";
        $consultant_list .= "<td class=\"text-left\"> {$consultant['title']} </td>";
        $consultant_list .= "<td class=\"text-left\"> {$consultant['ratings']} </td>";
        // $consultant_list .= "<td class=\"text-left\"> <a href=\"item.php?con_id={$_GET['consultant_id']}&con_title={$_GET['title']}&con_name={$_GET['firstName']}\"> go to this consultant </a> </td>";
        $consultant_list .= "<td class=\"text-left\"> <a href=\"components/delete_consultant.php?con_id={$consultant['consultant_id']}\" onclick = \"return confirm('Are you sure to delete?');\"> Delete </a> </td>";
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
    <link rel="stylesheet" href="./css/consultants.css">
    <title>ConsultPro | Admin Dashboard</title>
</head>

<body>

    <?php require_once('./components/sideMenuAdmin.php'); ?>

    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="img/search.png" alt=""></button>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="content-2">
                <div class="consultants">
                    <div class="title">
                        <h2>Detail of Consultants</h2>
                    </div>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Ratings</th>
                            <th>Option</th>
                        </tr>
                        <tr>
                            <?php echo $consultant_list; ?>
                        </tr>
                        <!-- <td><a href="#" class="btn">Delete</a></td> -->
                    </table>
                </div>
            </div>
        </div>
</body>

</html>