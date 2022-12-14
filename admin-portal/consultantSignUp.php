<?php session_start(); ?>
<?php require_once('../connection/dbconnection.php'); ?>

<?php

if (isset($_POST['signup']) && isset($_FILES['image'])) {

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

                $new_img_name = uniqid("CONSULTANT-", true) . "." . $img_ex_lc;
                $img_upload_path = '../assets/uploads/profile_pics/' . $new_img_name;

                move_uploaded_file($tmp_name, $img_upload_path);

                $user_name = mysqli_real_escape_string($connection, $_POST['username']);
                $first_Name = mysqli_real_escape_string($connection, $_POST['firstName']);
                $last_Name = mysqli_real_escape_string($connection, $_POST['lastName']);
                $con_email = mysqli_real_escape_string($connection, $_POST['email']);
                $pw = mysqli_real_escape_string($connection, $_POST['password']);
                $con_title = mysqli_real_escape_string($connection, $_POST['title']);
                $desc = mysqli_real_escape_string($connection, $_POST['description']);
                $avl = mysqli_real_escape_string($connection, $_POST['availability']);
            
                $query = "INSERT INTO consultants(username, firstName, lastName, email, password, image, title, description, availability) VALUES ('{$user_name}', '{$first_Name}', '{$last_Name}', '{$con_email}', '{$pw}', '{$con_title}', '{$desc}', '{$avl}')";
            
                $result = mysqli_query($connection, $query);

                if ($result) {
                    $consultant = mysqli_fetch_assoc($result);
                    $_SESSION['con_id'] = $consultant['consultant_id'];
                    $_SESSION['con_username'] = $consultant['username'];
                    header("Location: consultantDashboard.php");
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
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/signup.css">
</head>

<body>

    <a href="consultantLogin.php"> back </a>

    <form action="consultantSignUp.php" method="POST" enctype="multipart/form-data">

        <h1>Sign Up as a Consultant</h1>

        User Name: <input type="text" name="username" maxlength="50" required>
        <br>
        First Name: <input type="text" name="firstName" maxlength="50" required>
        <br>
        Last Name: <input type="text" name="lastName" maxlength="50" required>
        <br>
        Email: <input type="email" name="email" required>
        <br>
        Password: <input type="password" name="password" required>
        <br>
        Image: <input type="file" name="image" required>
        <br>
        Title: <input type="text" name="title" required>
        <br>
        Description: <textarea name="description" rows="4" cols="50" required></textarea>
        <br>
        Availability: <input type="text" name="availability" required>
        <br>

        <button type="submit" name="signup">Sign Up</button>

    </form>

</body>

</html>

<?php mysqli_close($connection); ?>