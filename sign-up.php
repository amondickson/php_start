<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    //$photo_id = '';

    /* Handle photo upload
    if (isset($_FILES['photo_id']) && $_FILES['photo_id']['error'] === UPLOAD_ERR_OK) {
        $photo_id = 'uploads/' . basename($_FILES['photo_id']['name']);
        move_uploaded_file($_FILES['photo_id']['tmp_name'], $photo_id);
    }*/

    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssss', $username, $email, $password);

    if ($stmt->execute()) {
        header('Location: login.php');
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
} 
?>

<form method="post" enctype="multipart/form-data">
    Username: <input type="text" name="username" required><br>
    Email: <input type="email" name="email" required><br>
    Password: <input type="password" name="password" required><br>
    <!--Photo ID: <input type="file" name="photo_id" required><br>-->
    <button type="submit">Sign Up</button>
</form>
