<?php
session_start(); // Start session to track logged-in user
require_once "config/connect.php";

include("includes/header.php");

// Check if user is logged in 
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php"); // Redirect to login page if not logged in
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

// Assign user role
$user_role = isset($user["Role_ID"]) ? $user["Role_ID"] : "Unknown Role";


// Include dashboard files
include("includes/admin_dashboard.php");
include("includes/inventory_manager.php");
include("includes/store_clerk_dashboard.php");
include("includes/finance_officer_dashboard.php");

// Assign role name based on Role_ID
$roleNames = [
    "R001" => "Administrator",
    "R002" => "Inventory Manager",
    "R003" => "Store Clerk",
    "R004" => "Finance Officer"
];



// Render dashboard based on role
switch ($user_role) {
    case 'R001':
        renderAdminDashboard();
        break;
    case 'R002':
        renderInventoryDashboard();
        break;
    case 'R003':
        renderStoreClerkDashboard();
        break;
    case 'R004':
        renderFinanceOfficerDashboard();
        break;
    default:
        echo "<p>Access Denied: No valid dashboard assigned.</p>";
}
?>
