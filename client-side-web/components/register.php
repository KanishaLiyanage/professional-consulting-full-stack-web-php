<?php session_start(); ?>
<?php require_once('../../connection/dbconnection.php'); ?>

<?php

if (
    isset($_POST['uname']) && isset($_POST['email']) && isset($_POST['password'])
    && isset($_POST['firstname']) && isset($_POST['re_password'])
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
    $firstname = validate($_POST['firstname']);
    $lastname = validate($_POST['lastname']);
    $mobileNo = validate($_POST['mobileNo']);
    $profession = validate($_POST['profession']);
    $image = validate($_POST['image']);

    $user_data = 'uname=' . $uname . '&firstname=' . $firstname . '&lastname=' . $lastname;


    if (empty($uname)) {
        header("Location: signup.php?error=User Name is required&$user_data");
        exit();
    } else if (empty($email)) {
        header("Location: signup.php?error=The enter valid email&$email");
        exit();
    } else if (empty($pass)) {
        header("Location: signup.php?error=Password is required&$user_data");
        exit();
    } else if (empty($re_pass)) {
        header("Location: signup.php?error=Re Password is required&$user_data");
        exit();
    } else if (empty($firstname)) {
        header("Location: signup.php?error=First Name is required&$user_data");
        exit();
    } else if (empty($image)) {
        header("Location: signup.php?error=First Name is required&$user_data");
        exit();
    } else if (empty($mobileNo)) {
        header("Location: signup.php?error=Profile Picture uploading is required&$user_data");
        exit();
    } else if (empty($profession)) {
        header("Location: signup.php?error=Mobile number is required&$user_data");
        exit();
    } else if (empty($lastname)) {
        header("Location: signup.php?error=Last Name is required&$user_data");
        exit();
    } else if ($pass !== $re_pass) {
        header("Location: signup.php?error=The confirmation password  does not match&$user_data");
        exit();
    } else {

        // hashing the password
        $pass = md5($pass);

        $sql = "SELECT * FROM users WHERE username='$uname' AND email='$email' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: signup.php?error=The username or email is taken try another&$user_data");
            exit();
        } else {
            //$sql2 = "INSERT INTO users(email, username, password, firstname, lastname, mobileNo, profession, image ) VALUES('$email','$uname', '$pass', '$firstname','$lastname','$mobileNo', '$profession', '$image')";
            $sql2 = "INSERT INTO users(firstname, lastname, username, email,  password, profession, mobileNo  ) VALUES('$firstname', '$lastname', '$uname', '$email', '$pass', '$profession', '$mobileNo')";

            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                header("Location: signup.php?success=Your account has been created successfully");
                exit();
            } else {
                header("Location: signup.php?error=unknown error occurred&$user_data");
                exit();
            }
        }
    }
} else {
    header("Location: signup.php");
    exit();
}
