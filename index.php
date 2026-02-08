<?php
include "db.php";
$tasks = $db->query("SELECT * FROM tasks");
$notes = $db->query("SELECT * FROM notes");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
  <title>Task & Notes Manager</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1 class="heading">My Tasks </h1>
  <a href="add_tasks.php">Add Tasks </a>
  <table>
    <tr>
      <th>ID</th><th>Title</th><th>Description</th><th>Status</th>
    </tr>
    <?php while($row = $tasks->fetchArray(SQLITE3_ASSOC)) { ?>
    <tr>
      <td><?= $row["id"] ?></td>
      <td><?= $row["title"] ?> </td>
      <td><?= $row["description"] ?> </td>
      <td><?= $row['status'] ? "Completed" : "Pending" ?></td>
    </tr>
    <?php } ?>
  </table>
  <h1>My Notes</h1>
  <a href="add_notes.php">Add Notes</a>
  <ul>
    <?php while($row = $notes->fetchArray(SQLITE3_ASSOC)) {?>
    <li><?= $row["content"] ?></li>
    <?php } ?>
  </ul>
</body>
</html>
