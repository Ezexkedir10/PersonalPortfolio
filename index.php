<?php
$projects = [
    [
        'id' => 1,
        'title' => 'E-commerce Platform',
        'description' => 'A full-stack e-commerce solution with payment integration and inventory management.',
        'image' => 'assets/2.jpg',
        'category' => 'web',
        'technologies' => ['HTML', 'CSS', 'JavaScript', 'Node.js'],
        'demo_link' => '#',
        'github_link' => '#'
    ],
    [
        'id' => 2,
        'title' => 'Fitness Tracker App',
        'description' => 'A website for tracking workouts, nutrition, and health metrics.',
        'image' => 'assets/3.jpg',
        'category' => 'mobile',
        'technologies' => ['JavaScript', 'React Native', 'Firebase'],
        'demo_link' => '#',
        'github_link' => '#'
    ],
    [
        'id' => 3,
        'title' => 'Portfolio Website',
        'description' => 'A responsive portfolio website showcasing my skills and projects.',
        'image' => 'assets/5.jpg',
        'category' => 'web',
        'technologies' => ['HTML', 'CSS', 'JavaScript', 'PHP'],
        'demo_link' => '#',
        'github_link' => '#'
    ],
    [
        'id' => 4,
        'title' => 'Data Analysis Tool',
        'description' => 'A tool for analyzing and visualizing large datasets with interactive charts.',
        'image' => 'assets/1.jpg',
        'category' => 'other',
        'technologies' => ['Python', 'Pandas', 'Matplotlib'],
        'demo_link' => '#',
        'github_link' => '#'
    ]
];

$skills = [
    'frontend' => [
        ['name' => 'HTML5', 'percentage' => 95],
        ['name' => 'CSS3', 'percentage' => 90],
        ['name' => 'JavaScript', 'percentage' => 85]
    ],
    'backend' => [
        ['name' => 'Node.js', 'percentage' => 80],
        ['name' => 'Python', 'percentage' => 75],
        ['name' => 'PHP', 'percentage' => 70],
        ['name' => 'Databases', 'percentage' => 85]
    ],
    'other' => [
        ['name' => 'Git & GitHub', 'percentage' => 90],
        ['name' => 'Problem Solving', 'percentage' => 95],
        ['name' => 'Agile Methodology', 'percentage' => 80]
    ]
];

$visitor_file = "visitor_count.txt";
if (file_exists($visitor_file)) {
    $count = (int)file_get_contents($visitor_file);
    $count++;
} else {
    $count = 1;
}
file_put_contents($visitor_file, $count);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ezedin Kedir Portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .success-message, .error-message {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            text-align: center;
        }
        .success-message {
            background-color: rgba(16, 185, 129, 0.2);
            border: 1px solid #10b981;
            color: #10b981;
        }
        .error-message {
            background-color: rgba(239, 68, 68, 0.2);
            border: 1px solid #ef4444;
            color: #ef4444;
        }
        .error-message ul {
            list-style: disc;
            padding-left: 20px;
            text-align: left;
        }
        .visitor-count {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
            color: var(--gray-color);
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <h1>Ezedin Kedir</h1>
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Me</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#projects">Projects</a></li>
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
    
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Hello, My Name is <span class="highlight">Ezedin Kedir</span></h1>
                <h2>Computer Scientist - Web Developer</h3>
                <p>I build exceptional websites with clean code and beautifully.</p>
                <div class="cta-buttons">
                    <a href="#projects" class="btn primary-btn">View My Projects</a>
                    <a href="contact.php" class="btn secondary-btn">Contact Me</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="profile-img-container">
                    <img src="p2.png" alt="Ezedin Kedir" class="profile-img">
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>I am a website developer with expertise in building robust and scalable applications. With a strong foundation in computer science and a keen eye for detail, I strive to create efficient solutions to complex problems.</p>
                    <p>My journey in website development began with a curiosity about how digital systems work, which evolved into a career dedicated to crafting high-quality software that makes a difference.</p>
                    <div class="personal-info">
                        <div class="info-item">
                            <span class="info-title">Name:</span>
                            <span class="info-value">Ezedin Kedir</span>
                        </div>
                        <div class="info-item">
                            <span class="info-title">Email:</span>
                            <span class="info-value">ezexkedir7@gmail.com</span>
                        </div>
                        <div class="info-item">
                            <span class="info-title">Location:</span>
                            <span class="info-value">Addis Ababa, Ethiopia</span>
                        </div>
                        <div class="info-item">
                            <span class="info-title">Availability:</span>
                            <span class="info-value">Open to opportunities</span>
                        </div>
                    </div>
                    <a href="Unnamed1.pdf" class="btn primary-btn download-cv">Download CV</a>
                </div>
                <div class="about-stats">
                    <div class="stat-item">
                        <h3>1</h3>
                        <p>Years of Experience</p>
                    </div>
                    <div class="stat-item">
                        <h3>20+</h3>
                        <p>Projects Completed</p>
                    </div>
                    <div class="stat-item">
                        <h3>2+</h3>
                        <p>Happy Clients</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="skills">
        <div class="container">
            <h2 class="section-title">My Skills</h2>
            <div class="skills-content">
                <?php
                $skill_categories = [
                    'frontend' => 'Frontend Development',
                    'backend' => 'Backend Development',
                    'other' => 'Other Skills'
                ];
                
                foreach ($skill_categories as $category => $title): ?>
                    <div class="skill-category">
                        <h3><?php echo $title; ?></h3>
                        <div class="skills-grid">
                            <?php foreach ($skills[$category] as $skill): ?>
                                <div class="skill-item">
                                    <div class="skill-info">
                                        <h4><?php echo $skill['name']; ?></h4>
                                        <p><?php echo $skill['percentage']; ?>%</p>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" style="width: <?php echo $skill['percentage']; ?>%;"></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="projects" class="projects">
        <div class="container">
            <h2 class="section-title">My Projects</h2>
            <div class="project-filters">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="web">Web</button>
                <button class="filter-btn" data-filter="mobile">Mobile</button>
                <button class="filter-btn" data-filter="other">Other</button>
            </div>
            <div class="projects-grid">
                <?php foreach ($projects as $project): ?>
                    <div class="project-card" data-category="<?php echo $project['category']; ?>">
                        <div class="project-img">
                            <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>">
                        </div>
                        <div class="project-info">
                            <h3><?php echo $project['title']; ?></h3>
                            <p><?php echo $project['description']; ?></p>
                            <div class="project-tech">
                                <?php foreach ($project['technologies'] as $tech): ?>
                                    <span><?php echo $tech; ?></span>
                                <?php endforeach; ?>
                            </div>
                            <div class="project-links">
                                <a href="<?php echo $project['demo_link']; ?>" class="project-link"><i class="fas fa-external-link-alt"></i> Live Demo</a>
                                <a href="<?php echo $project['github_link']; ?>" class="project-link"><i class="fab fa-github"></i> Source Code</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    
    <section id="contact-preview" class="contact">
        <div class="container">
            <h2 class="section-title">Get In Touch</h2>
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
                    <a href="contact.php" class="btn primary-btn" style="width: 100%; text-align: center;">Go to Contact Form</a>
                </div>
            </div>
            <div class="visitor-count">
                <p>You are visitor #<?php echo $count; ?> to this site</p>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-content">
                <p>&copy; <?php echo date("Y"); ?> Ezedin Kedir. All Rights Reserved.</p>
                <div class="footer-links">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#skills">Skills</a>
                    <a href="#projects">Projects</a>
                    <a href="contact.php">Contact</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
