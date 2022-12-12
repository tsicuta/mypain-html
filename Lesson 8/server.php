<?php
$json = file_get_contents('php://input');
$data = json_decode($json, true);

$action = $_REQUEST['action'];

$servername = "localhost";
$username = "username";
$password = "";
$dbname = "dannie";

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем соединение
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
  }

if($action==='reg'){
    $sql = "SELECT * FROM dannie where email='". $data['email']."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        http_response_code(503);
        echo "ERROR: user already exist";
    } else{
        $sql = "INSERT INTO dannie (name, surname, email, password)
        VALUES('".$data['name']."', '".$data['surname']."', '".$data['email']."', '".$data['password']."')"
    
    if($conn->query($sql)===TRUE){
        echo "new record created sucessfully";
    } else{
        echo "ERROR: ".$sql."<br>".$conn->error;
    }
}
}
else if($action === 'login'){
    $data = [
        'email' => $_REQUEST['login'],
        'password' => $_REQUEST['password']
    ];
    $sql = "SELECT * FROM dannie where email='". $data['email']."' AND password='". $data['password']."'";

$result = $conn->query($sql);
if ($result->num_rows > 0){
    echo "SUCCESS";
} else{
    echo 'ERROR: user not found';
}
}
  ?>