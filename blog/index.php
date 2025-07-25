
<?php
include '../includes/config.php';
include '../includes/header.php';




// Fetch blog posts
$stmt = $pdo->query("SELECT * FROM blog_posts ORDER BY created_at DESC");
$posts = $stmt->fetchAll();
?>

<?php
// Set default page title
if (!isset($pageTitle)) {
  $pageTitle = "My Portfolio Website";
}
?>


<div class="container">
  <h1>My Blog</h1>
  <a href="create.php">+ New Post</a>

  <?php foreach ($posts as $post): ?>
    <div class="post">
      <h2><a href="view.php?id=<?= $post['id'] ?>"><?= htmlspecialchars($post['title']) ?></a></h2>
      <p><?= substr(htmlspecialchars($post['content']), 0, 100) ?>...</p>
      <small>Posted on <?= $post['created_at'] ?></small>
    </div>
  <?php endforeach; ?>
</div>

<?php include '../includes/footer.php'; ?>
