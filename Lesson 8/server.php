<?php 
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "2075";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$data=json_decode(file_get_contents("php://input"), true);

$sql = "INSERT INTO users (username,s_name,usermail,passrwrd)
VALUES ('" . $data['name'] . "', '" . $data['surname'] . "', '" . $data['email'] . "', '" . $data['password'] . "')";
/*VALUES ('John', 'Doe', 'john@example.com', '1235', 'male')";
*/
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>