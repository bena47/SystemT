<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
    <link rel="stylesheet" href="CSS/link.css" type="text/css">
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
                    <div class="nav-tab active" data-tab="admin">Administrator</div>
                    <div class="nav-tab" data-tab="manager">Inventory Manager</div>
                    <div class="nav-tab" data-tab="clerk">Store Clerk</div>
                    <div class="nav-tab" data-tab="finance">Finance Officer</div>
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
                        <h2>MR/MRS</h2>
                        <span class="role">Administrator</span>
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
            
            <!-- Administrator Dashboard -->
            <div id="admin-dashboard" class="dashboard-content active">
                <div class="dashboard-header">
                    <h2><i class="fas fa-user-shield"></i> Administrator Dashboard</h2>
                    <div class="actions">
                        <button class="btn"><i class="fas fa-plus"></i> Add User</button>
                    </div>
                </div>
                
                <div class="card-grid">
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-users-cog"></i>
                            <h3>User Management</h3>
                        </div>
                        <div class="card-body">
                            <ul class="features">
                                <li><i class="fas fa-check"></i> Create and manage user accounts</li>
                                <li><i class="fas fa-check"></i> Assign roles and permissions</li>
                                <li><i class="fas fa-check"></i> Reset user passwords</li>
                                <li><i class="fas fa-check"></i> View user activity logs</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-shield-alt"></i>
                            <h3>Access Control</h3>
                        </div>
                        <div class="card-body">
                            <ul class="features">
                                <li><i class="fas fa-check"></i> Configure role-based permissions</li>
                                <li><i class="fas fa-check"></i> Set system access levels</li>
                                <li><i class="fas fa-check"></i> Manage security policies</li>
                                <li><i class="fas fa-check"></i> IP whitelisting/blacklisting</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-cogs"></i>
                            <h3>System Settings</h3>
                        </div>
                        <div class="card-body">
                            <ul class="features">
                                <li><i class="fas fa-check"></i> Configure system preferences</li>
                                <li><i class="fas fa-check"></i> Manage notification settings</li>
                                <li><i class="fas fa-check"></i> Set up data backups</li>
                                <li><i class="fas fa-check"></i> System health monitoring</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-file-alt"></i>
                            <h3>Reports & Audits</h3>
                        </div>
                        <div class="card-body">
                            <ul class="features">
                                <li><i class="fas fa-check"></i> Generate access reports</li>
                                <li><i class="fas fa-check"></i> View security audits</li>
                                <li><i class="fas fa-check"></i> System usage analytics</li>
                                <li><i class="fas fa-check"></i> Export reports to PDF/CSV</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Inventory Manager Dashboard -->
            <div id="manager-dashboard" class="dashboard-content">
                <div class="dashboard-header">
                    <h2><i class="fas fa-clipboard-list"></i> Inventory Manager Dashboard</h2>
                    <div class="actions">
                        <button class="btn"><i class="fas fa-plus"></i> New Request</button>
                    </div>
                </div>
                
                <div class="card-grid">
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
            </div>
            
            <!-- Store Clerk Dashboard -->
            <div id="clerk-dashboard" class="dashboard-content">
                <div class="dashboard-header">
                    <h2><i class="fas fa-store"></i> Store Clerk Dashboard</h2>
                    <div class="actions">
                        <button class="btn"><i class="fas fa-barcode"></i> Scan Item</button>
                    </div>
                </div>
                
                <div class="card-grid">
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
            </div>
            
            <!-- Finance Officer Dashboard -->
            <div id="finance-dashboard" class="dashboard-content">
                <div class="dashboard-header">
                    <h2><i class="fas fa-coins"></i> Finance Officer Dashboard</h2>
                    <div class="actions">
                        <button class="btn"><i class="fas fa-file-invoice-dollar"></i> New Report</button>
                    </div>
                </div>
                
                <div class="card-grid">
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
            </div>
        </div>
        <script>
        // Tab switching functionality
        document.querySelectorAll('.nav-tab').forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active class from all tabs
                document.querySelectorAll('.nav-tab').forEach(t => t.classList.remove('active'));
                // Add active class to clicked tab
                tab.classList.add('active');
                
                // Hide all dashboards
                document.querySelectorAll('.dashboard-content').forEach(dash => {
                    dash.classList.remove('active');
                });
                
                // Show selected dashboard
                const tabId = tab.getAttribute('data-tab');
                document.getElementById(`${tabId}-dashboard`).classList.add('active');
                
                // Update user role display
                const roleNames = {
                    'admin': 'Administrator',
                    'manager': 'Inventory Manager',
                    'clerk': 'Store Clerk',
                    'finance': 'Finance Officer'
                };
                document.querySelector('.role').textContent = roleNames[tabId];
            });
        });
    </script>
    <script>
  document.querySelector(".btn").addEventListener("click", function () {
    alert("User added successfully!");
    // You can replace this with a modal, form popup, etc.
  });
</script>
        </body>
</html>