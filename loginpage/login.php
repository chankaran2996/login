<?php
$name = $_POST['lg1'];
$password = $_POST['lg2'];

$host = "127.0.0.1";
$dbusername = "root";  
$dbpassword = "";
$dbname = "form";

// Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name,dob,age,number,email FROM users where name='$name' and password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> name: ". $row["name"]. " <br>DOB: ". $row["dob"]. "<br> Age:  " . $row["age"] . "<br> Phone number:  " . $row["number"] . "<br> email:  " . $row["email"] . "<br>";
    }
} else {
    echo "invalid user name or password";
}

$conn->close();
?>