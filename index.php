<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $course = htmlspecialchars($_POST['course']);
} else {
    echo "<h2>No data received!</h2>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Successful</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      padding: 30px;
    }
    .result-container {
      max-width: 600px;
      margin: 50px auto;
      background: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.2);
    }
    h2 {
      color: #2ecc71;
    }
    .info {
      line-height: 1.8;
    }
    a {
      display: inline-block;
      margin-top: 20px;
      text-decoration: none;
      background-color: #3498db;
      color: white;
      padding: 10px 15px;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <div class="result-container">
    <h2>Registration Successful!</h2>
    <div class="info">
      <p><strong>Full Name:</strong> <?= $fullname ?></p>
      <p><strong>Email:</strong> <?= $email ?></p>
      <p><strong>Phone:</strong> <?= $phone ?></p>
      <p><strong>Gender:</strong> <?= $gender ?></p>
      <p><strong>Course Applied:</strong> <?= $course ?></p>
    </div>
    <a href="index.html">Go Back</a>
  </div>
</body>
</html>
