<?php session_start(); ?>
<?php require_once('../connection/dbconnection.php'); ?>

<?php

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['pw']);

    $query = "SELECT * FROM consultants
              WHERE email = '{$email}'
              AND
              password = '{$password}'
              AND
              isDeleted = 0
              LIMIT 1";

    $result = mysqli_query($connection, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $consultant = mysqli_fetch_assoc($result);
            $_SESSION['con_id'] = $consultant['consultant_id'];
            $_SESSION['con_username'] = $consultant['username'];
            header("Location: consultantDashboard.php");
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
    <link rel="stylesheet" href="css/login.css">
    <title>ConsultPro | Login Consultant</title>
</head>

<body>

    <form action="consultantLogin.php" method="post">

        <h2>LOGIN AS CONSULTANT</h2>

        <label for="email">Email</label><br>
        <input type="email" name="email" placeholder="email" required><br>
        <label for="password">Password</label><br>
        <input type="password" name="pw" placeholder="password" required><br>
        <button type="submit" name="login">login</button>
        <p class="message">Don't you have an account? <a href="consultantSignUp.php"> Sign Up</a></p>

    </form>

</body>

</html>

<?php mysqli_close($connection); ?>