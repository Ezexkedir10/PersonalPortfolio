<!-- <?php
require_once 'config.php';

$name = $email = $subject = $message = "";
$errors = [];
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $errors[] = "Name is required";
    } else {
        $name = sanitizeInput($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $errors[] = "Email is required";
    } else {
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format";
        }
    }

    if (empty($_POST["subject"])) {
        $errors[] = "Subject is required";
    } else {
        $subject = sanitizeInput($_POST["subject"]);
    }

    if (empty($_POST["message"])) {
        $errors[] = "Message is required";
    } else {
        $message = sanitizeInput($_POST["message"]);
    }

    if (empty($errors)) {
        $to = "ezexkedir19@gmail.com";

        $headers = "From: $name <$email>" . "\r\n";
        $headers .= "Reply-To: $email" . "\r\n";
        $headers .= "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

        $email_content = "<h2>New Contact Submission</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong><br>" . nl2br($message) . "</p>";

        @mail($to, "Portfolio Contact: $subject", $email_content, $headers);
        logMessage("New message from: $name ($email)");

        $success = true;
        $name = $email = $subject = $message = "";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Ezedin Kedir | Full Stack Developer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="page-shell">
        <div class="ambient ambient-one"></div>
        <div class="ambient ambient-two"></div>
        <div class="ambient ambient-three"></div>

        <header id="site-header" class="scrolled">
            <div class="container nav-shell">
                <a href="index.php#home" class="brand-mark">Ezedin<span>Kedir</span></a>
                <nav>
                    <ul class="nav-links">
                        <li><a href="index.php#home">Home</a></li>
                        <li><a href="index.php#about">About</a></li>
                        <li><a href="index.php#skills">Skills</a></li>
                        <li><a href="index.php#experience">Journey</a></li>
                        <li><a href="index.php#projects">Projects</a></li>
                        <li><a href="contact.php" class="active">Contact</a></li>
                    </ul>
                    <button class="hamburger" type="button" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </nav>
            </div>
        </header>

        <main>
            <section class="contact" style="padding-top: 140px;">
                <div class="container">
                    <div class="section-heading split-heading">
                        <div>
                            <span class="section-kicker">Contact</span>
                            <h2>Let&apos;s talk about your next project, internship, or collaboration.</h2>
                        </div>
                        <p>If you want someone who can combine frontend polish with backend structure, send a message and let&apos;s build something strong together.</p>
                    </div>

                    <?php if ($success): ?>
                        <div class="status-message success-message">
                            <i class="fas fa-check-circle"></i>
                            <span>Thank you for your message. Ezedin will get back to you shortly.</span>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($errors)): ?>
                        <div class="status-message error-message">
                            <i class="fas fa-triangle-exclamation"></i>
                            <div>
                                <strong>Please correct the following:</strong>
                                <ul class="error-list">
                                    <?php foreach ($errors as $error): ?>
                                        <li><?php echo htmlspecialchars($error); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="contact-band glass-card">
                        <div class="contact-intro">
                            <span class="section-kicker">Reach Out</span>
                            <h2>Open to opportunities that need thoughtful code and standout presentation.</h2>
                            <p>I&apos;m available for internships, junior roles, freelance builds, and product collaborations.</p>

                            <div class="contact-points">
                                <a href="mailto:ezexkedir19@gmail.com"><i class="fas fa-envelope"></i> ezexkedir19@gmail.com</a>
                                <a href="tel:+251979906161"><i class="fas fa-phone"></i> +251 979 906161</a>
                                <span><i class="fas fa-location-dot"></i> Addis Ababa, Ethiopia</span>
                            </div>

                            <div class="social-platforms">
                                <a href="https://github.com/Ezexkedir10" target="_blank" class="social-btn"><i class="fab fa-github"></i></a>
                                <a href="https://www.linkedin.com/in/ezedin-kedir-910464398" target="_blank" class="social-btn"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://x.com/Ezexkedir10" target="_blank" class="social-btn"><i class="fab fa-twitter"></i></a>
                                <a href="https://instagram.com/Ezexkedir10" target="_blank" class="social-btn"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>

                        <div class="contact-form-wrapper">
                            <form id="contactForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <div class="form-grid">
                                    <input type="text" id="name" name="name" placeholder="Your Name" value="<?php echo htmlspecialchars($name); ?>" required>
                                    <input type="email" id="email" name="email" placeholder="Your Email Address" value="<?php echo htmlspecialchars($email); ?>" required>
                                </div>
                                <input type="text" id="subject" name="subject" placeholder="Project Subject" value="<?php echo htmlspecialchars($subject); ?>" required>
                                <textarea id="message" name="message" placeholder="Tell me about your idea..." required><?php echo htmlspecialchars($message); ?></textarea>
                                <button type="submit" class="btn primary-btn submit-btn">Send Message <i class="fas fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <div class="container footer-shell">
                <p>&copy; <?php echo date("Y"); ?> Ezedin Kedir. Crafted with code, clarity, and visual intention.</p>
                <div class="footer-links">
                    <a href="index.php#home">Home</a>
                    <a href="index.php#about">About</a>
                    <a href="index.php#skills">Skills</a>
                    <a href="index.php#projects">Projects</a>
                </div>
            </div>
        </footer>
    </div>

    <script src="script.js"></script>
