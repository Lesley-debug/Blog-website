<?php
include '../includes/config.php';
include '../includes/header.php';

$id = $_GET['id'] ?? null;
$success = '';

if ($id) {
  $stmt = $pdo->prepare("SELECT * FROM blog_posts WHERE id = ?");
  $stmt->execute([$id]);
  $post = $stmt->fetch();

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST['title'] ?? '';
    $content = $_POST['content'] ?? '';

    if (!empty($title) && !empty($content)) {
      $stmt = $pdo->prepare("UPDATE blog_posts SET title = ?, content = ? WHERE id = ?");
      $stmt->execute([$title, $content, $id]);
      $success = "Post updated!";
      $post['title'] = $title;
      $post['content'] = $content;
    } else {
      $success = "Both fields required.";
    }
  }
}
?>

<div class="container">
  <?php if ($post): ?>
    <h1>Edit Post</h1>
    <?php if ($success): ?><p style="color: green;"><?= $success ?></p><?php endif; ?>
    <form method="post">
      <label>Title:</label><br>
      <input type="text" name="title" value="<?= htmlspecialchars($post['title']) ?>"><br><br>
      <label>Content:</label><br>
      <textarea name="content" rows="6"><?= htmlspecialchars($post['content']) ?></textarea><br><br>
      <button type="submit">Update</button>
    </form>
  <?php else: ?>
    <p>Post not found.</p>
  <?php endif; ?>
</div>

<?php include '../includes/footer.php'; ?>
