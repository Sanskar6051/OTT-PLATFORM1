
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

$sql = "update MyLogin1 set pass = '$_POST[newpass]'
        WHERE phone = '$_POST[phone]' AND pass = '$_POST[pass]'";


if (mysqli_query($conn, $sql)) {
  
  echo '<script type="text/javascript">

      alert("Password Changed Successfully");

  </script>';
  
  header("Location: signin.html");
  exit();
}

else{

  echo '<script type="text/javascript">

      alert("Invalid Phone or Password");

  </script>';
  exit();
}



mysqli_close($conn);
?>
