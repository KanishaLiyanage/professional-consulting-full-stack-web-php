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
                $mNO = mysqli_real_escape_string($connection, $_POST['mobileNo']);

                $query = "INSERT INTO consultants(consultantUsername, consultantFirstName, consultantLastName, consultantEmail, password, consultantMobileNo, image, title, description, availability)
                          VALUES ('{$user_name}', '{$first_Name}', '{$last_Name}', '{$con_email}', '{$pw}', '{$mNO}', '{$new_img_name}', '{$con_title}', '{$desc}', '{$avl}')";

                $result = mysqli_query($connection, $query);

                if ($result) {
                    //$consultant = mysqli_fetch_assoc($result);
                    // $_SESSION['con_id'] = $consultant['consultant_id'];
                    // $_SESSION['con_username'] = $consultant['consultantUsername'];
                    header("Location: consultantLogin.php");
                }
            } else {
                echo "File extension can not be allowed! Please upload jpg files only.";
            }
        }
    } else {
        echo "Error in Image file!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./css/signUp.css">
</head>

<body>

    <div class="bodyclass">

        <form action="./consultantSignUp.php" method="post" enctype="multipart/form-data">
            <h2>SIGN UP</h2>

            <label>User Name</label>
            <input type=" text" name="username" placeholder="User Name"><br>

            <label>First Name</label>
            <input type="text" name="firstName" placeholder="First Name"><br>

            <label>Last Name</label>
            <input type="text" name="lastName" placeholder="Last Name"><br>

            <label>Email</label>
            <input type="email" name="email" placeholder="User Email"><br>

            <label>Mobile No</label>
            <input type="text" name="mobileNo" placeholder="Mobile no"><br>

            <label>Password</label>
            <input type="password" name="password" placeholder="Password"><br>

            <label>Image</label>
            <input type="file" name="image" placeholder="Upload photo"><br>

            <label>Title</label>
            <input type="text" name="title" placeholder="Title"><br>

            <label>Description</label>
            <input type="text" name="description" placeholder="Description"><br>

            <label>Availability</label>
            <input type="text" name="availability" placeholder="Availability"><br>

            <button type="submit" name="signup">Sign Up</button>

            <a href="consultantLogin.php" class="ca">Already have an account?</a>

        </form>

    </div>

</body>

</html>

<?php mysqli_close($connection); ?>