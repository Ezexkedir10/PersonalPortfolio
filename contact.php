<?php
$name = $email = $subject = $message = "";
$errors = [];
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $errors[] = "Name is required";
    } else {
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
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
        $subject = filter_input(INPUT_POST, "subject", FILTER_SANITIZE_SPECIAL_CHARS);
    }

    if (empty($_POST["message"])) {
        $errors[] = "Message is required";
    } else {
        $message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    if (empty($errors)) {

        $to = "ezexkedir7@gmail.com";
        

        $headers = "From: $name <$email>" . "\r\n";
        $headers .= "Reply-To: $email" . "\r\n";
        $headers .= "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

        $email_content = "<h2>Contact Form Submission</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Subject:</strong> $subject</p>
            <p><strong>Message:</strong><br>$message</p>";
        

        if (mail($to, "Portfolio Contact: $subject", $email_content, $headers)) {
            $success = true;
            $name = $email = $subject = $message = "";
            $log_file = "contact_submissions.log";
            $log_message = date("Y-m-d H:i:s") . " - New message from: $name ($email)\n";
            file_put_contents($log_file, $log_message, FILE_APPEND);
        } else {
            $errors[] = "Failed to send email. Please try again later.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Ezedin Kedir Portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <h1>Ezedin Kedir</h1>
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php#about">About Me</a></li>
                    <li><a href="index.php#skills">Skills</a></li>
                    <li><a href="index.php#projects">Projects</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
        </div>
    </header>
    
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
            
            <?php if ($success): ?>
                <div class="success-message">
                    <p>Thank you for your message! I will get back to you soon.</p>
                </div>
            <?php endif; ?>
            
            <?php if (!empty($errors)): ?>
                <div class="error-message">
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
            
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Location</h3>
                            <p>Addis Ababa, Ethiopia</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Email</h3>
                            <p>ezexkedir7@gmail.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Phone</h3>
                            <p>+251979906161</p>
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-github"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="contact-form">
                    <form id="contactForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="form-group">
                            <input type="text" id="name" name="name" placeholder="Your Name" value="<?php echo $name; ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" placeholder="Your Email" value="<?php echo $email; ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" id="subject" name="subject" placeholder="Subject" value="<?php echo $subject; ?>" required>
                        </div>
                        <div class="form-group">
                            <textarea id="message" name="message" placeholder="Your Message" required><?php echo $message; ?></textarea>
                        </div>
                        <button type="submit" class="btn primary-btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-content">
                <p>&copy; <?php echo date("Y"); ?> Ezedin Kedir. All Rights Reserved.</p>
                <div class="footer-links">
                    <a href="index.php">Home</a>
                    <a href="index.php#about">About</a>
                    <a href="index.php#skills">Skills</a>
                    <a href="index.php#projects">Projects</a>
                    <a href="contact.php">Contact</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
