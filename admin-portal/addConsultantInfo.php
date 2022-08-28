<?php session_start(); ?>
<?php require_once('../connection/dbconnection.php'); ?>

<?php

if (isset($_POST['submit']) && isset($_FILES['image'])) {

    $image_name = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $errors = $_FILES['image']['error'];

    if($errors === 0){

        if($image_size > 12500000){

            echo "File is too large!";

        }else{

            $img_extension = pathinfo($image_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_extension);

            $allowed_extensions = array("jpg", "jpeg", "png");

            if(in_array($img_ex_lc, $allowed_extensions)){

                $new_img_name = uniqid("CONSULTANT-", true) . "." . $img_ex_lc;
                $img_upload_path = '../assets/uploads/profile_pics/' . $new_img_name;

                move_uploaded_file($tmp_name, $img_upload_path);

                $username = mysqli_real_escape_string($connection, $_POST['username']);
                $firstName = mysqli_real_escape_string($connection, $_POST['firstName']);
                $lastName = mysqli_real_escape_string($connection, $_POST['lastName']);
                $email = mysqli_real_escape_string($connection, $_POST['email']);
                $password = mysqli_real_escape_string($connection, $_POST['password']);
                $title = mysqli_real_escape_string($connection, $_POST['title']);
                $description = mysqli_real_escape_string($connection, $_POST['description']);
                $availability = mysqli_real_escape_string($connection, $_POST['availability']);
            
                $query = "INSERT INTO consultants(username, firstName, lastName, email, password, image, title, description, ratings, availability)
                          VALUES ('{$username}', '{$firstName}', '{$lastName}', '{$email}', '{$password}', '{$title}', '{$description}', '0.0', '{$availability}')";
            
                $result = mysqli_query($connection, $query);
            
                if($result){
                    echo "Details Added!";
                }else{
                    echo "Failed to add!";
                }

            }

        }

    }else{
        echo "Error occured!";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultant Info</title>
</head>

<body>
    <center>

    <h1>Add Consultant Details</h1>

    <form action="addConsultantInfo.php" method="POST" enctype="multipart/form-data">

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

        <input type="submit" name="submit" value="Add Details">

    </form>

    </center>

</body>

</html>

<?php mysqli_close($connection); ?>