<?php
require_once 'includes/Header.php';
require_once 'includes/BookingForm.php';
require_once 'includes/Footer.php';

// Header, Footer en Form-objecten maken
$header = new Header();
$footer = new Footer();
$bookingForm = new BookingForm();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taxi Booking</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/booking.css">
</head>
<body>
    <?php
    // Header renderen
    $header->render();
    ?>

    <section class="booking-section">
        <div class="form-container">
            <h1>Maak een taxi afspraak</h1>
            <?php
            // Booking Formulier renderen
            $bookingForm->render();
            ?>
        </div>
    </section>

    <?php
    // Footer renderen
    $footer->render();
    ?>
</body>
</html>
