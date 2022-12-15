<?php session_start(); ?>
<?php require_once('../../connection/dbconnection.php'); ?>

<?php

if (!isset($_SESSION['cus_id'])) {
    header("Location: ../userLogin.php");
}

?>

<?php

$consultantID = $_GET['con_id'];
$customerID = $_SESSION['cus_id'];

echo $consultantID;

$query = "INSERT INTO orders(customer_id, consultant_id)
          VALUES ('{$customerID}', '{$consultantID}')";

$result = mysqli_query($connection, $query);

if ($result) {
    header('Location: hireSuccessful.php');
}

?>