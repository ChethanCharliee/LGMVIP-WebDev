<?php
    echo '<script>alert("Welcome Admin")</script>';
?>
<!DOCTYPE html>
<html>
<head>
    <title>AdminPanel</title>
    <link rel="stylesheet" type="text/css" href="css/adminpanel.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>My Menu</header>
      <a href="enter-result.php" class="active">
        <span>Enter Result</span>
      </a>
      <a href="update-result.php">
        <span>Update Result</span>
      </a>
      <a href="view-result.php">
        <span>View Details</span>
      </a>
      <a href="delete-result.php">
        <span>Delete Details</span>
      </a>
      <a href="change-pass.php">
        <span>Change Password</span>
      </a>
    </div>

    <center>
        <p >Welcome Admin!</p>

</center>


</body>
</html>