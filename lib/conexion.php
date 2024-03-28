<?php
$host = "YOUR_HOST";
$user = "YOUR_USER";
$password = "YOUR_PASSWORD";
$dbname = "YOUR_DATABASE_NAME";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $response = array();
    while($row = $result->fetch_assoc()) {
        $response[] = $row;
    }
    echo json_encode($response);
} else {
    echo "No data found";
}

$conn->close();
?>