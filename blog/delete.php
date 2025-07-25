<?php
include '../includes/config.php';

$id = $_GET['id'] ?? null;

if ($id) {
  $stmt = $pdo->prepare("DELETE FROM blog_posts WHERE id = ?");
  $stmt->execute([$id]);
}

header("Location: index.php");
exit;
