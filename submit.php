<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "studentmanagement";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$idno     = $_POST['idno'] ?? '';
$uname    = $_POST['uname'] ?? '';
$mobile   = $_POST['mobile'] ?? '';
$email    = $_POST['email'] ?? '';

$checkSql = "SELECT idno FROM admission WHERE idno = ? OR email = ?";
$checkStmt = $conn->prepare($checkSql);

if (!$checkStmt) {
    die("SQL Error (Check Query): " . $conn->error);
}

$checkStmt->bind_param("ss", $idno, $email);
$checkStmt->execute();
$result = $checkStmt->get_result();

if ($result->num_rows > 0) {
    echo "<script>alert('Duplicate entry! ID or Email already exists.'); window.history.back();</script>";
} else {
    $sql = "INSERT INTO admission (idno, name, mobile, email) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die(" Insert SQL Error: " . $conn->error);
    }

    $stmt->bind_param("ssss", $idno, $uname, $mobile, $email);

    if ($stmt->execute()) {
        echo "<script>alert('Application sent successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "'); window.history.back();</script>";
    }

    $stmt->close();
}

$checkStmt->close();
$conn->close();
?>