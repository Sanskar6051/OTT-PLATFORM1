<?php      
    $servername  = "localhost";
    $username = "root";
    $password = "";
    $dbname = "watchale";
      
    $conn = mysqli_connect($servername,$username,$password,$dbname);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  