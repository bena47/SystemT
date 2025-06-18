<?php
session_start(); // Start session to track user login
require_once "connect.php"; // Connect to database

// Redirect to login page if user is not logged in
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

// Fetch user data from the database
$user_id = $_SESSION["user_id"];
$sql = "SELECT Name, Role_ID FROM User WHERE User_ID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Assign role name based on Role_ID
$roleNames = [
    "R001" => "Administrator",
    "R002" => "Inventory Manager",
    "R003" => "Store Clerk",
    "R004" => "Finance Officer"
];
$user_role = ($user && isset($roleNames[$user["Role_ID"]])) ? $roleNames[$user["Role_ID"]] : "Unknown Role";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <i class="fas fa-boxes"></i>
                    <h1>Inventory Management System</h1>
                </div>
                <div class="nav-tabs">
                    <div class="nav-tab <?= ($user_role == 'Administrator') ? 'active' : '' ?>" data-tab="admin">Administrator</div>
                    <div class="nav-tab <?= ($user_role == 'Inventory Manager') ? 'active' : '' ?>" data-tab="manager">Inventory Manager</div>
                    <div class="nav-tab <?= ($user_role == 'Store Clerk') ? 'active' : '' ?>" data-tab="clerk">Store Clerk</div>
                    <div class="nav-tab <?= ($user_role == 'Finance Officer') ? 'active' : '' ?>" data-tab="finance">Finance Officer</div>
                </div>
            </div>
        </div>
    </header>
    
    <div class="container">
        <div class="dashboard">
            <div class="user-panel">
                <div class="user-header">
                    <div class="avatar">USER</div>
                    <div class="user-info">
                        <h2><?= htmlspecialchars($user["Name"]) ?></h2>
                        <span class="role"><?= htmlspecialchars($user_role) ?></span>
                    </div>
                </div>
                
                <div class="user-stats">
                    <div class="stat-card">
                        <i class="fas fa-box"></i>
                        <div class="value">142</div>
                        <div class="label">Inventory Items</div>
                    </div>
                    <div class="stat-card">
                        <i class="fas fa-users"></i>
                        <div class="value">24</div>
                        <div class="label">Active Users</div>
                    </div>
                    <div class="stat-card">
                        <i class="fas fa-clipboard-list"></i>
                        <div class="value">18</div>
                        <div class="label">Pending Requests</div>
                    </div>
                    <div class="stat-card">
                        <i class="fas fa-chart-line"></i>
                        <div class="value">97%</div>
                        <div class="label">System Uptime</div>
                    </div>
                </div>
                
                <div class="system-status">
                    <h3><i class="fas fa-shield-alt"></i> Security Status</h3>
                    <ul class="features">
                        <li><i class="fas fa-check-circle"></i> Encryption: Active</li>
                        <li><i class="fas fa-check-circle"></i> RBAC: Enabled</li>
                        <li><i class="fas fa-check-circle"></i> Audit Logs: Active</li>
                        <li><i class="fas fa-check-circle"></i> JWT Authentication</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
