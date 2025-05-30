<?php
$host = "ballast.proxy.rlwy.net";
$port = 43477;
$username = "root";
$password = "tvemiHAbTilnDWinzDwTyLADqFFaPCWn"; 
$database = "railway";

// Connect to MySQL
$conn = new mysqli($host, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqlFile = 'sevenseas.sql'; // Your SQL file path

// Read SQL file
$commands = file_get_contents($sqlFile);

// Run queries
if ($conn->multi_query($commands)) {
    echo "✅ SQL file imported successfully.";
} else {
    echo "❌ Error: " . $conn->error;
}

$conn->close();
?>
