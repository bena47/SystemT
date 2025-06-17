<?php
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && strpos($_SERVER["CONTENT_TYPE"], "application/json") !== false) {
    $data = json_decode(file_get_contents("php://input"), true);

    $name = $data["name"];
    $email = $data["email"];
    $password = password_hash($data["password"], PASSWORD_DEFAULT);
    $role_id = $data["role_id"];

    // Connect to MySQL
    $conn = new mysqli("localhost", "root", "", "user");

    if ($conn->connect_error) {
        echo json_encode(["message" => "Connection failed: " . $conn->connect_error]);
        exit;
    }

    // Insert into User table
    $sql = "INSERT INTO User (User_ID, Name, Email, Password, Role_ID)
            VALUES (UUID(), ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $password, $role_id);

    if ($stmt->execute()) {
        echo json_encode(["message" => "User added successfully!"]);
    } else {
        echo json_encode(["message" => "Error: " . $conn->error]);
    }
    $stmt->close();
    $conn->close();
    exit;
}
?>
<!-- ...existing code... -->
<form id="addUserForm">
  <input type="text" id="name" name="name" placeholder="Full Name" required>
  <input type="email" id="email" name="email" placeholder="Email" required>
  <input type="password" id="password" name="password" placeholder="Password" required>
  <select id="role" name="role" required>
    <option value="">Select Role</option>
    <option value="R001">Admin</option>
    <option value="R002">Inventory Clerk</option>
  </select>
  <button type="submit" class="btn"><i class="fas fa-plus"></i> Add User</button>
 </form>

<?php
$conn = new mysqli("localhost", "root", "", "user");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
