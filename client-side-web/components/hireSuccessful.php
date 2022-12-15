<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successful</title>

    <link rel="stylesheet" href="../css/paymentSuccess.css">
</head>

<body>
    <div class="container">
        <div class="popup" id="popup">
            <img src="../../assets/images/client-side/tick.png">
            <h2>Thank you!</h2>
            <p>your order have been sucessful</p>
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