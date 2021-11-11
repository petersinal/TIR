<?php
$servername = "localhost";
$username = "root";
$password = "vertrigo";
$dbname = "tir_sinal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT id, login, heslo, rola FROM uzivatelia";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    $name = $row['login'];
    $password = $row['heslo'];
    $post = $row['rola'];
  }

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>