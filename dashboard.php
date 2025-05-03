<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h3 class="card-title text-success">Hoşgeldin, <?php echo htmlspecialchars($_SESSION['user']); ?> 🎉</h3>
            <a href="logout.php" class="btn btn-danger mt-3">Çıkış Yap</a>
        </div>
    </div>
</div>

</body>
</html>
