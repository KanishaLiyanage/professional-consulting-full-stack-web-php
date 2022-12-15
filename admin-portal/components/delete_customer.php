<?php session_start(); ?>
<?php require_once('../../connection/dbconnection.php'); ?>
<?php

if (!isset($_SESSION['ad_id'])) {
    header('Location: ../adminLogin.php');
} else {
    if (isset($_GET['cus_id'])) {

        $cus_id = mysqli_real_escape_string($connection, $_GET['cus_id']);

        $query = "UPDATE customers
                  SET isDeleted = 1
                  WHERE customer_id = '{$cus_id}'
                  LIMIT 1";

        $result = mysqli_query($connection, $query);

        if ($result) {
            header('Location: ../clients.php?message=customer_deleted');
        } else {
            header('Location: ../clients.php?error=customer_delete_failed');
        }
    } else {
        header('Location: ../clients.php');
    }
}

?>

<?php mysqli_close($connection); ?>