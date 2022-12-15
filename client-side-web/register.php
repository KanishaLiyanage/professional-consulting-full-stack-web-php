<?php require_once('../connection/dbconnection.php'); ?>

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

        <form action="signup-check.php" method="post">

            <h2 class="title">REGISTER</h2>

            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>

            <label>First Name</label>
            <?php if (isset($_GET['firstname'])) { ?>
                <input type="text" name="firstname" placeholder="First Name" value="<?php echo $_GET['firstname']; ?>"><br>
            <?php } else { ?>
                <input type="text" name="firstname" placeholder="First Name"><br>
            <?php } ?>

            <label>Last Name</label>
            <?php if (isset($_GET['lastname'])) { ?>
                <input type="text" name="lastname" placeholder="Last Name" value="<?php echo $_GET['lastname']; ?>"><br>
            <?php } else { ?>
                <input type="text" name="lastname" placeholder="Last Name"><br>
            <?php } ?>

            <label>User Name</label>
            <?php if (isset($_GET['uname'])) { ?>
                <input type="text" name="uname" placeholder="User Name" value="<?php echo $_GET['uname']; ?>"><br>
            <?php } else { ?>
                <input type="text" name="uname" placeholder="User Name"><br>
            <?php } ?>

            <label>Mobile No</label>
            <?php if (isset($_GET['mobileNo'])) { ?>
                <input type="text" name="mobileNo" placeholder="Mobile no" value="<?php echo $_GET['mobileNo']; ?>"><br>
            <?php } else { ?>
                <input type="text" name="mobileNo" placeholder="Mobile no"><br>
            <?php } ?>

            <label>Email</label>
            <?php if (isset($_GET['email'])) { ?>
                <input type="email" name="email" placeholder="User Email" value="<?php echo $_GET['email']; ?>"><br>
            <?php } else { ?>
                <input type="email" name="email" placeholder="User Email"><br>
            <?php } ?>


            <label>Profession</label>
            <?php if (isset($_GET['profession'])) { ?>
                <input type="text" name="profession" placeholder="Enter the Profession" value="<?php echo $_GET['profession']; ?>"><br>
            <?php } else { ?>
                <input type="text" name="profession" placeholder="profession"><br>
            <?php } ?>

            <label>Upload Profile Picture</label>
            <?php if (isset($_GET['image'])) { ?>
                <input type="file" name="image" placeholder="Upload photo" value="<?php echo $_GET['image']; ?>"><br>
            <?php } else { ?>
                <input type="file" name="image" placeholder="Upload photo"><br>
            <?php } ?>

            <label>Password</label>
            <input type="password" name="password" placeholder="Password"><br>

            <label>Reenter Password</label>
            <input type="password" name="reenter password" placeholder="Re_Password"><br>

            <button type="submit">Sign Up</button>
            <a href="Loginindex.php" class="ca">Already have an account?</a>
        </form>

    </div>

</body>

</html>