<?php session_start(); ?>
<?php require_once('../connection/dbconnection.php'); ?>

<?php

if (!isset($_SESSION['con_id'])) {
    header("Location: consultantLogin.php");
}

$consultant_id = $_SESSION['con_id'];

?>

<?php

$order_list = "";

$query = "SELECT
          orders.*,
          customers.*,
          consultants.*
          FROM
          orders
          INNER JOIN consultants ON orders.consultant_id = consultants.consultant_id
          INNER JOIN customers ON orders.customer_id = customers.customer_id
          WHERE orders.consultant_id = '{$consultant_id}'
          ORDER BY
          orders.order_id ASC";

$orders = mysqli_query($connection, $query);

if ($orders) {
    while ($order = mysqli_fetch_assoc($orders)) {

        $_GET['consultant_id'] = $order['consultant_id'];
        $_GET['title'] = $order['title'];
        $_GET['ratings'] = $order['ratings'];

        $order_list .= "<tbody>";
        $order_list .= "<tr>";
        $order_list .= "<td class=\"text-left\"> {$order['customerUsername']} </td>";
        $order_list .= "<td class=\"text-left\"> {$order['customerMobileNo']} </td>";
        $order_list .= "<td class=\"text-left\"> {$order['orderedDate']} </td>";
        $order_list .= "<td class=\"text-left\"> {$order['shipmentDate']} </td>";
        // $consultant_list .= "<td class=\"text-left\"> <a href=\"item.php?con_id={$_GET['consultant_id']}&con_title={$_GET['title']}&con_name={$_GET['firstName']}\"> go to this consultant </a> </td>";
        $order_list .= "<td class=\"text-left\"> <a href=\"components/completed.php?con_id={$order['consultant_id']}\" onclick = \"return confirm('Are you sure to complete the order?');\"> Completed </a> </td>";
        $order_list .= "</tr>";
        $order_list .= "</tbody>";
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
    <link rel="stylesheet" href="./css/reservations.css">
    <title>ConsultPro | Consultant Dashboard </title>
</head>

<body>

    <?php require_once('./components/sideMenuConsultant.php'); ?>

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
                        <h2>My Reservations</h2>
                    </div>
                    <table>
                        <tr>
                            <!-- <th>Order ID</th> -->
                            <th>Customer Name</th>
                            <th>Mobile Number</th>
                            <th>Ordered Date</th>
                            <th>Service Date</th>
                            <th>Status</th>
                        </tr>
                        <tr>
                            <?php echo $order_list; ?>
                        </tr>
                        <!-- <td><a href="#" class="btn">Delete</a></td> -->
                    </table>
                </div>
            </div>
        </div>
</body>

</html>