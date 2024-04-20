<?php
$host = "localhost"; // Database host (usually "localhost" for local development)
$dbname = "fun_fitness"; // Name of your database
$username = "root"; // Username for database access
$password = ""; // Password for database access

try {
  $cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>