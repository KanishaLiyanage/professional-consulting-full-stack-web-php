<?php require_once('../connection/dbconnection.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../client-side-web/css/card.css">
    <link rel="stylesheet" href="../client-side-web/css/home.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" href="./css/itemCard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Our Consultants</title>
</head>

<body>

    <h2 class="title">All Consultants</h2>

    <?php require_once('../client-side-web/components/header.php'); ?>

    <?php

    $query = "SELECT * FROM consultants
      WHERE isDeleted = 0";

    $result = mysqli_query($connection, $query);

    if ($result) { ?>

        <?php

        if (mysqli_num_rows($result) > 0) { ?>

            <div class="gridContainer">

                <?php while ($record = mysqli_fetch_array($result)) {

                    $_GET['con_id'] = $record['consultant_id'];

                ?>

                    <div class="gridContainer">
                        <div class="consultant-card">
                            <a class="linkedPage" href="consultantProfile.php?con_id=<?= $_GET['con_id'] ?>">
                                <div class="consultant-tumb">
                                    <img class="itemImage" src="../../assets/uploads/profile_pics/<?php echo $record['image']; ?>" alt="<?php echo $record['consultantFirstName']; ?>">
                                </div>
                                <div class="consultant-details">
                                    <span class="consultant-catagory"><?php echo $record['consultantFirstName'] . " " . $record['consultantLastName'] ?></span>
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