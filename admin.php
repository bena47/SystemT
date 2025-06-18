<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator Dashboard</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

<?php
function renderAdminDashboard() {
    echo '
    <section id="admin-dashboard" class="dashboard-content active">
        <!-- Dashboard Header -->
        <div class="dashboard-header">
            <h2><i class="fas fa-user-shield"></i> Administrator Dashboard</h2>
            <div class="actions">
                <button class="btn" id="addUserBtn"><i class="fas fa-user-plus"></i> Add User</button>
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

            <!-- User Form Modal -->
    <div id="addUserModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Add New User</h2>
            <form id="addUserForm">
                <input type="text" id="name" placeholder="User Name" required>
                <input type="email" id="email" placeholder="Email" required>
                <input type="password" id="password" placeholder="Password" required>
                <select id="role">
                    <option value="R001">Administrator</option>
                    <option value="R002">Inventory Manager</option>
                    <option value="R003">Store Clerk</option>
                    <option value="R004">Finance Officer</option>
                </select>
                <button type="submit">Submit</button>
            </form>
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
renderAdminDashboard();
?>
            
   <script>
  document.addEventListener("DOMContentLoaded", function () {
    const addUserBtn = document.getElementById("addUserBtn");
    const addUserModal = document.getElementById("addUserModal");
    const closeBtn = document.querySelector(".close");

    // Open modal when button is clicked
    if (addUserBtn && addUserModal) {
        addUserBtn.addEventListener("click", function () {
            addUserModal.style.display = "block";
        });
    }

    // Close modal when 'x' is clicked
    if (closeBtn && addUserModal) {
      closeBtn.addEventListener("click", function () {
        addUserModal.style.display = "none";
      });
    }

    // Handle user submission
     const addUserForm = document.getElementById("addUserForm");
    if (addUserForm) {
      addUserForm.addEventListener("submit", function (e) {
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
      .then(response => {
        alert(response.message);
        addUserModal.style.display = "none";
      })
      .catch(err => console.error("Error:", err));
    });
    }
    });
</script>         
</body>
</html>