<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 2px solid black;
}
</style>
</head>
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

$sql = "SELECT movieID, moviename, dateon FROM Movie";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>movieID</th><th>moviename</th><th>วันที่ฉาย</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["movieID"]. "</td><td>" . $row["moviename"]. "</td><td> " . $row["dateon"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}


$conn->close();
?>
<br/>
<a href="http://localhost/movie_php/web.php"><input type="button" value="ย้อนกลับ"></a>
</body>
</html>