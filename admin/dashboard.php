<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

$submissions = [];
$log_file = "../contact_submissions.log";
if (file_exists($log_file)) {
    $submissions = file($log_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
}

$visitor_file = "../visitor_count.txt";
$visitor_count = 0;
if (file_exists($visitor_file)) {
    $visitor_count = (int)file_get_contents($visitor_file);
}

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Ezedin Kedir Portfolio</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .logout-btn {
            background: rgba(239, 68, 68, 0.15);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: #ef4444;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            transition: var(--transition);
        }
        .logout-btn:hover {
            background: #ef4444;
            color: white;
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.3);
        }
    </style>
</head>
<body>
    <!-- Sticky Navigation -->
    <header>
        <div class="container">
            <div class="logo">
                <a href="../index.php">Ezedin<span>.dev Admin</span></a>
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="../index.php">View Site</a></li>
                    <li><a href="?logout=1" class="logout-btn">Logout <i class="fas fa-sign-out-alt"></i></a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <div class="dashboard-container container">
        <div class="dashboard-header">
            <h2 class="dashboard-title"><i class="fas fa-user-shield" style="color: var(--primary); margin-right: 12px;"></i>Welcome, <?php echo htmlspecialchars($_SESSION['admin_username']); ?></h2>
        </div>
        
        <div class="stats-container">
            <div class="stat-box" style="display: flex; align-items: center; justify-content: space-between; text-align: left; padding: 24px;">
                <div>
                    <div class="stat-number" style="font-size: 2.5rem;"><?php echo $visitor_count; ?></div>
                    <div class="stat-label" style="font-size: 0.85rem; text-transform: uppercase; color: var(--text-secondary);">Total Visitors</div>
                </div>
                <div class="contact-icon-wrapper" style="background: rgba(6, 182, 212, 0.1); color: var(--secondary);"><i class="fas fa-users" style="font-size: 1.5rem;"></i></div>
            </div>
            
            <div class="stat-box" style="display: flex; align-items: center; justify-content: space-between; text-align: left; padding: 24px;">
                <div>
                    <div class="stat-number" style="font-size: 2.5rem;"><?php echo count($submissions); ?></div>
                    <div class="stat-label" style="font-size: 0.85rem; text-transform: uppercase; color: var(--text-secondary);">Contact Submissions</div>
                </div>
                <div class="contact-icon-wrapper" style="background: rgba(99, 102, 241, 0.1); color: var(--primary);"><i class="fas fa-envelope-open-text" style="font-size: 1.5rem;"></i></div>
            </div>
        </div>
        
        <div class="dashboard-card">
            <h3><i class="fas fa-list-ul" style="color: var(--secondary); margin-right: 10px;"></i>Recent Submissions Log</h3>
            
            <?php if (empty($submissions)): ?>
                <div class="visitor-stat-card" style="border-style: solid; background: rgba(255, 255, 255, 0.02);">
                    <i class="fas fa-info-circle"></i>
                    <span>No contact submissions found in the database.</span>
                </div>
            <?php else: ?>
                <div style="overflow-x: auto;">
                    <table class="submissions-table">
                        <thead>
                            <tr>
                                <th><i class="far fa-calendar-alt" style="margin-right: 6px;"></i> Date / Time</th>
                                <th><i class="far fa-user" style="margin-right: 6px;"></i> Sender Name</th>
                                <th><i class="far fa-envelope" style="margin-right: 6px;"></i> Email Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach (array_reverse($submissions) as $submission): ?>
                                <tr>
                                    <?php 
                                        // Parse the log entry: "[Date/Time] - New message from: [Name] ([Email])"
                                        $parts = explode(' - ', $submission, 2);
                                        $datetime = $parts[0] ?? '';
                                        
                                        $details = $parts[1] ?? '';
                                        
                                        // Extract name and email using regex
                                        preg_match('/New message from: (.*) \((.*)\)/', $details, $matches);
                                        $name = $matches[1] ?? 'Unknown';
                                        $email = $matches[2] ?? 'Unknown';
                                    ?>
                                    <td style="font-weight: 500; color: var(--text-primary);"><?php echo htmlspecialchars($datetime); ?></td>
                                    <td><?php echo htmlspecialchars($name); ?></td>
                                    <td>
                                        <a href="mailto:<?php echo htmlspecialchars($email); ?>" style="color: var(--secondary); font-weight: 500;" onmouseover="this.style.color='var(--primary)'" onmouseout="this.style.color='var(--secondary)'">
                                            <?php echo htmlspecialchars($email); ?> <i class="fas fa-external-link-alt" style="font-size: 0.75rem; margin-left: 4px;"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>
    
    <footer style="margin-top: 80px;">
        <div class="container">
            <div class="footer-content" style="justify-content: center;">
                <p>&copy; <?php echo date("Y"); ?> Ezedin Kedir Portfolio Control Panel. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
