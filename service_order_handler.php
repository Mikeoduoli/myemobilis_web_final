    <?php

    if (isset($_POST["btn_order"])){

        $clientName = $_POST["client_name"];
        $clientPhoneNumber = $_POST["client_phone_number"];
        $clientBookDate = $_POST["client_booking_date"];
        $clientServiceBooked = $_POST["client_service_booked"];
        $clientLocation = $_POST["client_location"];
        $clientId = $_POST["client_id"];


        require_once "db_connection.php";

        $sql = "INSERT INTO `clients`(`client_id`, `client_name`, `client_phone_number`, `client_booking_date`, `client_service_booked`, `client_location`) 
                                    VALUES (NULL, $clientName, $clientPhoneNumber, $clientBookDate, $clientServiceBooked, $clientLocation)";

        $save = mysqli_query($conn, $sql);

        if(!isset($save)){
            echo "Order Placed Successfully";
        } else {
            "Order Not Placed";
        }

    }