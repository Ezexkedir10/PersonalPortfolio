<?php
require_once 'config.php';

$projects = [
    [
        'id' => 1,
        'title' => 'Appointment Booking System',
        'description' => 'A full-stack booking platform enabling users to schedule and manage appointments through a responsive web interface integrated with RESTful APIs.',
        'image' => 'assets/1.jpg',
        'category' => 'fullstack',
        'technologies' => ['Next.js', 'React', 'Tailwind CSS', 'RESTful API'],
        'demo_link' => '#',
        'github_link' => 'https://github.com/Ezexkedir10'
    ],
    [
        'id' => 2,
        'title' => 'Football Quiz Website',
        'description' => 'An interactive football quiz website featuring dynamic quiz logic, score tracking, real-time feedback, and a responsive user interface designed for high engagement.',
        'image' => 'assets/2.jpg',
        'category' => 'web',
        'technologies' => ['HTML5', 'CSS3', 'JavaScript', 'Tailwind CSS'],
        'demo_link' => '#',
        'github_link' => 'https://github.com/Ezexkedir10'
    ],
    [
        'id' => 3,
        'title' => 'InkLink - Creative Platform',
        'description' => 'A digital publishing platform enabling Ethiopian readers and writers to discover, manage, and publish written content through a modern interface.',
        'image' => 'assets/3.jpg',
        'category' => 'fullstack',
        'technologies' => ['Next.js', 'React', 'Tailwind CSS', 'PostgreSQL'],
        'demo_link' => '#',
        'github_link' => 'https://github.com/Ezexkedir10'
    ],
    [
        'id' => 4,
        'title' => 'Ethiopian Football Industry',
        'description' => 'Currently designing a modern platform for the Ethiopian football ecosystem using Next.js, with planned features including league, club, player, and match info supported by a scalable API.',
        'image' => 'assets/4.jpg',
        'category' => 'web',
        'technologies' => ['Next.js', 'React', 'FastAPI', 'System Design'],
        'demo_link' => '#',
        'github_link' => 'https://github.com/Ezexkedir10'
    ]
];

$skills = [
    'frontend' => [
        ['name' => 'Next.js', 'icon' => 'fa-brands fa-react'],
        ['name' => 'React.js', 'icon' => 'fa-brands fa-react'],
        ['name' => 'JavaScript', 'icon' => 'fa-brands fa-js'],
        ['name' => 'TypeScript', 'icon' => 'fa-solid fa-code-branch'],
        ['name' => 'Tailwind CSS', 'icon' => 'fa-brands fa-css3-alt'],
        ['name' => 'Flutter', 'icon' => 'fa-solid fa-mobile-screen-button']
    ],
    'backend' => [
        ['name' => 'Django', 'icon' => 'fa-brands fa-python'],
        ['name' => 'Django REST Framework', 'icon' => 'fa-solid fa-gears'],
        ['name' => 'FastAPI', 'icon' => 'fa-solid fa-bolt'],
        ['name' => 'PostgreSQL', 'icon' => 'fa-solid fa-database'],
        ['name' => 'MySQL / SQLite', 'icon' => 'fa-solid fa-database'],
        ['name' => 'MongoDB', 'icon' => 'fa-solid fa-database']
    ],
    'tools' => [
        ['name' => 'Python', 'icon' => 'fa-brands fa-python'],
        ['name' => 'Dart', 'icon' => 'fa-solid fa-code'],
        ['name' => 'C++ / C', 'icon' => 'fa-solid fa-code'],
        ['name' => 'Git & GitHub', 'icon' => 'fa-brands fa-github'],
        ['name' => 'Docker', 'icon' => 'fa-brands fa-docker'],
        ['name' => 'Linux OS', 'icon' => 'fa-solid fa-terminal'],
        ['name' => 'Figma', 'icon' => 'fa-brands fa-figma'],
        ['name' => 'System Design', 'icon' => 'fa-solid fa-circle-nodes']
    ]
];

