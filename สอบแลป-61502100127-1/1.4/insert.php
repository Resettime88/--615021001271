<html>
<body>
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
$sql = "INSERT INTO Movie(movieID, moviename, dateon)
        VALUES ('".$_POST['movieID']."', '".$_POST['moviename']."', '".$_POST['dateon']."')";


if ($conn->query($sql) === TRUE){
    echo "New record created successfully";
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
<br/>
<a href="http://localhost/movie_php/web.php"><input type="button" value="ย้อนกลับ"></a>
</body>
</html>