<?php session_start(); ?>
<?php require_once('../connection/dbconnection.php'); ?>

<?php

if (isset($_POST['login'])) {
    $uName = mysqli_real_escape_string($connection, $_POST['uName']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    $query = "SELECT * FROM customers
              WHERE customerUsername = '{$uName}'
              AND
              password = '{$password}'
              AND
              isDeleted = 0
              LIMIT 1";

    $result = mysqli_query($connection, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $customer = mysqli_fetch_assoc($result);
            $_SESSION['cus_id'] = $customer['customer_id'];
            header("Location: home.php");
        }
    } else {
        echo "Login Failed!";
    }
    // echo "Logged in successfuly!";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/userLogin.css">
    <title>ConsultPro | Login</title>
</head>

<body>

    <form action="./userLogin.php" method="post">

        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>Username</label>
        <input type="text" name="uName" placeholder="Username" required><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password" required><br>

        <button type="submit" name="login">Login</button>
        <a href="./register.php" class="ca">Create an account</a>

    </form>

</body>

</html>