$visitor_count = updateVisitorCount();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ezedin Kedir | Full Stack Developer Portfolio</title>
    <meta name="description" content="Ezedin Kedir is a Computer Science and Engineering graduate specializing in full-stack web and mobile application development with React, Next.js, Django, and Flutter.">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Sticky Navigation -->
    <header>
        <div class="container">
            <div class="logo">
                <a href="#home">Ezedin<span>.dev</span></a>
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="#home" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#experience">Journey</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="contact.php" class="secondary-btn" style="padding: 6px 16px; border-radius: 20px;">Contact</a></li>
                </ul>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
        </div>
    </header>
    
    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <span class="hero-subtitle">Available for opportunities</span>
                <h1>Hi, My Name is <br><span class="gradient-text">Ezedin Kedir</span></h1>
                <h2>I'm a <span class="typed-text" data-words='["Full Stack Developer", "Software Engineer", "UI/UX Designer"]'></span></h2>
                <p>Computer Science and Engineering graduate specializing in building responsive web applications, developing RESTful APIs, and implementing scalable database solutions using modern web architectures.</p>
                <div class="cta-buttons">
                    <a href="#projects" class="btn primary-btn">View My Work <i class="fas fa-arrow-right"></i></a>
                    <a href="contact.php" class="btn secondary-btn">Get In Touch</a>
                </div>
            </div>
            <div class="hero-image">
                <div class="image-glow-wrapper">
                    <div class="profile-img-container">
                        <img src="p2.png" alt="Ezedin Kedir" class="profile-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about scroll-animate">
        <div class="container">
            <h2 class="section-title">About <span>Me</span></h2>
            <div class="about-grid">
                <div class="about-card">
                    <p>I am a Computer Science & Engineering graduate from Adama Science and Technology University with a strong foundation in full-stack development, algorithms, and UI/UX design. I bridge the gap between backend scalability and beautiful frontend visuals, translating business requirements into intuitive interfaces.</p>
                    <p>A collaborative problem solver, I focus on clean architecture, performance optimization, and writing maintainable code. My experience includes training in competitive programming (ICPC) and building diverse digital products from interactive apps to digital publication platforms.</p>
                    
                    <div class="personal-details-grid">
                        <div class="detail-item">
                            <div class="detail-icon"><i class="fas fa-graduation-cap"></i></div>
                            <div class="detail-info">
                                <h4>Education</h4>
                                <p>B.Sc. CSE, ASTU</p>
                            </div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="detail-info">
                                <h4>Location</h4>
                                <p>Addis Ababa, Ethiopia</p>
                            </div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-icon"><i class="fas fa-envelope"></i></div>
                            <div class="detail-info">
                                <h4>Email</h4>
                                <p>ezexkedir19@gmail.com</p>
                            </div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-icon"><i class="fas fa-phone-alt"></i></div>
                            <div class="detail-info">
                                <h4>Phone</h4>
                                <p>+251 979 906161</p>
                            </div>
                        </div>
                    </div>
                    
                    <a href="resume.php" class="btn primary-btn download-cv" style="margin-top: 30px;">
                        <i class="fas fa-download"></i> Download CV
                    </a>
                </div>
                
                <div class="stats-sidebar">
                    <div class="stat-box">
                        <div class="stat-number">1+</div>
                        <div class="stat-label">Years Experience</div>
                        <div class="stat-desc">Through Professional Internships & Projects</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-number">4+</div>
                        <div class="stat-label">Core Projects</div>
                        <div class="stat-desc">From Appointment Schedulers to Content Hubs</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-number">100+</div>
                        <div class="stat-label">ICPC Problems</div>
                        <div class="stat-desc">Algorithmic solutions on LeetCode & Codeforces</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills scroll-animate">
        <div class="container">
            <h2 class="section-title">My <span>Skills</span></h2>
            <div class="skills-layout">
                <div class="skills-category-card">
                    <h3><i class="fas fa-code"></i> Frontend Frameworks & Languages</h3>
                    <div class="skills-badge-grid">
                        <?php foreach ($skills['frontend'] as $skill): ?>
                            <div class="skill-chip">
                                <i class="<?php echo $skill['icon']; ?>"></i>
                                <span><?php echo $skill['name']; ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="skills-category-card">
                    <h3><i class="fas fa-server"></i> Backend, APIs & Databases</h3>
                    <div class="skills-badge-grid">
                        <?php foreach ($skills['backend'] as $skill): ?>
                            <div class="skill-chip">
                                <i class="<?php echo $skill['icon']; ?>"></i>
                                <span><?php echo $skill['name']; ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="skills-category-card">
                    <h3><i class="fas fa-toolbox"></i> Tools, Languages & Fundamentals</h3>
                    <div class="skills-badge-grid">
                        <?php foreach ($skills['tools'] as $skill): ?>
                            <div class="skill-chip">
                                <i class="<?php echo $skill['icon']; ?>"></i>
                                <span><?php echo $skill['name']; ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <!-- Core Competencies Progress -->
                <div class="skills-category-card">
                    <h3><i class="fas fa-brain"></i> Core Focus Areas</h3>
                    <div class="core-skills-wrapper">
                        <div class="core-skill-item">
                            <div class="core-skill-header">
                                <h4>Full-Stack Development</h4>
                                <span>92%</span>
                            </div>
                            <div class="core-progress-bar">
                                <div class="core-progress-fill" style="width: 92%;"></div>
                            </div>
                        </div>
                        <div class="core-skill-item">
                            <div class="core-skill-header">
                                <h4>RESTful API Design</h4>
                                <span>90%</span>
                            </div>
                            <div class="core-progress-bar">
                                <div class="core-progress-fill" style="width: 90%;"></div>
                            </div>
                        </div>
                        <div class="core-skill-item">
                            <div class="core-skill-header">
                                <h4>UI/UX & Responsive Web Design</h4>
                                <span>85%</span>
                            </div>
                            <div class="core-progress-bar">
                                <div class="core-progress-fill" style="width: 85%;"></div>
                            </div>
                        </div>
                        <div class="core-skill-item">
                            <div class="core-skill-header">
                                <h4>Data Structures & Algorithms</h4>
                                <span>88%</span>
                            </div>
                            <div class="core-progress-bar">
                                <div class="core-progress-fill" style="width: 88%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Journey / Timeline Section -->
    <section id="experience" class="timeline-section scroll-animate">
        <div class="container">
            <h2 class="section-title">My <span>Journey</span></h2>
            <div class="timeline-container">
                <!-- Buna Labs Intern -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-header">
                            <div class="timeline-title">
                                <h3>Front-End Development Intern</h3>
                                <span class="timeline-subtitle">Buna Labs Company</span>
                            </div>
                            <div class="timeline-meta">
                                <span class="timeline-date">06/2025 – 08/2025</span>
                                <div class="timeline-location"><i class="fas fa-map-marker-alt"></i> Addis Ababa, Ethiopia</div>
                            </div>
                        </div>
                        <div class="timeline-body">
                            <ul class="timeline-bullets">
                                <li>Developed responsive, interactive user interfaces utilizing Next.js, React, and Tailwind CSS.</li>
                                <li>Collaborated closely with designers and project stakeholders to construct polished frontend components and boost usability.</li>
                                <li>Transformed complex wireframes into modular, high-performing frontend systems, ensuring cross-browser consistency.</li>
                            </ul>
                            <div class="timeline-tech-tags">
                                <span class="tech-tag">Next.js</span>
                                <span class="tech-tag">React</span>
                                <span class="tech-tag">Tailwind CSS</span>
                                <span class="tech-tag">JavaScript</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Omricom Intern -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-header">
                            <div class="timeline-title">
                                <h3>Front-End Development Intern</h3>
                                <span class="timeline-subtitle">Omricom Software Technologies</span>
                            </div>
                            <div class="timeline-meta">
                                <span class="timeline-date">06/2024 – 08/2024</span>
                                <div class="timeline-location"><i class="fas fa-map-marker-alt"></i> Addis Ababa, Ethiopia</div>
                            </div>
                        </div>
                        <div class="timeline-body">
                            <ul class="timeline-bullets">
                                <li>Built responsive web pages ensuring pixel-perfect layout renderings across varying viewports.</li>
                                <li>Assisted in building custom component configurations, improving search engine visibility and accessibility.</li>
                                <li>Worked on design integrations, syncing static content patterns into fluid layout schemes.</li>
                            </ul>
                            <div class="timeline-tech-tags">
                                <span class="tech-tag">HTML5</span>
                                <span class="tech-tag">CSS3</span>
                                <span class="tech-tag">JavaScript</span>
                                <span class="tech-tag">Tailwind CSS</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Education -->
                <div class="timeline-item">
                    <div class="timeline-dot"></div>
                    <div class="timeline-content">
                        <div class="timeline-header">
                            <div class="timeline-title">
                                <h3>B.Sc. Computer Science and Engineering</h3>
                                <span class="timeline-subtitle">Adama Science and Technology University</span>
                            </div>
                            <div class="timeline-meta">
                                <span class="timeline-date">09/2021 – 06/2026</span>
                                <div class="timeline-location"><i class="fas fa-graduation-cap"></i> Adama, Ethiopia</div>
                            </div>
                        </div>
                        <div class="timeline-body">
                            <p><strong>CGPA: 3.59/4.00 | Exit Examination Score: 79/100</strong></p>
                            <p>Completed intensive engineering coursework including Data Structures & Algorithms, Object-Oriented Programming, Database Systems, Web Development, Software Engineering, Networks, and Operating Systems.</p>
                            <p><strong>Competitive Programming training:</strong> Completed training through the International Collegiate Programming Contest (ICPC) Training Program, solving 100+ algorithmic problems across LeetCode and Codeforces.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects scroll-animate">
        <div class="container">
            <h2 class="section-title">Featured <span>Projects</span></h2>
            
            <div class="project-filters">
                <button class="filter-btn active" data-filter="all">All Projects</button>
                <button class="filter-btn" data-filter="fullstack">Full-Stack</button>
                <button class="filter-btn" data-filter="web">Web Front-End</button>
            </div>
            
            <div class="projects-grid">
                <?php foreach ($projects as $project): ?>
                    <div class="project-card" data-category="<?php echo $project['category']; ?>">
                        <div class="project-img">
                            <img src="<?php echo $project['image']; ?>" alt="<?php echo htmlspecialchars($project['title']); ?>">
                            <div class="project-overlay"></div>
                        </div>
                        <div class="project-content">
                            <h3><?php echo htmlspecialchars($project['title']); ?></h3>
                            <p><?php echo htmlspecialchars($project['description']); ?></p>
                            <div class="project-tech-tags">
                                <?php foreach ($project['technologies'] as $tech): ?>
                                    <span><?php echo htmlspecialchars($tech); ?></span>
                                <?php endforeach; ?>
                            </div>
                            <div class="project-links">
                                <a href="<?php echo $project['github_link']; ?>" target="_blank" class="btn secondary-btn"><i class="fab fa-github"></i> Code</a>
                                <a href="<?php echo $project['demo_link']; ?>" class="btn primary-btn"><i class="fas fa-external-link-alt"></i> Demo</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section -->
    <section id="contact-cta" class="contact scroll-animate">
        <div class="container">
            <h2 class="section-title">Get In <span>Touch</span></h2>
            
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
                            <a href="https://www.linkedin.com/in/ezedinkedir-910464398" target="_blank" class="social-btn"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="social-btn"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="contact-form-wrapper">
                    <form action="contact.php" method="POST">
                        <div class="form-group-row">
                            <div class="form-group">
                                <input type="text" id="name" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" id="email" name="email" placeholder="Your Email Address" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" id="subject" name="subject" placeholder="Subject Topic" required>
                        </div>
                        <div class="form-group">
                            <textarea id="message" name="message" placeholder="Type your message here..." required></textarea>
                        </div>
                        <button type="submit" class="btn primary-btn" style="width: 100%; border-radius: 12px; padding: 14px 20px;">Send Secure Message <i class="fas fa-paper-plane"></i></button>
                    </form>
                    
                    <div class="visitor-stat-card">
                        <i class="fas fa-eye"></i>
                        <span>Thank you for stopping by! You are visitor number </span>
                        <span class="visitor-badge">#<?php echo $visitor_count; ?></span>
                    </div>
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
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#skills">Skills</a>
                    <a href="#experience">Journey</a>
                    <a href="#projects">Projects</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
