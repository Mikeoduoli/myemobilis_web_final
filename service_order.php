<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Service Booking</title>
    <script src = "assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/custom.css">
</head>
<body>

<div class="text-center">
    <div class="text-left">
        <h2>Viktory Brand</h2></div>
    <div class="text-center text-center1">


    <section><ol>
            <a href="index.html">
                <button class="nav_buttons">Home</button>
            </a>
            <a href="our_work.php">
                <button class="nav_buttons">Our Work</button>
            </a>
            <a href="services.html">
                <button class="nav_buttons">Services</button>
            </a>
            <a href="the_team.php">
                <button class="nav_buttons">The Team</button>
            </a>
            <a href="about.php">
                <button class="nav_buttons">About</button>
            </a>
            <a href="contact.php">
                <button class="nav_buttons">Contact</button>
            </a>

            <br><br><br>
            <div>
                <a href="#">
                    <button class="nav_buttons">Order Service</button>
                </a>
            </div>
            <br>
            <div>
            <div class="col-md-4 badge p-3 d-inline-flex bg-info">
            <form class="col-md-6" method = "post" action ="service_order_handler.php">
                <input class="form-control" name ="c_name" placeholder ="Enter name" type="text"><br>
                <input class="form-control" name ="c_number" placeholder ="Enter Phone Number" type="number"><br>
                <input class="form-control" name ="co_date" placeholder ="Select Date" type="date"><br>

                <br>
            </form>

                        <form class="col-md-6" method = "post" action ="service_order_handler.php">
                            <select class="form-control" name="voter_county" id="">
                                <option value="">Select order</option>
                                <option value="m_branding">Mug Branding</option>
                                <option value="t_shirt">T-Shirt Branding</option>
                                <option value="jersey">Jersey Branding</option>
                                <option value="reflector_branding">Reflector Branding</option>
                                <option value="gift_set">Gift Sets</option>
                            </select><br>
                            <input class="form-control" name ="c_location" placeholder ="Enter Location" type="text"><br><br><br><br>

                            <input class="form-control btn-outline-success" name ="btn_reg" value ="Place Order" type="submit"><br>
                            <a class="text-warning" href = "order.php">Client Order(s)</a>
                        </form>

            </div>

            </div>

            <br>
        </ol>

</div>


</section></div>
<br>



<?php


?>

</body>
</html>