</body>
</html> -->
<?php
require_once 'config.php';

/**
 * Handles the contact form.
 * - fetch() requests (script.js) get a JSON response.
 * - A normal form post (JavaScript off) is redirected back to the page with a status.
 * - Opening contact.php directly just sends the visitor to the contact section.
 */

$isAjax = (($_SERVER['HTTP_X_REQUESTED_WITH'] ?? '') === 'fetch');

function respond(bool $ok, string $message, array $errors, bool $isAjax): void
{
    if ($isAjax) {
        header('Content-Type: application/json; charset=UTF-8');
        http_response_code($ok ? 200 : 422);
        echo json_encode(['ok' => $ok, 'message' => $message, 'errors' => $errors]);
        exit;
    }
    $_SESSION['flash'] = ['ok' => $ok, 'message' => $message, 'errors' => $errors];
    header('Location: index.php#contact');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php#contact');
    exit;
}

// Honeypot: real visitors never see or fill this field.
if (!empty($_POST['website'])) {
    respond(true, 'Message sent.', [], $isAjax);
}

$name    = cleanLine($_POST['name'] ?? '');
$email   = cleanLine($_POST['email'] ?? '');
$subject = cleanLine($_POST['subject'] ?? '');
$message = cleanText($_POST['message'] ?? '');
$errors  = [];

if ($name === '' || mb_strlen($name) > 80)         $errors[] = 'Enter your name (up to 80 characters).';
if (!filter_var($email, FILTER_VALIDATE_EMAIL))    $errors[] = 'Enter a valid email address so I can reply.';
if ($subject === '' || mb_strlen($subject) > 120)  $errors[] = 'Add a subject (up to 120 characters).';
if (mb_strlen($message) < 10)                      $errors[] = 'Write a message of at least 10 characters.';
if (mb_strlen($message) > 4000)                    $errors[] = 'Shorten your message to under 4000 characters.';

if (!$errors && isRateLimited()) {
    $errors[] = 'You just sent a message. Wait 30 seconds before sending another.';
}

if ($errors) {
    respond(false, 'The message was not sent.', $errors, $isAjax);
}

$headers  = 'From: ' . SITE_NAME . ' <no-reply@' . ($_SERVER['SERVER_NAME'] ?? 'localhost') . '>' . "\r\n";
$headers .= 'Reply-To: ' . $email . "\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-Type: text/html; charset=UTF-8' . "\r\n";

$body = '<h2>New portfolio message</h2>'
      . '<p><strong>Name:</strong> ' . e($name) . '</p>'
      . '<p><strong>Email:</strong> ' . e($email) . '</p>'
      . '<p><strong>Subject:</strong> ' . e($subject) . '</p>'
      . '<p><strong>Message:</strong><br>' . nl2br(e($message)) . '</p>';

$mailed = @mail(ADMIN_EMAIL, 'Portfolio: ' . $subject, $body, $headers);
$logged = logMessage("From {$name} <{$email}> | {$subject} | " . str_replace(["\r", "\n"], ' ', $message) . ($mailed ? '' : ' [mail() failed]'));

if (!$mailed && !$logged) {
    respond(false, 'The message could not be delivered.', ['Email me directly at ' . SITE_EMAIL . '.'], $isAjax);
}

$_SESSION['last_contact'] = time();
respond(true, 'Message sent. I usually reply within a day.', [], $isAjax);