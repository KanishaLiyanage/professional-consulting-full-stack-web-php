<?php session_start(); ?>
<?php require_once('../../connection/dbconnection.php'); ?>

<?php

if (isset($_POST['update'])) {

    $fname = mysqli_real_escape_string($connection, $_POST['fname']);
    $lname = mysqli_real_escape_string($connection, $_POST['lname']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $prof = mysqli_real_escape_string($connection, $_POST['prof']);
    $mNo = mysqli_real_escape_string($connection, $_POST['mNo']);
    $pkg = mysqli_real_escape_string($connection, $_POST['pkg']);

    echo $fname;

    $updateQuery = "UPDATE customers
                    SET
                    firstName = '{$fname}',
                    lastName = '{$lname}',
                    email = '{$email}',
                    profession = '{$prof}',
                    mobileNo = '{$mNo}',
                    package = '{$pkg}'
                    WHERE
                    customer_id = 1
                    LIMIT 1";

    $result = mysqli_query($connection, $updateQuery);

    if ($result) {

        header("location: ../profile.php");

    } else {

        echo "Failed to update records!";

    }
}

?>

<?php mysqli_close($connection); ?>