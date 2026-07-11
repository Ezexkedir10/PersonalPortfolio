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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: var(--bg-main);
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="login-title"><i class="fas fa-lock" style="color: var(--primary); margin-right: 10px;"></i>Admin Login</h2>
        
        <?php if (!empty($error)): ?>
            <div class="error-message">
                <i class="fas fa-exclamation-triangle" style="margin-right: 6px;"></i>
                <?php echo $error; ?>
            </div>
        <?php endif; ?>
        
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group" style="margin-bottom: 20px;">
                <input type="text" id="username" name="username" placeholder="Username" style="width: 100%;" required>
            </div>
            <div class="form-group" style="margin-bottom: 25px;">
                <input type="password" id="password" name="password" placeholder="Password" style="width: 100%;" required>
            </div>
            <button type="submit" class="btn primary-btn" style="width: 100%; border-radius: 12px; padding: 14px 20px;">Sign In <i class="fas fa-sign-in-alt"></i></button>
        </form>
        
        <div style="text-align: center; margin-top: 25px;">
            <a href="../index.php" style="color: var(--text-secondary); font-size: 0.9rem;" onmouseover="this.style.color='var(--text-primary)'" onmouseout="this.style.color='var(--text-secondary)'"><i class="fas fa-arrow-left"></i> Back to Website</a>
        </div>
    </div>
</body>
</html>
