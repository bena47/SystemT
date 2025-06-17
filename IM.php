<?php
function renderInventoryDashboard() {
    echo '
    <section id="inventory-manager">
        <!-- Dashboard Header -->
        <div class="dashboard-header">
            <h2><i class="fas fa-clipboard-list"></i> Inventory Manager Dashboard</h2>
            <div class="actions">
                <button class="btn"><i class="fas fa-plus"></i> New Request</button>
            </div>
        </div>

        <!-- Dashboard Content -->
        <div class="card-grid">
            <!-- Stock Management -->
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-boxes"></i>
                    <h3>Stock Management</h3>
                </div>
                <div class="card-body">
                    <ul class="features">
                        <li><i class="fas fa-check"></i> Update stock levels</li>
                        <li><i class="fas fa-check"></i> Track item movement</li>
                        <li><i class="fas fa-check"></i> Set reorder points</li>
                        <li><i class="fas fa-check"></i> Manage item categories</li>
                    </ul>
                </div>
            </div>

            <!-- Procurement -->
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-shopping-cart"></i>
                    <h3>Procurement</h3>
                </div>
                <div class="card-body">
                    <ul class="features">
                        <li><i class="fas fa-check"></i> Create purchase requests</li>
                        <li><i class="fas fa-check"></i> Track request status</li>
                        <li><i class="fas fa-check"></i> Manage supplier details</li>
                        <li><i class="fas fa-check"></i> Receive stock items</li>
                    </ul>
                </div>
            </div>

            <!-- Inventory Reports -->
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-chart-bar"></i>
                    <h3>Inventory Reports</h3>
                </div>
                <div class="card-body">
                    <ul class="features">
                        <li><i class="fas fa-check"></i> Stock level reports</li>
                        <li><i class="fas fa-check"></i> Item movement history</li>
                        <li><i class="fas fa-check"></i> Procurement summaries</li>
                        <li><i class="fas fa-check"></i> Low stock alerts</li>
                    </ul>
                </div>
            </div>

            <!-- Supplier Management -->
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-truck-loading"></i>
                    <h3>Supplier Management</h3>
                </div>
                <div class="card-body">
                    <ul class="features">
                        <li><i class="fas fa-check"></i> Maintain supplier database</li>
                        <li><i class="fas fa-check"></i> Track supplier performance</li>
                        <li><i class="fas fa-check"></i> Manage contracts</li>
                        <li><i class="fas fa-check"></i> Compare supplier pricing</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>';
}
?>
