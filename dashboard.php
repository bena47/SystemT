<?php
session_start(); // Start session to track logged-in user

<?php include("includes/header.php"); ?>
// Include dashboard files
include("includes/admin_dashboard.php");
include("includes/inventory_manager.php");
include("includes/store_clerk_dashboard.php");
include("includes/finance_officer_dashboard.php");

// Simulate user role retrieval (in practice, get this from DB or session)
$user_role = isset($_SESSION['role']) ? $_SESSION['role'] : 'Admin'; // Example role

// Render dashboard based on role
switch ($user_role) {
    case 'Admin':
        renderAdminDashboard();
        break;
    case 'Inventory Manager':
        renderInventoryDashboard();
        break;
    case 'Store Clerk':
        renderStoreClerkDashboard();
        break;
    case 'Finance Officer':
        renderFinanceOfficerDashboard();
        break;
    default:
        echo "<p>Access Denied: No valid dashboard assigned.</p>";
}
?>
