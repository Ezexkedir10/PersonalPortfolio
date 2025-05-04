<?php
session_start();

if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header('Location: dashboard.php');
    exit;
}

$admin_username = "admin";
$admin_password = "admin123"; 

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if ($username === $admin_username && $password === $admin_password) {
        
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $username;
        
        
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Ezedin Kedir Portfolio</title>
    <link rel="stylesheet" href="../styles.css">
    <style>
        .login-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 30px;
            background-color: var(--light-color);
            border-radius: 10px;
            box-shadow: var(--box-shadow);
        }
        .login-title {
            text-align: center;
            margin-bottom: 30px;
        }
        .error-message {
            background-color: rgba(239, 68, 68, 0.2);
            border: 1px solid #ef4444;
            color: #ef4444;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="login-title">Admin Login</h2>
        
        <?php if (!empty($error)): ?>
            <div class="error-message">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>
        
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn primary-btn" style="width: 100%;">Login</button>
        </form>
        
        <div style="text-align: center; margin-top: 20px;">
            <a href="../index.php">Back to Website</a>
        </div>
    </div>
</body>
</html>
