<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "podroze";

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
  die("Blad: " . $conn->connect_error);
}
echo "Polaczono pomyslnie";
?>