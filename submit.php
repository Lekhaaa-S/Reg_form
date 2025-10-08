<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Success</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      background: linear-gradient(120deg, #89f7fe, #66a6ff);
    }
    .success-box {
      background: #ffffffee;
      padding: 30px;
      border-radius: 12px;
      width: 420px;
      margin: 100px auto;
      text-align: center;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
      animation: fadeIn 1.2s ease;
    }
    h2 {
      color: #333;
    }
    p {
      color: #555;
      font-size: 16px;
      margin: 8px 0;
    }
    .back-btn {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      background: #5fa8d3;
      color: #fff;
      border-radius: 8px;
      text-decoration: none;
      transition: 0.3s;
    }
    .back-btn:hover {
      background: #4b96c0;
    }
  </style>
</head>
<body>
  <div class="success-box">
    <h2>Registration Successful 🎉</h2>
    <p><strong>Name:</strong> <?= $name ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
    <p><strong>Phone:</strong> <?= $phone ?></p>
    <p><strong>Gender:</strong> <?= $gender ?></p>
    <p><strong>Course:</strong> <?= $course ?></p>
    <p><strong>Address:</strong> <?= nl2br($address) ?></p>
    <a href="index.html" class="back-btn">← Go Back</a>
  </div>
      <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $phone = htmlspecialchars($_POST['phone']);
        $gender = htmlspecialchars($_POST['gender']);
        $course = htmlspecialchars($_POST['course']);
        $address = htmlspecialchars($_POST['address']);
    } else {
        echo "<h2>No data submitted.</h2>";
        exit;
    }
    ?>
</body>
</html>
