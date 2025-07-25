<?php
include 'includes/config.php';
include 'includes/header.php';
include 'data/homepage_data.php';
?>

<h1><?php echo 
$homepagetitle; ?></h1>
<h3><?php echo
$homepageSubtitle; ?></h3>

<?php include 'includes/config.php'; ?>

<?php

// index.php
// This is the main entry point of the portfolio website
// Include header and footer files
$name = "Lesley Tabi";
// Set the page title
$title = "Backend Developer";

$intro = "Welcome to my Portfolio, i build web applications that are fast, secure, and scalable. using php and other technologies.";
?>



<h1><?php echo $name; ?> 
<br> <?php echo $title; ?></h1>
<p><?php echo $intro; ?> </p>

<?php include 'includes/footer.php'; ?>