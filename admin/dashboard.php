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
        .dashboard-container {
            padding: 100px 20px 50px;
        }
        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }
        .dashboard-title {
            font-size: 2rem;
        }
        .dashboard-card {
            background-color: var(--light-color);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: var(--box-shadow);
        }
        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        .stat-card {
            background-color: var(--dark-color);
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: var(--box-shadow);
        }
        .stat-card h3 {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 10px;
        }
        .submissions-table {
            width: 100%;
            border-collapse: collapse;
        }
        .submissions-table th, .submissions-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid var(--border-color);
        }
        .submissions-table th {
            background-color: var(--dark-color);
            color: var(--text-color);
        }
        .submissions-table tr:hover {
            background-color: rgba(30, 41, 59, 0.5);
        }
        .empty-message {
            text-align: center;
            padding: 20px;
            color: var(--gray-color);
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <h1>Admin Dashboard</h1>
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="../index.php">View Site</a></li>
                    <li><a href="?logout=1">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <div class="dashboard-container container">
        <div class="dashboard-header">
            <h2 class="dashboard-title">Welcome, <?php echo $_SESSION['admin_username']; ?></h2>
        </div>
        
        <div class="stats-container">
            <div class="stat-card">
                <h3><?php echo $visitor_count; ?></h3>
                <p>Total Visitors</p>
            </div>
            <div class="stat-card">
                <h3><?php echo count($submissions); ?></h3>
                <p>Contact Submissions</p>
            </div>
        </div>
        
        <div class="dashboard-card">
            <h3>Recent Contact Submissions</h3>
            
            <?php if (empty($submissions)): ?>
                <div class="empty-message">
                    <p>No contact submissions yet.</p>
                </div>
            <?php else: ?>
                <table class="submissions-table">
                    <thead>
                        <tr>
                            <th>Date/Time</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach (array_reverse($submissions) as $submission): ?>
                            <tr>
                                <?php 
                                    // Parse the log entry
                                    $parts = explode(' - ', $submission, 2);
                                    $datetime = $parts[0] ?? '';
                                    
                                    $details = '';
                                    if (isset($parts[1])) {
                                        $details = $parts[1];
                                    }
                                    
                                    // Extract name and email
                                    preg_match('/New message from: (.*) $$(.*)$$/', $details, $matches);
                                    $name = $matches[1] ?? 'Unknown';
                                    $email = $matches[2] ?? 'Unknown';
                                ?>
                                <td><?php echo $datetime; ?></td>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $email; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>
    
    <footer>
        <div class="container">
            <div class="footer-content">
                <p>&copy; <?php echo date("Y"); ?> Ezedin Kedir. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
