<?php session_start(); ?>
<?php require_once('../connection/dbconnection.php'); ?>



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
    <title>ConsultPro | My Profile</title>
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

                $_GET['cus_id'] = $record['customer_id'];


            ?>

                <div class="profileContainer">

                    <div class="container rounded bg-white mt-5 mb-5">
                        <div class="row">
                            <div class="col-md-3 border-right">
                                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                    <img class="rounded-circle mt-5" width="150px" src="../assets/uploads/client_profile_pics/<?php echo $record['image'];?>" alt="<?php echo $record['image'];?>">
                                    <span class="font-weight-bold"><?php echo $record['customerUsername'] ?></span>
                                    <span class="text-black-50"><?php echo $record['customerEmail'] ?></span>
                                    <span> </span>
                                </div>
                            </div>
                            <div class="col-md-5 border-right">
                                <div class="p-3 py-5">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4 class="text-right">My Profile</h4>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-6"><label class="labels">First Name</label>
                                            <p><?php echo $record['customerFirstName'] ?></p>
                                        </div>
                                        <div class="col-md-6"><label class="labels">Last Name</label>
                                            <p><?php echo $record['customerLastName'] ?></p>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12"><label class="labels">Email</label>
                                            <p><?php echo $record['customerEmail'] ?></p>
                                        </div>
                                        <div class="col-md-12"><label class="labels">Mobile Number</label>
                                            <p><?php echo $record['customerMobileNo'] ?></p>
                                        </div>
                                        <div class="col-md-12"><label class="labels">Profession</label>
                                            <p><?php echo $record['profession'] ?></p>
                                        </div>
                                        <div class="col-md-12"><label class="labels">Package</label>
                                            <p><?php echo $record['package'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 py-5">
                                    <div class="d-flex justify-content-between align-items-center experience">
                                        <span>Go To Profile Settings</span>
                                        <span class="border px-3 p-1 add-experience">
                                            <a href="./editProfile.php">
                                                <i class="fa fa-plus"></i>&nbsp;Edit Profile
                                            </a>
                                        </span>
                                    </div>
                                    <br>
                                    <div class="col-md-12">
                                        <label class="labels">Account Created On</label>
                                        <p><?php echo $record['createdDate'] ?></p>
                                    </div><br>
                                    <div class="col-md-12">
                                        <label class="labels">Transaction Details</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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