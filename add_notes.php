<?php
include "db.php";
if(isset($_POST['submit'])){
  $content = $_POST['content'];
  $stmt = $db->prepare("INSERT INTO notes (content) VALUES (:content)");
  $stmt->bindValue(':content', $content, SQLITE3_TEXT);
  $stmt->execute();
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="style.css">
  <title>Add Note</title>
</head>
<body>
  <h1 class="heading">Add Note</h1>
  <form method="POST">
    <textarea name="content" required></textarea><br>
    <button type="submit" name="submit">Add Note</button>
  </form>
  <a href="index.php">Back</a>
</body>
</html>
