<?php include 'includes/header.php'; ?>

<?php include 'includes/config.php'; ?>


  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="Portfolio_blog/css/style.css">
    
</head>
<body>
      <h2>Contact me through email</h2>
    <form action="contact.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required placeholder="full name">
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" requiredn placeholder="fake@gmail.com">

        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" placeholder="subject">
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" placeholder="message" ></textarea>
        
        <button type="submit" name="submit">Submit</button>

    </form>
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $messsage = $_POST['message'];

  $to = "esanglesley@gmail.com";
  $header = "from: email";
 if ( mail($to, $subject, $messsage, $header))
  echo "email sent";
}
else {
  echo "failed to send ";
}

?>

<?php include 'includes/footer.php';?>
