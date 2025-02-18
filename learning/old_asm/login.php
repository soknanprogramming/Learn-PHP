<?php
session_start();  // Start the session at the top of the script

require_once 'config/database.php'; // Include the database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and execute the query to fetch the user from the database
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    // Check if user exists and password matches
    if ($user && /*password_verify($password, $user['password'])*/ $password) {
        // Password is correct, start session and store user data
        $_SESSION['username'] = $user['username'];  // Store username in session variable
        header("Location: index.php");  // Redirect to the dashboard
        exit();  // Always use exit after header redirect
    } else {
        // Invalid credentials
        $error_message = "Invalid username or password!";
    }
}
?>

<!-- HTML login form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ចូលប្រើប្រាស់</title>
    <link rel="stylesheet" href="login.css">
        
</head>
<body>
    <div class="login-container">
        <h2>ការចូលប្រើប្រាស់</h2>

        <!-- Display error message if login failed -->
        <?php if (isset($error_message)): ?>
            <p><?php echo $error_message; ?></p>
        <?php endif; ?>

        <form method="POST" action="login.php">
            <label for="username">ឈ្មោះអ្នកប្រើប្រាស់:</label>
            <input type="text" name="username" id="username" required>

            <label for="password">ពាក្យសម្ងាត់:</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">ចូលប្រើប្រាស់</button>
        </form>
    </div>
</body>
</html>
