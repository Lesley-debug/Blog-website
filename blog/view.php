<?php
include '../includes/config.php';
include '../includes/header.php';

$id = $_GET['id'] ?? null;

if ($id) {
  $stmt = $pdo->prepare("SELECT * FROM blog_posts WHERE id = ?");
  $stmt->execute([$id]);
  $post = $stmt->fetch();
}
?>

<div class="container">
  <?php if ($post): ?>
    <h1><?= htmlspecialchars($post['title']) ?></h1>
    <small>Posted on <?= $post['created_at'] ?></small>
    <p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
    <a href="edit.php?id=<?= $post['id'] ?>">Edit</a> |
    <a href="delete.php?id=<?= $post['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
  <?php else: ?>
    <p>Post not found.</p>
  <?php endif; ?>
</div>

<?php include '../includes/footer.php'; ?>
