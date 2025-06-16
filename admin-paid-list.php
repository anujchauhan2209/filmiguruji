<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: admin-login.php');
    exit;
}
$host = "localhost";
$user = "root";
$pass = ""; // set your db password
$db = "filmiguruji"; // set your db name

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Database connection failed");
}
$sql = "SELECT * FROM registrations WHERE payment_status='success' ORDER BY created_at DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Done List - Zero to Hero Masterclass</title>
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
            color: #28a745;
            margin-bottom: 18px;
            text-align: center;
        }
        @media (max-width: 900px) {
            .sidebar { position: static; width: 100%; min-height: 0; box-shadow: none; }
            .main-content { margin-left: 0; }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="admin-dashboard.php">Dashboard</a>
        <a href="admin-paid-list.php" class="active">Payment Done List</a>
        <a href="admin-pending-list.php">Payment Pending List</a>
        <a href="admin-logout.php">Logout</a>
    </div>
    <div class="main-content">
        <div class="dashboard-title">Payment Done List</div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Whatsapp</th>
                        <th>Email</th>
                        <th>Payment ID</th>
                        <th>Status</th>
                        <th>Registered At</th>
                    </tr>
                </thead>
                <tbody>
                <?php if ($result && $result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['id']) ?></td>
                            <td><?= htmlspecialchars($row['first_name'] . ' ' . $row['last_name']) ?></td>
                            <td><?= htmlspecialchars($row['whatsapp']) ?></td>
                            <td><?= htmlspecialchars($row['email']) ?></td>
                            <td><?= htmlspecialchars($row['razorpay_payment_id']) ?></td>
                            <td class="text-success"><?= ucfirst($row['payment_status']) ?></td>
                            <td><?= htmlspecialchars($row['created_at']) ?></td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr><td colspan="7" class="text-center">No paid registrations found.</td></tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
<?php $conn->close(); ?>
