<?php session_start(); ?>
<?php require_once('../../connection/dbconnection.php'); ?>

<?php

if (
    isset($_POST['uname']) && isset($_POST['email']) && isset($_POST['password'])
    && isset($_POST['firstName']) && isset($_POST['re_password'])
) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);

    $re_pass = validate($_POST['re_password']);
    $firstName = validate($_POST['firstName']);
    $lastName = validate($_POST['lastName']);
    $mobileNo = validate($_POST['mobileNo']);
    $profession = validate($_POST['profession']);
    $image = validate($_POST['image']);

    $user_data = 'uname=' . $uname . '&firstName=' . $firstName . '&lastName=' . $lastName;


    if (empty($uname)) {
        header("Location: userRegistration.php?error=User Name is required&$user_data");
        exit();
    } else if (empty($email)) {
        header("Location: userRegistration.php?error=The enter valid email&$email");
        exit();
    } else if (empty($pass)) {
        header("Location: userRegistration.php?error=Password is required&$user_data");
        exit();
    } else if (empty($re_pass)) {
        header("Location: userRegistration.php?error=Re Password is required&$user_data");
        exit();
    } else if (empty($firstName)) {
        header("Location: userRegistration.php?error=First Name is required&$user_data");
        exit();
    } else if (empty($image)) {
        header("Location: userRegistration.php?error=First Name is required&$user_data");
        exit();
    } else if (empty($mobileNo)) {
        header("Location: userRegistration.php?error=Profile Picture uploading is required&$user_data");
        exit();
    } else if (empty($profession)) {
        header("Location: userRegistration.php?error=Mobile number is required&$user_data");
        exit();
    } else if (empty($lastName)) {
        header("Location: userRegistration.php?error=Last Name is required&$user_data");
        exit();
    } else if ($pass !== $re_pass) {
        header("Location: userRegistration.php?error=The confirmation password  does not match&$user_data");
        exit();
    } else {

        // hashing the password
        $pass = md5($pass);

        $sql = "SELECT * FROM customers WHERE customerUsername='$uname' AND customerEmail='$email' ";
        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: signup.php?error=The username or email is taken try another&$user_data");
            exit();
        } else {
            $sql2 = "INSERT INTO customers(customerEmail, customerUsername, password, customerFirstName, customerLastName, customerMobileNo, profession, image )
                     VALUES('$email','$uname', '$pass', '$firstName','$lastName','$mobileNo', '$profession', '$image')";
            //$sql2 = "INSERT INTO users(customerFirstName, customerLastName, customerUsername, customerEmail,  password, profession, customerMobileNo  ) VALUES('$firstName', '$lastName', '$uname', '$email', '$pass', '$profession', '$mobileNo')";

            $result2 = mysqli_query($connection, $sql2);
            if ($result2) {
                header("Location: ../userLogin.php?success=Your account has been created successfully");
                exit();
            } else {
                header("Location: userRegistration.php?error=unknown error occurred&$user_data");
                exit();
            }
        }
    }
} else {
    header("Location: userRegistration.php");
    exit();
}
