<?php
$host = "localhost";
$user = "root";
$password = "";  // Update only if you set a MySQL root password
$dbname = "studentmanagement";     // Use your current MySQL port

// Connect to MySQL
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}

// Get form data
$idno     = $_POST['idno'] ?? '';
$uname    = $_POST['uname'] ?? '';
$mobile   = $_POST['mobile'] ?? '';
$email    = $_POST['email'] ?? '';

// Insert into database
$sql = "INSERT INTO admission (idno, name, mobile, email) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("❌ SQL prepare failed: " . $conn->error);
}

$stmt->bind_param("ssss", $idno, $uname, $mobile, $email);

if ($stmt->execute()) {
    echo "<script>alert('✅Application sent successful!'); window.location.href = 'index.php';</script>";
} else {
    echo "<script>alert('❌ Error: " . $stmt->error . "'); window.history.back();</script>";
}

$stmt->close();
$conn->close();
?>