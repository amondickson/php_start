<?php
require 'config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$sql = "SELECT username, email FROM users WHERE id = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param('i', $_SESSION['user_id']);
$stmt->execute();
$stmt->bind_result($username, $email);
$stmt->fetch();
?>

<h1>Profile</h1>
<p>Username: <?php echo htmlspecialchars($username); ?></p>
<p>Email: <?php echo htmlspecialchars($email); ?></p>
<a href="logout.php">Logout</a>
