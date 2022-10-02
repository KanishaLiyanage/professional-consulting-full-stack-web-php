<?php require_once('../connection/dbconnection.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../client-side-web/css/card.css">
    <link rel="stylesheet" href="../client-side-web/css/home.css">
    <title>Home</title>
</head>

<body>


    <nav class="navbar">
        <h1 class="logo">ConsultantX</h1>
        <ul class="nav-links">
            <li class="active"><a href="#"></a>Home</li>
            <li><a href="#"></a>Favourite</li>
            <li><a href="#"></a>Services</li>
            <li><a href="#"></a>Contact</li>
            <li class="ctn"><a href="../client-side-web/components/logout.php"></a>Logout</li>

        </ul>
        <img src="../assets/images/client-side/menu-btn.png" alt="" class="menu-btn">
    </nav>
    <header>
        <div class="header-content">
            <h2>Meet Your Professional Consultant</h2>
            <div class="line"></div>
            <h1>Welcome To Your Path Of Success</h1>
            <a href="#" class="ctn">Learn More</a>
        </div>
    </header>
    <!--whychoose-->
    <section class="whychoose">
        <div class="title">
            <h1>Why Choose Us...</h1>
            <div class="line"></div>
        </div>
        <div class="row">
            <div class="col">
                <img src="../assets/images/client-side/2.png" alt="">
                <h4>Professional Consultants</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur debitis laborum accusantium id nisi. Sunt, omnis accusantium? Fugit nihil sequi consectetur consequuntur ab magni, earum tempore repudiandae amet minima mollitia.</p>
                <a href="#" class="ctn">Learn More</a>
            </div>
            <div class="col">
                <img src="../assets/images/client-side/3.png" alt="">
                <h4>Best Packages</h4>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur debitis laborum accusantium id nisi. Sunt, omnis accusantium? Fugit nihil sequi consectetur consequuntur ab magni, earum tempore repudiandae amet minima mollitia.</p>
                <a href="#" class="ctn">Learn More</a>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="services-content">
            <h1>Our Services</h1>
            <div class="line"></div>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, eum accusantium ipsum iure, iusto magni veniam, voluptatem totam corporis provident ex. Corporis sed atque suscipit aperiam obcaecati ullam eius numquam?</P>
            <a href="#" class="ctn">Learn More</a>
        </div>
    </section>

    <section class="experts">
        <div class="row">
            <div class="col content-col">
                <h1>OUR EXPERTS</h1>
                <div class="line"></div>
                <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim incidunt adipisci quidem culpa nostrum odit voluptates quia laborum numquam provident autem officiis officia odio sint inventore veritatis, quisquam dicta doloribus!</P>
                <a href="#" class="ctn">Learn More</a>

            </div>
            <div class="col image-col">
                <div class="image-gallery">

                    <?php

                    $query = "SELECT * FROM consultants WHERE isDeleted = 0";

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

    <section class="footer">
        <p>Group F CMIS 3214</p>
        <p>Copyright c 2022</p>
    </section>

    <script>
        const menuBtn = document.querySelector('.menu-btn')
        const navlinks = document.querySelector('.nav-links')

        menuBtn.addEventListener('click', () => {
            navlinks.classList.toggle('mobile-menu')
        })
    </script>








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