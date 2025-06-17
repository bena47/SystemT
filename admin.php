
<?php
function renderAdminDashboard() {
    include("includes/header.php"); // Load header with CSS link
    echo '
    <section id="admin-dashboard" class="dashboard-content active">
        <!-- Dashboard Header -->
        <div class="dashboard-header">
            <h2><i class="fas fa-user-shield"></i> Administrator Dashboard</h2>
            <div class="actions">
                <button class="btn"><i class="fas fa-plus"></i> Add User</button>
            </div>
        </div>

        <!-- Dashboard Content -->
        <div class="card-grid">
            <!-- User Management -->
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

            <!-- Access Control -->
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

            <!-- System Settings -->
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

            <!-- Reports & Audits -->
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
    </section>';
}
?>
            
            
            
            
  
            
        
    <script>
  document.querySelector(".btn").addEventListener("click", function () {
    alert("User added successfully!");
    // You can replace this with a modal, form popup, etc.
  });
</script>
<script>
  document.getElementById("addUserForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const data = {
      name: document.getElementById("name").value,
      email: document.getElementById("email").value,
      password: document.getElementById("password").value,
      role_id: document.getElementById("role").value
    };

    fetch("add_user.php", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify(data)
    })
    .then(res => res.json())
    .then(response => alert(response.message))
    .catch(err => console.error("Error:", err));
  });
</script>
        </body>
</html>