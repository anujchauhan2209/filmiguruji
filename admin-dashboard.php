<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: admin-login.php');
    exit;
}

// Database connection
$host = "localhost";
$user = "root";
$pass = ""; // set your db password
$db = "filmiguruji"; // set your db name

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Database connection failed");
}

// Stats
$total = $conn->query("SELECT COUNT(*) as c FROM registrations")->fetch_assoc()['c'];
$paid = $conn->query("SELECT COUNT(*) as c FROM registrations WHERE payment_status='success'")->fetch_assoc()['c'];
$pending = $conn->query("SELECT COUNT(*) as c FROM registrations WHERE payment_status='pending'")->fetch_assoc()['c'];
$failed = $conn->query("SELECT COUNT(*) as c FROM registrations WHERE payment_status='failed'")->fetch_assoc()['c'];

// No chart or chartData code here, just summary stats

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Zero to Hero Masterclass</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f5f6fa; }
        .sidebar {
            width: 220px;
            background: #10182b;
            color: #fff;
            min-height: 100vh;
            position: fixed;
            left: 0; top: 0;
            padding: 32px 0 0 0;
            box-shadow: 2px 0 12px #0001;
        }
        .sidebar h2 {
            font-size: 1.5em;
            font-weight: 700;
            color: #ffe600;
            text-align: center;
            margin-bottom: 32px;
        }
        .sidebar a {
            color: #fff;
            display: block;
            padding: 12px 32px;
            text-decoration: none;
            font-size: 1.1em;
            border-left: 4px solid transparent;
            transition: background 0.2s, border-color 0.2s;
        }
        .sidebar a.active, .sidebar a:hover {
            background: #222b44;
            border-left: 4px solid #e53935;
        }
        .main-content {
            margin-left: 230px;
            padding: 32px 24px;
        }
        .dashboard-title {
            font-size: 2em;
            font-weight: 700;
            color: #e53935;
            margin-bottom: 18px;
            text-align: center;
        }
        .stat-box {
            display: inline-block;
            min-width: 180px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 8px #0001;
            margin: 0 12px 24px 0;
            padding: 18px 24px;
            text-align: center;
        }
        .stat-title { font-size: 1.1em; color: #888; }
        .stat-value { font-size: 2em; font-weight: 700; }
        .stat-success { color: #28a745; }
        .stat-pending { color: #ffc107; }
        .stat-failed { color: #dc3545; }
        .stat-total { color: #e53935; }
        @media (max-width: 900px) {
            .sidebar { position: static; width: 100%; min-height: 0; box-shadow: none; }
            .main-content { margin-left: 0; }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="admin-dashboard.php" class="active">Dashboard</a>
        <a href="admin-paid-list.php">Payment Done List</a>
        <a href="admin-pending-list.php">Payment Pending List</a>
        <a href="admin-logout.php">Logout</a>
    </div>
    <div class="main-content">
        <div class="dashboard-title">Admin Dashboard</div>
        <div class="mb-4">
            <div class="stat-box stat-total">
                <div class="stat-title">Total Queries</div>
                <div class="stat-value"><?= $total ?></div>
            </div>
            <div class="stat-box stat-success">
                <div class="stat-title">Payment Done</div>
                <div class="stat-value"><?= $paid ?></div>
            </div>
            <div class="stat-box stat-pending">
                <div class="stat-title">Payment Due</div>
                <div class="stat-value"><?= $pending ?></div>
            </div>
            <div class="stat-box stat-failed">
                <div class="stat-title">Failed</div>
                <div class="stat-value"><?= $failed ?></div>
            </div>
        </div>
        <!-- No chart, only summary boxes above -->
    </div>
</body>
</html>
