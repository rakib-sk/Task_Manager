<?php
$db_file = __DIR__."/data.db";
$db = new SQLite3($db_file);

$db->exec("CREATE TABLE IF NOT EXISTS tasks (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    title TEXT NOT NULL,
    description TEXT,
    status INTEGER DEFAULT 0
)");

$db->exec("CREATE TABLE IF NOT EXISTS notes(
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    content TEXT NOT NULL
)");

