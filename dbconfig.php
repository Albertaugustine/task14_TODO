<?php
$conn=new mysqli("localhost","root","","intern");
    if ($conn->connect_error){
        die("Connection failed " . $conn->connect_error);
        exit();
    }
    else
    {
        echo ("Connection success. ");
    }
/*
$ndb="CREATE DATABASE intern";
if ($conn->query($ndb)==TRUE)
{
    echo "Created DB ";

}
else{
    echo("DB error" .$conn->error);
}
$sql = "CREATE TABLE user (
ID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(20) NOT NULL,
Age INT(10) NOT NULL,
Branch VARCHAR(20),
)";

if ($conn->query($sql) === TRUE) {
  echo "Table user created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

INSERT INTO `user` (`ID`, `Name`, `Age`, `Branch`) VALUES (NULL, 'Sebin', '19', 'CS');

*/
if ($result = $conn->query("SELECT DATABASE()")) {
    $row = $result->fetch_row();
    printf("Default database is %s.\n", $row[0]);
    $result->close();
}

if(!mysqli_select_db($conn,'interns'))
{
  echo 'Not Selected the Database';
}
    
?>

