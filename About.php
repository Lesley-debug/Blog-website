<?php
include 'includes/config.php';
include 'includes/header.php';
include 'data/About_data.php';
?>

    <div class="container">
        <h1><?php echo $abouttitle; ?> </h1>
        <p><?php echo $aboutcontent; ?></p>

        <div class="about-image">
            <img src="uploads/IMG-20250211-WA0037.jpg" alt="my photo" style="max-width: 200px; border-radius: 10px;">
        </div>
    </div>

        <h3>my skills/experince</h3>
        <ul>
        <?php foreach ($aboutskills as $skill): ?>
            <li><?php echo $skill; ?></li>
            <?php endforeach; ?>  
        </ul>



<?php include 'includes/config.php'; ?>


<?php include 'includes/footer.php'; ?>