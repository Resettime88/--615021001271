<?php
$servername = "localhost";
$username = "webadmin";
$password = "1234";
$dbname = "movieDB";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn ->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

var_dump($_POST);
$sql = "INSERT INTO Movie(movieID, moviename, dateon, userName, PIN)
        VALUES ('".$_POST['movieID']."', '".$_POST['moviename']."', '".$_POST['dateon']."', '".$_POST['userName']."', '".$_POST['PIN']."')";


if ($conn->query($sql) === TRUE){
    echo "New record created successfully";
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>