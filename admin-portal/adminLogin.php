<?php session_start(); ?>
<?php require_once('../connection/dbconnection.php'); ?>

<?php

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['pw']);

    $query = "SELECT * FROM admins
              WHERE email = '{$email}'
              AND
              password = '{$password}'
              AND
              isDeleted = 0
              LIMIT 1";

    $result = mysqli_query($connection, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $admin = mysqli_fetch_assoc($result);
            $_SESSION['ad_id'] = $admin['admin_id'];
            $_SESSION['ad_username'] = $admin['username'];
            header("Location: dashboard.php");
        }
    } else {
        echo "Login Failed!";
    }
    // echo "Logged in successfuly!";
} else {
    echo "Failed to Login!";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="css/signin.css">
</head>

<body>

    <a href="index.php"> back </a>

    <div class="login-page">
        <p>Login as an Admin</p>
        <div class="form">
            <form class="login-form" action="adminLogin.php" method="POST" autocomplete="off">
                <label for="email">Email</label><br>
                <input type="email" name="email" placeholder="email" required><br>
                <label for="password">Password</label><br>
                <input type="password" name="pw" placeholder="password" required><br>
                <button type="submit" name="login">login</button>
            </form>
        </div>
    </div>

</body>

</html>

<?php mysqli_close($connection); ?>