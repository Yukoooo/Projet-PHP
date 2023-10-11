
<?php

$conn = "";
  
try {
    $servername = "localhost:3306";
    $dbname = "contact";
    $username = "root";
    $password = "root";
  
    $conn = new PDO(
        "mysql:host=$servername; dbname=contact",
        $username, $password
    );
     
   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
 
?>