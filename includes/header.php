<?php
// Set default page title
if (!isset($pageTitle)) {
  $pageTitle = "My Portfolio Website";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <link rel="stylesheet" href="/Portfolio_blog/css/style.css" />
  <style>
    
  </style>
</head>
<body>

<header>
  <h1><?= htmlspecialchars($pageTitle) ?></h1>
  <nav>
    <ul>
      <li><a href="/Portfolio_blog/index.php">Home</a></li>
      <li><a href="/Portfolio_blog/about.php">About</a></li>
      <li><a href="/Portfolio_blog/services.php">Services</a></li>
      <li><a href="/Portfolio_blog/contact.php">Contact</a></li>
      <li><a href="/Portfolio_blog/blog/index.php">Blog</a></li>
    </ul>
  </nav>
</header>

<main>
