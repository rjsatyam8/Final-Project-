<?php
include 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    $sql = "INSERT INTO appointments (name, email, phone, date, message) 
            VALUES ('$name', '$email', '$phone', '$date', '$message')";
    if ($conn->query($sql)) {
        echo "<script>alert('Appointment booked successfully!');</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Book Appointment | SatyamCare Hospital</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
  <h2>Book Appointment</h2>
  <form method="POST">
    <input type="text" name="name" placeholder="Full Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="phone" placeholder="Phone Number" required>
    <input type="date" name="date" required>
    <textarea name="message" placeholder="Health Concerns / Message"></textarea>
    <button type="submit" class="btn">Book Appointment</button>
  </form>
</div>
</body>
</html>

