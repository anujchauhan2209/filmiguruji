<?php
session_start();
$error = '';
// Database connection
$host = "localhost";
$user = "root";
$pass = ""; // set your db password
$db = "filmiguruji"; // set your db name

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    $error = "Database connection failed";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !$error) {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $password_md5 = md5($password);
    // Query admin table for user with md5 password
    $sql = "SELECT * FROM admin WHERE username=? AND password=? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password_md5);
    $stmt->execute();
    $res = $stmt->get_result();
    if ($res->fetch_assoc()) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $username;
        header('Location: admin-dashboard.php');
        exit;
    }
    $error = 'Invalid username or password.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login - Zero to Hero Masterclass</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #10182b; }
        .login-box {
            max-width: 400px;
            margin: 80px auto;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 24px #0002;
            padding: 32px 28px;
        }
        .login-title {
            font-size: 2em;
            font-weight: 700;
            color: #e53935;
            margin-bottom: 18px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <div class="login-title">Admin Login</div>
        <?php if ($error): ?>
            <div class="alert alert-danger py-2"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <form method="post" autocomplete="off">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required autofocus>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button class="btn btn-danger w-100 fw-bold" type="submit">Login</button>
        </form>
    </div>
</body>
</html>
</body>
</html>
