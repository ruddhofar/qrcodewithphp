<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_qrcode";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
$n = $_POST['jum']; // membaca jumlah data

for ($i=0; $i<=$n; $i++)
{   $datanim = $_POST['nim']+$i;
   
     if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
     }
     
    
      $sql = "INSERT INTO tbl_qr (id, teks)
       VALUES ('$datanim', '$datanim' )";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?> 