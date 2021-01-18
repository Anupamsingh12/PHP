<?php

session_start();
$type = $_GET["type"];

$apiKey = "rzp_live_0tQIDhnmYh8b5j";

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>tripzilaa</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Merged Forms Page Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //Meta tag Keywords -->
    <link rel="stylesheet" href="css/login.css" type="text/css" media="all" /><!-- Style-CSS -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>

<body>

    <!-- /form-26-section -->
    <section class="form-26">
        <div class="form-26-mian">
            <div class="layer">
                <div class="wrapper">
                    <div class="form-inner-cont">
                        <div class="forms-26-info">
                            <h2>Confirm booking</h2>
                            <p>Finish your payment to confirm the booking</p>
                        </div>
                        <button id="rzp-button1" class="btn">Make payment</button>
                        <div class="copyright text-center">
                            <p>© 2021 Tripzilaa. All rights reserved | Design by <a href="http://Pomonart.com/" target="_blank">Pomonart</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- //form-26-section -->
    <script>
        var options = {
            "key": "<?php echo $apiKey; ?>", // Enter the Key ID generated from the Dashboard
            "amount": "<?php echo (int)$_SESSION['prices'][$type] * 100; ?>", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "Tripzilaa",
            "description": "Test Transaction",
            "image": "https://traidev.com/img/web-desgin-development.png",
            "order_id": "<?php echo 'OID' . rand(10, 100) . 'END'; ?>", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
            "handler": function(response) {
                alert(response.razorpay_payment_id);
                alert(response.razorpay_order_id);
                alert(response.razorpay_signature)
            },
            "prefill": {
                "name": "<?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] ?>",
                "email": "<?php echo $_SESSION['email']; ?>",
                "contact": "9999999999"
            },
            "notes": {
                "address": "Razorpay Corporate Office"
            },
            "theme": {
                "color": "#F37254"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.on('payment.failed', function(response) {
            alert(response.error.code);
            alert(response.error.description);
            alert(response.error.source);
            alert(response.error.step);
            alert(response.error.reason);
            alert(response.error.metadata.order_id);
            alert(response.error.metadata.payment_id);
        });
        document.getElementById('rzp-button1').onclick = function(e) {
            rzp1.open();
            e.preventDefault();
        }
    </script>
</body>

</html>