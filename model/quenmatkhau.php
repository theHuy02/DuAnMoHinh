<?php
function update_matkhau($email, $newPassword) {
    $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);

    $conn = new mysqli('localhost', 'username', 'password', 'database');
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
    $stmt->bind_param("ss", $hashedPassword, $email);
    $stmt->execute();

    $affectedRows = $stmt->affected_rows;

    $stmt->close();
    $conn->close();

    return $affectedRows > 0;
}
?>

