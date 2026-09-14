<?php
/**
 * Shared settings and helpers for the portfolio.
 */

define('SITE_NAME', 'Ezedin Kedir Portfolio');
define('SITE_EMAIL', 'ezexkedir19@gmail.com');
define('ADMIN_EMAIL', 'ezexkedir19@gmail.com');
define('LOG_FILE', 'contact_submissions.log');
define('VISITOR_FILE', 'visitor_count.txt');
define('CV_FILE', 'Ezedin_Kedir_CV.pdf'); // put your CV PDF in the same folder with this name

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/** Escape text for safe HTML output. */
function e($value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

/** Clean a single-line field (name, subject, email) and strip anything that could inject mail headers. */
function cleanLine($value): string
{
    $value = trim((string) $value);
    $value = preg_replace('/[\r\n\t]+/', ' ', $value);
    return trim(strip_tags($value));
}

/** Clean a multi-line field (message). Output is escaped later with e(). */
function cleanText($value): string
{
    $value = trim((string) $value);
    $value = str_replace("\0", '', $value);
    return strip_tags($value);
}

/** Append a line to the contact log, with a file lock. */
function logMessage(string $message): bool
{
    $file = __DIR__ . '/' . LOG_FILE;
    $line = date('Y-m-d H:i:s') . ' - ' . $message . PHP_EOL;
    return file_put_contents($file, $line, FILE_APPEND | LOCK_EX) !== false;
}

/**
 * Count one visit per browser session (refreshing the page does not inflate the number).
 * Uses a file lock so two visitors at once cannot overwrite each other.
 */
function updateVisitorCount(): int
{
    $file = __DIR__ . '/' . VISITOR_FILE;
    $handle = @fopen($file, 'c+');
    if (!$handle) {
        return 0;
    }

    flock($handle, LOCK_EX);
    $count = (int) trim((string) stream_get_contents($handle));

    if (empty($_SESSION['visit_counted'])) {
        $count++;
        $_SESSION['visit_counted'] = true;
        ftruncate($handle, 0);
        rewind($handle);
        fwrite($handle, (string) $count);
    }

    flock($handle, LOCK_UN);
    fclose($handle);
    return $count;
}

/** Simple per-session throttle: one message every 30 seconds. */
function isRateLimited(int $seconds = 30): bool
{
    $last = $_SESSION['last_contact'] ?? 0;
    return (time() - $last) < $seconds;
}