<?php session_start(); ?>
<?php require_once('../connection/dbconnection.php'); ?>


<?php

$customer_list = "";

$query = "SELECT * FROM customers
          WHERE
          isDeleted = 0
          ORDER BY
          customer_id";

$customers = mysqli_query($connection, $query);

if ($customers) {
    while ($customer = mysqli_fetch_assoc($customers)) {

        $_GET['customer_id'] = $customer['customer_id'];
        $_GET['username'] = $customer['username'];
        $_GET['firstName'] = $customer['firstName'];
        $_GET['lastName'] = $customer['lastName'];
        $_GET['title'] = $customer['profession'];
        $_GET['ratings'] = $customer['package'];

        $customer_list .= "<tbody>";
        $customer_list .= "<tr>";
        $customer_list .= "<td class=\"text-left\"> {$customer['customer_id']} </td>";
        $customer_list .= "<td class=\"text-left\"> {$customer['username']} </td>";
        $customer_list .= "<td class=\"text-left\"> {$customer['profession']} </td>";
        $customer_list .= "<td class=\"text-left\"> {$customer['package']} </td>";
        // $customer_list .= "<td class=\"text-left\"> <a href=\"item.php?con_id={$_GET['customer_id']}&con_title={$_GET['title']}&con_name={$_GET['firstName']}\"> go to this customer </a> </td>";
        $customer_list .= "<td class=\"text-left\"> <a href=\"components/delete_item.php?con_id={$customer['customer_id']}\" onclick = \"return confirm('Are you sure to delete?');\"> Delete </a> </td>";
        $customer_list .= "</tr>";
        $customer_list .= "</tbody>";
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
    <link rel="stylesheet" href="./css/testClients.css">
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
                    <a href="#" class="btn">Add New</a>
                    <img src="img/notifications.png" alt="">
                    <div class="img-case">
                        <img src="img/user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="content-2">
                <div class="clients">
                    <div class="title">
                        <h2>Detail of clients</h2>
                    </div>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Profession</th>
                            <th>Package</th>
                            <th>Option</th>
                        </tr>
                        <tr>
                            <?php echo $customer_list; ?>
                        </tr>
                        <!-- <td><a href="#" class="btn">Delete</a></td> -->
                    </table>
                </div>
            </div>
        </div>
</body>

</html>