<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $conn->real_escape_string($_POST['username']);
    $message = $conn->real_escape_string($_POST['message']);

    if (!empty($username) && !empty($message)) {
        $conn->query("INSERT INTO messages (username, message) VALUES ('$username', '$message')");
    }
}
?>