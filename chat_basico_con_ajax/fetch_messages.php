<?php
require 'db.php';

$result = $conn->query("SELECT * FROM messages ORDER BY created_at DESC LIMIT 50");

$messages = [];
while ($row = $result->fetch_assoc()) {
    echo "<p><strong>" . htmlspecialchars($row['username']) . ":</strong> " . htmlspecialchars($row['message']) . "</p>";
}
?>