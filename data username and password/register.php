<?php
$servername = "localhost";
$username = "vietduybaka";
$password = "123456";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

$data = json_decode(file_get_contents('php://input'), true);
$username = $data['username'];
$password = $data['password'];

$query = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($query);

if ($result->num_rows === 0) {
    // Tài khoản chưa tồn tại, thêm vào cơ sở dữ liệu
    $insertQuery = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if ($conn->query($insertQuery) === TRUE) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false]);
    }
} else {
    echo json_encode(["success" => false]);
}

$conn->close();
?>
