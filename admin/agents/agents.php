<?php
session_start();
require_once 'connect.php';

if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}

// Fetch and display agents

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Agents</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>View Agents</h1>
    <!-- Display list of agents -->
    <a href="admin_dashboard.php">Back to Dashboard</a>
</body>
</html>