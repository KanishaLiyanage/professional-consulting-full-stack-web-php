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
    <title>ConsultPro | Home</title>
</head>

<body>

    <header>

        <?php require_once('../client-side-web/components/header.php'); ?>

        <div class="header-content">
            <h2>Meet Your Professional Consultant</h2>
            <div class="line"></div>
            <h1>Welcome To Your Path Of Success</h1>

            <form action="./search.php" method="POST">
                <input type="text" name="keyword" required>
                <input class="search-form" type="submit" name='submit' value="Find Consultant">
            </form>

            <br>
            <a href="#explore" class="ctn">Explore More</a>

        </div>
    </header>

    <!--whychoose-->
    <section class="whychoose" id="explore">
        <div class="title">
            <h1>Why Choose Us...</h1>
            <div class="line"></div>
        </div>
        <div class="row">

            <div class="col">
                <img src="../assets/images/client-side/2.png" alt="">
                <h4>Professional Consultants</h4>
                <p>
                    Our team is made up of experienced professionals in their field
                    that are enthusiastic about the work they do and have vast experience
                    working in a wide range of fields and applications.
                </p>
                <a href="./consultantList.php" class="ctn">See More</a>
            </div>

            <div class="col">
                <img src="../assets/images/client-side/3.png" alt="">
                <h4>Best Packages</h4>
                <p>
                    Everything you offer in one bloated package.
                    There are three packages that you can choose
                    one of them to make a solution delivered at
                    maximum speed with minimum risk.
                </p>
                <a href="./bestPackages.php" class="ctn">See More</a>
            </div>

        </div>
    </section>
    <section class="services" id="services">
        <div class="services-content">
            <h1>Our Services</h1>
            <div class="line"></div>
            <P>
                We provide expertise in a specific market.
                Identifying the root problem
                Initiating change.
                Providing objectivity.
                Teaching and training employees.
                Reviving an organization.
            </P>
            <a href="./services.php" class="ctn">Learn More</a>
        </div>
    </section>

    <section class="experts" id="experts">
        <div class="row">
            <div class="col content-col">
                <h1>OUR EXPERTS</h1>
                <div class="line"></div>
                <P>
                    Our team is made up of experienced professionals in their field that are enthusiastic about the work they do and have vast experience working in a wide range of fields and applications.
                </P>
                <a href="./experts.php" class="ctn">See More</a>
            </div>
            <div class="col image-col">
                <div class="image-gallery">

                    <?php

                    $query = "SELECT * FROM consultants
                              WHERE
                              isDeleted = 0
                              LIMIT 1";

                    $result = mysqli_query($connection, $query);

                    if ($result) { ?>

                        <?php

                        if (mysqli_num_rows($result) > 0) { ?>

                            <?php while ($record = mysqli_fetch_array($result)) {

                                $_GET['con_id'] = $record['consultant_id'];

                            ?>

                                <a href="consultantProfile.php?con_id=<?= $_GET['con_id'] ?>">

                                    <img src="../../assets/uploads/profile_pics/<?php echo $record['image']; ?>" alt="<?php echo $record['firstName']; ?>">

                                </a>

                            <?php } ?>

                    <?php }
                    } else {
                        echo "DB failed!";
                    }

                    ?>

                </div>
            </div>
        </div>
    </section>

    <?php require_once('../client-side-web/components/footer.php'); ?>

</body>

</html>

<?php mysqli_close($connection); ?>