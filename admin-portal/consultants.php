<?php session_start(); ?>

<?php require_once('../connection/dbconnection.php'); ?>


<?php

$consultant_list = "";

$query = "SELECT * FROM consultants WHERE isDeleted = 0 ORDER BY consultant_id";

$consultants = mysqli_query($connection, $query);

if ($consultants) {
    while ($consultant = mysqli_fetch_assoc($consultants)) {

        $_GET['consultant_id'] = $consultant['consultant_id'];
        $_GET['username'] = $consultant['username'];
        $_GET['firstName'] = $consultant['firstName'];
        $_GET['title'] = $consultant['title'];

        $consultant_list .= "<tbody class=\"table-hover\">";
        $consultant_list .= "<tr>";
        $consultant_list .= "<td class=\"text-left\"> {$consultant['consultant_id']} </td>";
        $consultant_list .= "<td class=\"text-left\"> {$consultant['username']} </td>";
        $consultant_list .= "<td class=\"text-left\"> {$consultant['firstName']} </td>";
        $consultant_list .= "<td class=\"text-left\"> {$consultant['lastName']} </td>";
        $consultant_list .= "<td class=\"text-left\"> {$consultant['email']} </td>";
        $consultant_list .= "<td class=\"text-left\"> {$consultant['title']} </td>";
        $consultant_list .= "<td class=\"text-left\"> <a href=\"item.php?con_id={$_GET['consultant_id']}&con_title={$_GET['title']}&con_name={$_GET['firstName']}\"> go to this consultant </a> </td>";
        $consultant_list .= "<td class=\"text-left\"> <a href=\"components/delete_item.php?con_id={$consultant['consultant_id']}\" onclick = \"return confirm('Are you sure to delete?');\"> Delete </a> </td>";
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
    <title>Consultants</title>
    <link rel="stylesheet" href="css/tables.css">
</head>

<body>
    <div class="table-title">
        <h3>consultants</h3>
        <a href="addConsultantInfo.php">add consultants+</a>
    </div>
   
    <table class="table-fill">
        <tr>
            <th class="text-left">consultant ID</th>
            <th class="text-left">User Name</th>
            <th class="text-left">First Name</th>
            <th class="text-left">Last Name</th>
            <th class="text-left">Email</th>
            <th class="text-left">Title</th>
            <th class="text-left">Modify consultant</th>
            <th class="text-left">Remove</th>
        </tr>
        <tr>
            <?php echo $consultant_list; ?>
        </tr>
    </table>

</body>

</html>

<?php mysqli_close($connection); ?>