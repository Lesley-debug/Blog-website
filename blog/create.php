<?php
include '../includes/config.php';
include '../includes/header.php';

$title = $content = '';
$success = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $title = $_POST['title'] ?? '';
  $content = $_POST['content'] ?? '';

  if (!empty($title) && !empty($content)) {
    $stmt = $pdo->prepare("INSERT INTO blog_posts (title, content) VALUES (?, ?)");
    $stmt->execute([$title, $content]);
    $success = "Blog post created successfully!";
    $title = $content = '';
  } else {
    $success = "Please fill in both fields.";
  }
}
?>

<div class="container">
  <h1>New Blog Post</h1>

  <?php if ($success): ?>
    <p style="color: green;"><?= htmlspecialchars($success) ?></p>
  <?php endif; ?>

  <form method="post">
    <label>Title:</label><br>
    <input type="text" name="title" value="<?= htmlspecialchars($title) ?>" required><br><br>

    <label>Content:</label><br>
    <textarea name="content" rows="6" required><?= htmlspecialchars($content) ?></textarea><br><br>

    <button type="submit">Create Post</button>
  </form>
</div>

<?php include '../includes/footer.php'; ?>
