<?php
require __DIR__ . '/backend/config/db.php';

echo "=== clients table ===\n";
print_r($pdo->query("SELECT * FROM clients")->fetchAll());

echo "\n=== projects table ===\n";
print_r($pdo->query("SELECT * FROM projects")->fetchAll());

echo "\n=== admins table ===\n";
print_r($pdo->query("SELECT id, username FROM admins")->fetchAll());