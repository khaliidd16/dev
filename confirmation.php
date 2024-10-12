<?php
require_once 'includes/Header.php';
require_once 'includes/Footer.php';

$header = new Header();
$footer = new Footer();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $pickup = htmlspecialchars($_POST['pickup_location']);
    $dropoff = htmlspecialchars($_POST['dropoff_location']);
} else {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <?php
    $header->render();
    ?>

    <section class="hero">
        <div class="welcome-message">
            <h1>Booking Confirmation</h1>
            <p>Thank you, <strong><?php echo $name; ?></strong>, for booking with us.</p>
            <p>We will pick you up from <strong><?php echo $pickup; ?></strong> and drop you off at <strong><?php echo $dropoff; ?></strong>.</p>
            <p>A confirmation email has been sent to <strong><?php echo $email; ?></strong>.</p>
            <a href="index.php" class="btn-book">Back to Home</a>
        </div>
    </section>

    <?php
    $footer->render();
    ?>
</body>
</html>
