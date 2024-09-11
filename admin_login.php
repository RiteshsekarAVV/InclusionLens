<?php
// Start by checking if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capture form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Connect to the database
    $con = new mysqli("localhost", "root", "", "admin");

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Hash the password before storing it in the database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Use prepared statements to insert form data
    $sql = "INSERT INTO adminhr (email, password) VALUES (?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ss", $email, $hashed_password);

    // Execute the query
    if ($stmt->execute()) {
        echo "<script>alert('Inserted successfully!');</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login - Inclusion Lens</title>
    <link rel="stylesheet" href="admin_login.css" />
  </head>
  <body>
    <header>
      <h1>Inclusion Lens</h1>
      <nav>
        <a class="header-link" href="index.php">Home</a>
        <a class="header-link" href="about.php">About</a>
        <a class="header-link" href="contact.php">Contact Us</a>
      </nav>
    </header>
    <main>
      <section class="login-form">
        <h2>Admin Login</h2>
        <form action="admin_login.php" method="post">
          <label for="admin-email">Email:</label>
          <input type="email" id="admin-email" name="email" required />

          <label for="admin-password">Password:</label>
          <input type="password" id="admin-password" name="password" required />

          <button type="submit">Log In</button>
          <button type="button" onclick="window.location.href='admin_signup.php';">Go to Admin Signup</button>

        </form>
      </section>
    </main>
    <footer>
      <p>&copy; 2024 Inclusion Lens. All Rights Reserved.</p>
    </footer>
  </body>
</html>
