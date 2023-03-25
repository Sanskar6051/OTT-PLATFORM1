<?php

session_start();

$servername="localhost";
$username="root";
$password="";
$db="watchale";


$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn){
     echo "Nahi hua";
}

$sql = "SELECT *FROM MyLogin1 where phone = '$_POST[phone]' and pass = '$_POST[pass]' "; 
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);

    if ($row['phone'] === $_POST['phone'] && $row['pass'] === $_POST['pass']) {

    echo "Logged in!";

    $_SESSION['name'] = $row['firstname'];

    $_SESSION['user_id'] = $row['id'];

    header("Location: watchale-login.php");

    exit();
    }
    else{

        echo '<script type="text/javascript">

            alert("Invalid Email or Password");

        </script>';
        exit();
    }
}
echo '<script type="text/javascript">

            alert("Invalid Email or Password");
        </script>';

?>
