<?php session_start(); ?>
<?php require_once('../../connection/dbconnection.php'); ?>
<?php

if (!isset($_SESSION['ad_id'])) {
    header('Location: ../adminLogin.php');
} else {
    if (isset($_GET['con_id'])) {

        $con_id = mysqli_real_escape_string($connection, $_GET['con_id']);

        $query = "UPDATE consultants
                  SET isDeleted = 1
                  WHERE consultant_id = '{$con_id}'
                  LIMIT 1";

        $result = mysqli_query($connection, $query);

        if ($result) {
            header('Location: ../consultants.php?message=consultant_deleted');
        } else {
            header('Location: ../consultants.php?error=consultant_delete_failed');
        }
    } else {
        header('Location: ../consultants.php');
    }
}

?>

<?php mysqli_close($connection); ?>