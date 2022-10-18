<?php require_once('../connection/dbconnection.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Consultants</title>
</head>

<body>
    <?php

    $query = "SELECT * FROM consultants
      WHERE isDeleted = 0";

    $result = mysqli_query($connection, $query);

    if ($result) { ?>

        <div class="avlMsg">
            <?php echo mysqli_num_rows($result) . " Consultant Available <br>"; ?>
        </div>

        <?php

        if (mysqli_num_rows($result) > 0) { ?>

            <div class="gridContainer">

                <?php while ($record = mysqli_fetch_array($result)) {

                    $_GET['con_id'] = $record['consultant_id'];

                ?>

                    <div class="consultant-card">
                        <a class="linkedPage" href="consultantProfile.php?con_id=<?= $_GET['con_id'] ?>">
                            <div class="consultant-tumb">
                                <img class="itemImage" src="../../assets/uploads/profile_pics/<?php echo $record['image']; ?>" alt="<?php echo $record['firstName']; ?>">
                            </div>
                            <div class="consultant-details">
                                <span class="consultant-catagory"><?php echo $record['firstName'] . " " . $record['lastName'] ?></span>
                                <div class="buyBtnBox"> <a class="buyBtn" href="consultantProfile.php?con_id=<?= $_GET['con_id'] ?>"> Hire </a> </div>
                                <h4>
                                    <p><?php echo $record['title'] ?></p>
                                </h4>
                                <?php $desc = $record['description'] ?>
                                <p><?php echo substr($desc, 0, 100) . " ..." ?></p>
                                <!-- <div class="consultant-bottom-details">
                            <div class="consultant-links">
                                <a href="favFunction.php?con_id=<?= $_GET['con_id'] ?>"><i class="fa fa-heart"></i></a>
                                <a href="cartFunction.php?con_id=<?= $_GET['con_id'] ?>"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div> -->
                            </div>
                        </a>
                    </div>

                <?php } ?>

            </div>

    <?php }
    } else {
        echo "DB failed!";
    }

    ?>
</body>

</html>

<?php mysqli_close($connection); ?>