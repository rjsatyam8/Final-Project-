<?php
include 'db.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user'] = $row['name'];
            header("Location: index.php");
            exit();
        }
    }
    echo "<script>alert('Invalid login credentials.');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login | SatyamCare Hospital</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
  <h2>Login</h2>
  <form method="POST">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" class="btn">Login</button>
    <p style="text-align:center; margin-top:10px;">Don't have an account? <a href="register.php">Register</a></p>
  </form>
</div>
</body>
</html>
