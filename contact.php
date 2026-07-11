<?php
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
        
        // Use PHP's mail function, and write to log file
        $mail_sent = @mail($to, "Portfolio Contact: $subject", $email_content, $headers);
        
        // Write to log file regardless of mail sending status for dashboard display
        $log_entry = "New message from: $name ($email)";
        logMessage($log_entry);
        
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
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Sticky Navigation -->
    <header>
        <div class="container">
            <div class="logo">
                <a href="index.php#home">Ezedin<span>.dev</span></a>
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="index.php#home">Home</a></li>
                    <li><a href="index.php#about">About</a></li>
                    <li><a href="index.php#skills">Skills</a></li>
                    <li><a href="index.php#experience">Journey</a></li>
                    <li><a href="index.php#projects">Projects</a></li>
                    <li><a href="contact.php" class="active">Contact</a></li>
                </ul>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </div>
    </header>
    
    <!-- Contact Page Container -->
    <section id="contact" class="contact" style="padding-top: 160px; min-height: calc(100vh - 120px);">
        <div class="container">
            <h2 class="section-title">Get In <span>Touch</span></h2>
            
            <div style="max-width: 800px; margin: 0 auto 40px;">
                <?php if ($success): ?>
                    <div class="success-message">
                        <i class="fas fa-check-circle" style="margin-right: 8px;"></i>
                        Thank you for your message! Ezedin will get back to you shortly.
                    </div>
                <?php endif; ?>
                
                <?php if (!empty($errors)): ?>
                    <div class="error-message">
                        <i class="fas fa-exclamation-triangle" style="margin-right: 8px;"></i>
                        <strong>Please correct the following errors:</strong>
                        <ul style="margin-top: 8px;">
                            <?php foreach ($errors as $error): ?>
                                <li><?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
            
            <div class="contact-layout">
                <div class="contact-sidebar">
                    <div class="contact-card">
                        <div class="contact-icon-wrapper"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <h4>Location</h4>
                            <p>Addis Ababa, Ethiopia</p>
                        </div>
                    </div>
                    
                    <div class="contact-card">
                        <div class="contact-icon-wrapper"><i class="fas fa-envelope"></i></div>
                        <div>
                            <h4>Email</h4>
                            <p><a href="mailto:ezexkedir19@gmail.com">ezexkedir19@gmail.com</a></p>
                        </div>
                    </div>
                    
                    <div class="contact-card">
                        <div class="contact-icon-wrapper"><i class="fas fa-phone-alt"></i></div>
                        <div>
                            <h4>Phone</h4>
                            <p><a href="tel:0979906161">0979906161</a></p>
                        </div>
                    </div>
                    
                    <div class="contact-card" style="flex-direction: column; align-items: flex-start; gap: 15px;">
                        <h4>Connect & Follow</h4>
                        <div class="social-platforms">
                            <a href="https://github.com/Ezexkedir10" target="_blank" class="social-btn"><i class="fab fa-github"></i></a>
                            <a href="https://www.linkedin.com/in/ezedin-kedir-910464398" target="_blank" class="social-btn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://x.com/Ezexkedir10" target="_blank" class="social-btn"><i class="fab fa-twitter"></i></a>
                            <a href="https://instagram.com/Ezexkedir10" target="_blank" class="social-btn"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form-wrapper">
                    <form id="contactForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="form-group-row">
                            <div class="form-group">
                                <input type="text" id="name" name="name" placeholder="Your Name" value="<?php echo htmlspecialchars($name); ?>" required>
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" name="email" placeholder="Your Email" value="<?php echo htmlspecialchars($email); ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" id="subject" name="subject" placeholder="Subject" value="<?php echo htmlspecialchars($subject); ?>" required>
                        </div>
                        <div class="form-group">
                            <textarea id="message" name="message" placeholder="Your Message" required><?php echo htmlspecialchars($message); ?></textarea>
                        </div>
                        <button type="submit" class="btn primary-btn" style="width: 100%; border-radius: 12px; padding: 14px 20px;">Send Message <i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <p>&copy; <?php echo date("Y"); ?> Ezedin Kedir. All Rights Reserved. Crafted with passion.</p>
                <div class="footer-nav">
                    <a href="index.php#home">Home</a>
                    <a href="index.php#about">About</a>
                    <a href="index.php#skills">Skills</a>
                    <a href="index.php#experience">Journey</a>
                    <a href="index.php#projects">Projects</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
