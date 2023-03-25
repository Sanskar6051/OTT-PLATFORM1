<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "watchale";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO MyLogin (firstname, lastname, phone, email, pass)
VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[phone], '$_POST[mailid]','$_POST[pass] ')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
