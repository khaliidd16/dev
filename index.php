<?php
require_once 'includes/Header.php';
require_once 'includes/HeroSection.php'; // Voeg de HeroSection toe
require_once 'includes/Footer.php';
require_once 'includes/Scripts.php';

// Maak de componenten
$header = new Header();
$hero = new HeroSection("img/taxi-background.jpg");
$footer = new Footer();
$scripts = new Scripts();
$scripts->addScript('assets/js/menu.js');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ak Taxi</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="script.js" defer></script>
</head>
<body>
    <?php
    // Render de componenten
    $header->render();
    $hero->render(); // Render de HeroSection via PHP object
    $footer->render();
    ?>
</body>
</html>