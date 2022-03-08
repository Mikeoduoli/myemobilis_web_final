<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client Order</title>
    <script src = "assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/custom.css">
</head>
<body class="img-bg">
    <a class="btn btn-outline-secondary btn-block" href="service_order.php">Order Service</a>
    <h1 class="text-info text-center">Ordered Services</h1>
    <table class="table table-hover table-dark">
        <tr>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Date</th>
            <th>Order Placed</th>
            <th>Location</th>
        </tr>
</body>
</html>

<?php

$selectQuery = "SELECT * FROM `clients` WHERE 1";

$clients = mysqli_query($connection, $selectQuery);

foreach ($clients as $client){
    $clientName = $client["client_name"];
    $clientPhoneNumber = $client["client_phone_number"];
    $clientBookDate = $client["client_booking_date"];
    $clientServiceBooked = $client["client_service_booked"];
    $clientLocation = $client["client_location"];
    $clientId = $client["client_id"];

    echo "<tr>
            <td>$clientName</td>
            <td>$clientPhoneNumber</td>
            <td>$clientBookDate</td>
            <td>$clientServiceBooked</td>
            <td>$clientServiceBooked</td>
            <td><a href='delete.php?v_id=$clientId'>Delete</a> </td>
            <td><a href='update.php?v_id=$clientId&client_name=$clientName&client_phone_number=$clientPhoneNumber'>Update</a></td>
            </tr>";
}


