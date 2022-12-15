<?php session_start(); ?>
<?php require_once('../../connection/dbconnection.php'); ?>

<?php

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: Loginindex.php?error=User Name is required");
        exit();
    } else if (empty($pass)) {
        header("Location: Loginindex.php?error=Password is required");
        exit();
    } else {
        // hashing the password
        $pass = md5($pass);

        $sql = "SELECT * FROM customers
                WHERE
                username = '$uname'
                AND
                password ='$pass'";

        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['firstName'];
                $_SESSION['id'] = $row['customer_id'];
                header("Location: ../home.php");
                exit();
            } else {
                header("Location: Loginindex.php?error=Incorect User name or password");
                exit();
            }
        } else {
            header("Location: Loginindex.php?error=Incorect User name or password");
            exit();
        }
    }
} else {
    header("Location: Loginindex.php");
    exit();
}
