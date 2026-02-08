<?php
include "db.php";
if(isset($_POST["submit"])){
    $title = $_POST['title'];
    $desc = $_POST['description'];
    
    $stmt = $db->prepare("INSERT INTO tasks (title,description) VALUES (:title, :desc)");
    $stmt->bindValue(':title',$title,SQLITE3_TEXT);
    $stmt->bindValue(':desc',$desc,SQLITE3_TEXT);
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
    <title>Add Task</title>
</head>
<body>
<h1 class="heading">Add Tasks </h1>
<form method="POST">
    <label>Title:</label>
    <input type="text" name="title" reqired><br><br>
    <label>Description:</label>
    <textarea type="text" name = "description"></textarea><br><br>
    <button type="submit" name="submit">Add Tasks</button>
</form>
    <a href="index.php">Back</a>
</body>    
</html>

    