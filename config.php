<?php

define('SITE_NAME', 'Ezedin Kedir Portfolio');
define('SITE_EMAIL', 'ezexkedir19@gmail.com');
define('ADMIN_EMAIL', 'ezexkedir19@gmail.com');
define('LOG_FILE', 'contact_submissions.log');
define('VISITOR_FILE', 'visitor_count.txt');


function logMessage($message) {
    $log_file = __DIR__ . '/' . LOG_FILE;
    $log_message = date("Y-m-d H:i:s") . " - " . $message . "\n";
    file_put_contents($log_file, $log_message, FILE_APPEND);
}


function updateVisitorCount() {
    $visitor_file = __DIR__ . '/' . VISITOR_FILE;
    if (file_exists($visitor_file)) {
        $count = (int)file_get_contents($visitor_file);
        $count++;
    } else {
        $count = 1;
    }
    file_put_contents($visitor_file, $count);
    return $count;
}


function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
