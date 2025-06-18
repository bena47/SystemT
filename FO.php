<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>



<!DOCTYPE html>
<html lang="en">
    <style>body { background: red; }</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Officer Dashboard</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" /> 
</head>
<body>

<?php
function renderFinanceOfficerDashboard() {
    echo '
    <section id="finance-dashboard" class="dashboard-content">
        <!-- Dashboard Header -->
        <div class="dashboard-header">
            <h2><i class="fas fa-coins"></i> Finance Officer Dashboard</h2>
            <div class="actions">
                <button class="btn"><i class="fas fa-file-invoice-dollar"></i> New Report</button>
            </div>
        </div>

        <!-- Dashboard Content -->
        <div class="card-grid">
            <!-- Budget Management -->
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-file-invoice-dollar"></i>
                    <h3>Budget Management</h3>
                </div>
                <div class="card-body">
                    <ul class="features">
                        <li><i class="fas fa-check"></i> Set department budgets</li>
                        <li><i class="fas fa-check"></i> Track budget utilization</li>
                        <li><i class="fas fa-check"></i> Budget approval workflows</li>
                        <li><i class="fas fa-check"></i> Budget variance analysis</li>
                    </ul>
                </div>
            </div>

            <!-- Expense Tracking -->
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-hand-holding-usd"></i>
                    <h3>Expense Tracking</h3>
                </div>
                <div class="card-body">
                    <ul class="features">
                        <li><i class="fas fa-check"></i> Record and categorize expenses</li>
                        <li><i class="fas fa-check"></i> Attach supporting documents</li>
                        <li><i class="fas fa-check"></i> Track reimbursement status</li>
                        <li><i class="fas fa-check"></i> Generate expense reports</li>
                    </ul>
                </div>
            </div>

            <!-- Financial Reports -->
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-chart-pie"></i>
                    <h3>Financial Reports</h3>
                </div>
                <div class="card-body">
                    <ul class="features">
                        <li><i class="fas fa-check"></i> Procurement cost summaries</li>
                        <li><i class="fas fa-check"></i> Departmental spending</li>
                        <li><i class="fas fa-check"></i> Cost analysis by category</li>
                        <li><i class="fas fa-check"></i> Inventory valuation reports</li>
                    </ul>
                </div>
            </div>

            <!-- Approval Authority -->
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-check-circle"></i>
                    <h3>Approval Authority</h3>
                </div>
                <div class="card-body">
                    <ul class="features">
                        <li><i class="fas fa-check"></i> Approve procurement requests</li>
                        <li><i class="fas fa-check"></i> Review expense claims</li>
                        <li><i class="fas fa-check"></i> Authorize budget adjustments</li>
                        <li><i class="fas fa-check"></i> Validate financial documents</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>';
}
renderFinanceOfficerDashboard();
?>
</body>
</html>
