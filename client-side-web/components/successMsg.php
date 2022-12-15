<?php session_start(); ?>
<?php require_once('../../connection/dbconnection.php'); ?>

<?php

if (!isset($_SESSION['cus_id'])) {
    header("Location: ../userLogin.php");
}

$customer_id = $_SESSION['cus_id'];

?>

<?php

if (isset($_POST['submit'])) {

    $pkg = mysqli_real_escape_string($connection, $_POST['package']);
    
    $query = "SELECT * FROM customers
              WHERE
              customer_id = '{$customer_id}'";

    $customers = mysqli_query($connection, $query);

    if ($customers) {
        while ($customer = mysqli_fetch_assoc($customers)) {

            $fname = $customer['customerFirstName'];
            $lname = $customer['customerLastName'];
            $email = $customer['customerEmail'];
            $mNo = $customer['customerMobileNo'];

            $updateQuery = "UPDATE customers
                            SET
                            customerFirstName = '{$fname}',
                            customerLastName = '{$lname}',
                            customerEmail = '{$email}',
                            customerMobileNo = '{$mNo}',
                            package = '{$pkg}'
                            WHERE
                            customer_id = '{$customer_id}'
                            LIMIT 1";

            $result = mysqli_query($connection, $updateQuery);

            if ($result) { ?>

                <!DOCTYPE html>
                <html lang="en">

                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>sucess payment</title>

                    <link rel="stylesheet" href="../css/paymentSuccess.css">
                </head>

                <body>
                    <div class="container">
                        <div class="popup" id="popup">
                            <img src="../../assets/images/client-side/tick.png">
                            <h2>Thank you!</h2>
                            <p>your payments have been sucessful</p>
                            <a href="../home.php"><button type="button">ok</button></a>
                        </div>
                    </div>
                    <script>
                        let popup = document.getElementById("popup");

                        function openPopup() {
                            popup.classList.add("open-popup")
                        }

                        function closePopup() {
                            popup.classList.remove("open-popup")
                        }
                    </script>
                </body>

                </html>

<?php } else {

                echo "Failed to update records!";
            }
        }
    } else {
        echo "DB Failed!";
    }
}

?>