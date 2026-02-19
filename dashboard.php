<?php
session_start();

// 🔒 حماية الصفحة
if (!isset($_SESSION['user'])) {
    header("Location: /smart_note/auth/log.php");
    exit;
}

// اختصار البيانات
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow p-4">
        <h2>Welcome <?= htmlspecialchars($user['name']) ?> 👋</h2>
        <p>Email: <?= htmlspecialchars($user['email']) ?></p>
        <p>User ID: <?= $user['id'] ?></p>

        <hr>

        <a href="/smart_note/auth/logout.php" class="btn btn-danger">
            Logout
        </a>
    </div>
</div>

</body>
</html>
