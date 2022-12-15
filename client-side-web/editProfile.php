<?php session_start(); ?>
<?php require_once('../connection/dbconnection.php'); ?>

<?php

$fname = "";
$lname = "";
$email = "";
$prof = "";
$mNo = "";
$pkg = "";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <title>ConsultPro | Edit Profile</title>
</head>

<body>

    <?php

    $query = "SELECT * FROM customers
              WHERE
              customer_id = 1
              AND
              isDeleted = 0
              LIMIT 1";

    $result = mysqli_query($connection, $query);

    if ($result) { ?>

        <?php

        if (mysqli_num_rows($result) > 0) { ?>

            <?php while ($record = mysqli_fetch_array($result)) {

                $fname = $record['firstName'];
                $lname = $record['lastName'];
                $email = $record['email'];
                $prof = $record['profession'];
                $mNo = $record['mobileNo'];
                $pkg = $record['package'];

            ?>

                <div class="profileContainer">

                    <form action="../client-side-web/components/updateProfile.php" method="post">

                        <div class="container rounded bg-white mt-5 mb-5">
                            <div class="row">
                                <div class="col-md-3 border-right">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                        <img class="rounded-circle mt-5" width="150px" src="../assets/uploads/client_profile_pics/<?php echo $record['image']; ?>" alt="<?php echo $record['image']; ?>">
                                        <span class="font-weight-bold"><?php echo $record['username'] ?></span>
                                        <span class="text-black-50"><?php echo $record['email'] ?></span>
                                        <span> </span>
                                    </div>
                                </div>
                                <div class="col-md-5 border-right">
                                    <div class="p-3 py-5">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="text-right">Profile Settings</h4>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6"><label class="labels">First Name</label>
                                                <input type="text" name="fname" class="form-control" placeholder="first name" value="<?php echo $fname ?>">
                                            </div>
                                            <div class="col-md-6"><label class="labels">Last Name</label>
                                                <input type="text" name="lname" class="form-control" value="<?php echo $lname ?>" placeholder="last name">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12"><label class="labels">Email</label>
                                                <input type="email" name="email" class="form-control" placeholder="enter email" value="<?php echo $email ?>">
                                            </div>
                                            <div class="col-md-12"><label class="labels">Mobile Number</label>
                                                <input type="text" name="mNo" class="form-control" placeholder="enter phone number" value="<?php echo $record['mobileNo'] ?>">
                                            </div>
                                            <div class="col-md-12"><label class="labels">Profession</label>
                                                <input type="text" name="prof" class="form-control" placeholder="enter profession" value="<?php echo $prof ?>">
                                            </div>
                                            <div class="col-md-12"><label class="labels">Change Package</label>
                                                <input type="text" name="pkg" class="form-control" placeholder="package" value="<?php echo $pkg ?>">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 py-5">
                                        <div class="d-flex justify-content-between align-items-center experience">
                                            <span>Update Profile</span>
                                        </div><br>
                                        <input class="btn btn-primary profile-button" type="submit" name="update" value="Save Profile">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>

            <?php } ?>

    <?php }
    } else {
        echo "DB failed!";
    }

    ?>

</body>

</html>

<?php mysqli_close($connection); ?>