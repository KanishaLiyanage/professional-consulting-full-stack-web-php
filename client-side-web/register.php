<?php session_start(); ?>
<?php require_once('../connection/dbconnection.php'); ?>

<?php

if (isset($_POST['submit']) && isset($_FILES['image'])) {

    $image_name = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $errors = $_FILES['image']['error'];

    if ($errors === 0) {

        if ($image_size > 12500000) {

            echo "File is too large!";
        } else {

            $img_extension = pathinfo($image_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_extension);

            $allowed_extensions = array("jpg", "jpeg");

            if (in_array($img_ex_lc, $allowed_extensions)) {

                $new_img_name = uniqid("CUSTOMER_IMG-", true) . "." . $img_ex_lc;
                $img_upload_path = '../assets/uploads/client_profile_pics/' . $new_img_name;

                move_uploaded_file($tmp_name, $img_upload_path);

                $firstname = mysqli_real_escape_string($connection, $_POST['firstname']);
                $lastname = mysqli_real_escape_string($connection, $_POST['lastname']);
                $uname = mysqli_real_escape_string($connection, $_POST['uname']);
                $email = mysqli_real_escape_string($connection, $_POST['email']);
                $password = mysqli_real_escape_string($connection, $_POST['password']);
                $profession = mysqli_real_escape_string($connection, $_POST['profession']);
                $mobileNo = mysqli_real_escape_string($connection, $_POST['mobileNo']);

                //$encrypted_password = sha1($upw);

                $query = "INSERT INTO customers(customerFirstName, customerLastName, customerUsername, customerEmail, password, image, profession, customerMobileNo)
                          VALUES ('{$firstname}','{$lastname}','{$uname}','{$email}','{$password}','{$new_img_name}','{$profession}','{$mobileNo}')";

                $result = mysqli_query($connection, $query);

                if ($result) {
                    // $customer = mysqli_fetch_assoc($result);
                    // $_SESSION['cus_id'] = $customer['customer_id'];
                    header("Location: ./userLogin.php");
                }
            } else {
                echo "File extension can not be allowed! Please upload jpg files only.";
            }
        }
    } else {
        echo "Error in Image file!";
    }
} else {
    echo "There is an error in your inputs!";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/userLogin.css">
    <title>ConsultPro | Register</title>
</head>

<body>

    <div class="registerCard">

        <form action="./register.php" method="post" enctype="multipart/form-data">

            <h2 class="title">REGISTER</h2>

            <label>First Name</label>
            <input type="text" name="firstname" placeholder="First Name"><br>

            <label>Last Name</label>
            <input type="text" name="lastname" placeholder="Last Name"><br>

            <label>User Name</label>
            <input type="text" name="uname" placeholder="User Name"><br>

            <label>Mobile No</label>
            <input type="text" name="mobileNo" placeholder="Mobile no"><br>

            <label>Email</label>
            <input type="email" name="email" placeholder="User Email"><br>

            <label>Profession</label>
            <input type="text" name="profession" placeholder="profession"><br>

            <label>Upload Profile Picture</label>
            <input type="file" name="image" placeholder="Upload photo"><br>

            <label>Password</label>
            <input type="password" name="password" placeholder="Password"><br>

            <input type="submit" name="submit" value="Sign Up">

            <a href="userLogin.php" class="ca">Already have an account?</a>
        </form>

    </div>

</body>

</html>