<?php session_start(); ?>
<?php require_once('../../connection/dbconnection.php'); ?>

<?php

$consultantID = $_GET['con_id'];
$customerID = 1;

echo $consultantID;

$query = "INSERT INTO orders(customer_id, consultant_id)
          VALUES ('{$consultantID}', '{$customerID}')";

$result = mysqli_query($connection, $query);

if ($result) {
    header('Location: hireSuccessful.php');
}

?>