<?php

if (isset($_GET["client_id"])){
    $clientName = $_POST["client_name"];
    $clientPhoneNumber = $_POST["client_phone_number"];
    $clientBookDate = $_POST["client_book_date"];
    $clientServiceBooked = $_POST["client_service_booked"];
    $clientLocation = $_POST["client_location"];
} else {
    header("location:order.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Client</title>
    <script src = "assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/custom.css">

</head>
<body>


</body>
</html>
