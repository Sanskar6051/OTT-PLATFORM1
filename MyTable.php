<?php
$servername  = "localhost";
$username = "root";
$password = "";
$dbname = "watchale";


$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection Failed: ". mysqli_connect_error() );
}
$sql = "INSERT INTO MyLogin1 (firstname, lastname, email, phone, pass)
VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[email]', '$_POST[phone]', '$_POST[pass]')";

if (mysqli_query($conn, $sql)) {
  header("Location: signin.html");
  
  // echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

