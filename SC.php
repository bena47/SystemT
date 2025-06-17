<?php
function renderStoreClerkDashboard() {
    echo '
    <section id="clerk-dashboard" class="dashboard-content">
        <!-- Dashboard Header -->
        <div class="dashboard-header">
            <h2><i class="fas fa-store"></i> Store Clerk Dashboard</h2>
            <div class="actions">
                <button class="btn"><i class="fas fa-barcode"></i> Scan Item</button>
            </div>
        </div>

        <!-- Dashboard Content -->
        <div class="card-grid">
            <!-- Item Check-in -->
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-sign-in-alt"></i>
                    <h3>Item Check-in</h3>
                </div>
                <div class="card-body">
                    <ul class="features">
                        <li><i class="fas fa-check"></i> Receive incoming stock</li>
                        <li><i class="fas fa-check"></i> Verify item quantities</li>
                        <li><i class="fas fa-check"></i> Update stock records</li>
                        <li><i class="fas fa-check"></i> Print item labels</li>
                    </ul>
                </div>
            </div>

            <!-- Item Check-out -->
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-sign-out-alt"></i>
                    <h3>Item Check-out</h3>
                </div>
                <div class="card-body">
                    <ul class="features">
                        <li><i class="fas fa-check"></i> Process item requests</li>
                        <li><i class="fas fa-check"></i> Issue items to users</li>
                        <li><i class="fas fa-check"></i> Update stock levels</li>
                        <li><i class="fas fa-check"></i> Generate issue receipts</li>
                    </ul>
                </div>
            </div>

            <!-- Barcode Operations -->
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-barcode"></i>
                    <h3>Barcode Operations</h3>
                </div>
                <div class="card-body">
                    <ul class="features">
                        <li><i class="fas fa-check"></i> Scan items for check-in/out</li>
                        <li><i class="fas fa-check"></i> Print barcode labels</li>
                        <li><i class="fas fa-check"></i> Verify item details</li>
                        <li><i class="fas fa-check"></i> Search items by barcode</li>
                    </ul>
                </div>
            </div>

            <!-- Request Approvals -->
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-clipboard-check"></i>
                    <h3>Request Approvals</h3>
                </div>
                <div class="card-body">
                    <ul class="features">
                        <li><i class="fas fa-check"></i> Review item requests</li>
                        <li><i class="fas fa-check"></i> Approve/Reject requests</li>
                        <li><i class="fas fa-check"></i> Track request history</li>
                        <li><i class="fas fa-check"></i> Notify requesters</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>';
}
?>
