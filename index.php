<?php
$servername = "localhost";
$username = "root";
$password = "vertrigo";
$dbname = "prax";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT meno, nadpis, obsah FROM pages";

$result = $conn->query($sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>

<body>

    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname"><br>
    <input type="submit" value="Submit">

    <?php
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "Meno: " . $row["meno"]. " E-mail: " . $row["nadpis"]. " Obsah: " . $row["obsah"];
        }
      } else {
        echo "0 results";
      }
    ?>

    <h1>Test</h1>
</body>

</html>