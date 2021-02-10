<?php
$servername = "localhost";
$username = "webadmin";
$password = "1234";
$dbname = "movieDB";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn ->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

$sql = "CREATE TABLE Movie(
    movieID CHAR(10) PRIMARY KEY,
    moviename VARCHAR(30) NOT NULL,
    dateon DATE NOT NULL,
    userName VARCHAR(30) NOT NULL,
    PIN VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === TRUE){
    echo "Table movieDB created successfully";
}
else{
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>