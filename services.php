<?php
include 'includes/config.php';
include 'includes/header.php';
include 'data/services_data.php'; // Make sure this line is correct and the file exists
?>

<div class="container">
  <h1><?php echo $servicesTitle; ?></h1>

  <?php if (!empty($services) && is_array($services)): ?>
    <?php foreach ($services as $service): ?>
      <div class="service">
        <h3><?php echo $service['title']; ?></h3>
        <p><?php echo $service['description']; ?></p>
      </div>
    <?php endforeach; ?>
  <?php else: ?>
    <p>No services available at the moment.</p>
  <?php endif; ?>
</div>

<?php include 'includes/footer.php'; ?>
