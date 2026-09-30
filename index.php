<!-- <?php
require_once 'config.php';

$projects = [
    [
        'id' => 1,
        'title' => 'Pharmacy Clinic Management System',
        'description' => 'A healthcare operations platform for managing patient registration, doctor flow, prescriptions, medicine inventory, and billing in one reliable experience for clinics and pharmacies.',
        'image' => 'assets/5.jpg',
        'category' => 'fullstack',
        'status' => 'Featured Case Study',
        'technologies' => ['Next.js', 'React', 'Django REST', 'PostgreSQL', 'Role-Based Access'],
        'demo_link' => '#',
        'github_link' => 'https://github.com/Ezexkedir10'
    ],
    [
        'id' => 2,
        'title' => 'Appointment Booking System',
        'description' => 'A full-stack booking platform that helps users schedule, reschedule, and track appointments through a responsive interface connected to dependable REST APIs.',
        'image' => 'assets/1.jpg',
        'category' => 'fullstack',
        'status' => 'Production Style UI',
        'technologies' => ['Next.js', 'React', 'Tailwind CSS', 'RESTful API'],
        'demo_link' => '#',
        'github_link' => 'https://github.com/Ezexkedir10'
    ],
    [
        'id' => 3,
        'title' => 'InkLink Creative Platform',
        'description' => 'A digital publishing platform that enables Ethiopian readers and writers to discover, organize, and publish content through a modern editorial experience.',
        'image' => 'assets/3.jpg',
        'category' => 'fullstack',
        'status' => 'Platform Design',
        'technologies' => ['Next.js', 'React', 'Tailwind CSS', 'PostgreSQL'],
        'demo_link' => '#',
        'github_link' => 'https://github.com/Ezexkedir10'
    ],
    [
        'id' => 4,
        'title' => 'Football Quiz Website',
        'description' => 'An interactive football quiz product with dynamic scoring, real-time feedback, and a responsive interface designed to keep users engaged round after round.',
        'image' => 'assets/2.jpg',
        'category' => 'web',
        'status' => 'Interactive Frontend',
        'technologies' => ['HTML5', 'CSS3', 'JavaScript', 'Tailwind CSS'],
        'demo_link' => '#',
        'github_link' => 'https://github.com/Ezexkedir10'
    ],
    [
        'id' => 5,
        'title' => 'Ethiopian Football Industry Platform',
        'description' => 'A modern product direction for the Ethiopian football ecosystem with planned league, club, player, and match intelligence powered by a scalable API-first architecture.',
        'image' => 'assets/4.jpg',
        'category' => 'web',
        'status' => 'In Progress',
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
    <meta name="description" content="Ezedin Kedir is a Computer Science and Engineering graduate building stylish full-stack web experiences with strong frontend craft, API design, and scalable backend systems.">
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

        <header id="site-header">
            <div class="container nav-shell">
                <a href="#home" class="brand-mark">Ezedin<span>Kedir</span></a>

                <nav>
                    <ul class="nav-links">
                        <li><a href="#home" class="active">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#skills">Skills</a></li>
                        <li><a href="#experience">Journey</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#contact-cta">Contact</a></li>
                    </ul>
                    <a href="contact.php" class="nav-contact">Let&apos;s Talk</a>
                    <button class="hamburger" type="button" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </nav>
            </div>
        </header>

        <main>
            <section id="home" class="hero">
                <div class="container hero-grid">
                    <div class="hero-copy">
                        <div class="eyebrow">
                            <span class="eyebrow-dot"></span>
                            Available for internships and developer opportunities
                        </div>
                        <h1>Building polished digital products with strong code, clear systems, and bold visual taste.</h1>
                        <h2>I&apos;m <span class="gradient-text">Ezedin Kedir</span>, a <span class="typed-text" data-words='["Full Stack Developer","Software Engineer","Frontend-Focused Builder"]'></span></h2>
                        <p>I design and build portfolio-worthy experiences across frontend, backend, and product thinking. My work blends clean architecture, responsive interfaces, and the kind of visual consistency that makes software feel premium.</p>

                        <div class="hero-actions">
                            <a href="#projects" class="btn primary-btn">Explore Projects <i class="fas fa-arrow-right"></i></a>
                            <a href="resume.php" class="btn ghost-btn"><i class="fas fa-download"></i> Download CV</a>
                        </div>

                        <div class="hero-metrics">
                            <div class="metric-card">
                                <strong>5+</strong>
                                <span>Featured builds</span>
                            </div>
                            <div class="metric-card">
                                <strong>3+</strong>
                                <span>Years learning & shipping</span>
                            </div>
                            <div class="metric-card">
                                <strong>100+</strong>
                                <span>Algorithm problems solved</span>
                            </div>
                        </div>
                    </div>

                    <div class="hero-visual">
                        <div class="portrait-frame">
                            <div class="portrait-ring"></div>
                            <img src="p2.png" alt="Ezedin Kedir portrait" class="profile-img">
                        </div>

                        <div class="floating-panel panel-top">
                            <span class="panel-label">Current Focus</span>
                            <strong>Advanced full-stack products</strong>
                            <p>React, APIs, databases, and premium UI direction.</p>
                        </div>

                        <div class="floating-panel panel-bottom">
                            <span class="panel-label">Signature Project</span>
                            <strong>Pharmacy Clinic System</strong>
                            <p>Patient flow, prescriptions, stock, and billing in one system.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="about" class="about scroll-animate">
                <div class="container">
                    <div class="section-heading split-heading">
                        <div>
                            <span class="section-kicker">About Me</span>
                            <h2>Designer-minded engineering with a builder&apos;s mindset.</h2>
                        </div>
                        <p>I care about how a product feels as much as how it functions. That balance helps me create systems that are not only reliable under the hood, but also memorable on the screen.</p>
                    </div>

                    <div class="about-layout">
                        <article class="glass-card story-card">
                            <p>I am a Computer Science and Engineering graduate from Adama Science and Technology University with a strong foundation in full-stack development, algorithms, and interface design. I enjoy taking ideas from rough concept to polished experience.</p>
                            <p>My work style is practical and detail-focused: plan the system clearly, build responsive and maintainable components, and refine the visuals until everything feels intentional. I am especially excited by products in healthcare, education, and digital platforms that solve real problems.</p>

                            <div class="identity-grid">
                                <div class="identity-item">
                                    <i class="fas fa-graduation-cap"></i>
                                    <div>
                                        <h4>Education</h4>
                                        <p>B.Sc. CSE, ASTU</p>
                                    </div>
                                </div>
                                <div class="identity-item">
                                    <i class="fas fa-location-dot"></i>
                                    <div>
                                        <h4>Location</h4>
                                        <p>Addis Ababa, Ethiopia</p>
                                    </div>
                                </div>
                                <div class="identity-item">
                                    <i class="fas fa-envelope"></i>
                                    <div>
                                        <h4>Email</h4>
                                        <p>ezexkedir19@gmail.com</p>
                                    </div>
                                </div>
                                <div class="identity-item">
                                    <i class="fas fa-language"></i>
                                    <div>
                                        <h4>Languages</h4>
                                        <p>English, Amharic</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <aside class="highlights-stack">
                            <div class="glass-card spotlight-card">
                                <span class="spotlight-tag">Strength</span>
                                <h3>Full-stack execution with frontend taste</h3>
                                <p>I build products that connect modern UI, scalable APIs, and structured database design into one coherent experience.</p>
                            </div>
                            <div class="glass-card mini-stats">
                                <div>
                                    <strong>Frontends</strong>
                                    <span>Responsive, accessible, modern</span>
                                </div>
                                <div>
                                    <strong>Backends</strong>
                                    <span>REST APIs, auth, data flow</span>
                                </div>
                                <div>
                                    <strong>Mindset</strong>
                                    <span>Problem solving with visual discipline</span>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </section>

            <section id="skills" class="skills scroll-animate">
                <div class="container">
                    <div class="section-heading">
                        <span class="section-kicker">Capabilities</span>
                        <h2>Tools and technologies I use to turn ideas into polished products.</h2>
                    </div>

                    <div class="skills-showcase">
                        <div class="glass-card skills-card">
                            <h3><i class="fas fa-code"></i> Frontend</h3>
                            <div class="chip-grid">
                                <?php foreach ($skills['frontend'] as $skill): ?>
                                    <div class="skill-chip">
                                        <i class="<?php echo $skill['icon']; ?>"></i>
                                        <span><?php echo $skill['name']; ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="glass-card skills-card">
                            <h3><i class="fas fa-server"></i> Backend & Data</h3>
                            <div class="chip-grid">
                                <?php foreach ($skills['backend'] as $skill): ?>
                                    <div class="skill-chip">
                                        <i class="<?php echo $skill['icon']; ?>"></i>
                                        <span><?php echo $skill['name']; ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="glass-card skills-card">
                            <h3><i class="fas fa-toolbox"></i> Tools & Foundations</h3>
                            <div class="chip-grid">
                                <?php foreach ($skills['tools'] as $skill): ?>
                                    <div class="skill-chip">
                                        <i class="<?php echo $skill['icon']; ?>"></i>
                                        <span><?php echo $skill['name']; ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="glass-card focus-card">
                            <div class="focus-copy">
                                <span class="section-kicker">Core Focus</span>
                                <h3>From user experience to system flow, I like products that feel complete.</h3>
                            </div>

                            <div class="progress-list">
                                <div class="progress-item">
                                    <div class="progress-meta"><span>Full-Stack Development</span><strong>92%</strong></div>
                                    <div class="progress-track"><span style="width: 92%"></span></div>
                                </div>
                                <div class="progress-item">
                                    <div class="progress-meta"><span>RESTful API Design</span><strong>90%</strong></div>
                                    <div class="progress-track"><span style="width: 90%"></span></div>
                                </div>
                                <div class="progress-item">
                                    <div class="progress-meta"><span>UI / UX Direction</span><strong>88%</strong></div>
                                    <div class="progress-track"><span style="width: 88%"></span></div>
                                </div>
                                <div class="progress-item">
                                    <div class="progress-meta"><span>Algorithms & Problem Solving</span><strong>86%</strong></div>
                                    <div class="progress-track"><span style="width: 86%"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="experience" class="journey scroll-animate">
                <div class="container">
                    <div class="section-heading split-heading">
                        <div>
                            <span class="section-kicker">Journey</span>
                            <h2>Experience, education, and the path that shaped my engineering style.</h2>
                        </div>
                        <p>Each step strengthened a different part of my process: interface precision, collaboration, structured thinking, and shipping work that feels solid from both technical and visual angles.</p>
                    </div>

                    <div class="timeline">
                        <article class="timeline-entry">
                            <div class="timeline-marker"></div>
                            <div class="glass-card timeline-card">
                                <div class="timeline-head">
                                    <div>
                                        <h3>Front-End Development Intern</h3>
                                        <span>Buna Labs Company</span>
                                    </div>
                                    <div class="timeline-date">June 2025 - August 2025</div>
                                </div>
                                <p>Built interactive interfaces with Next.js, React, and Tailwind CSS while collaborating with designers and stakeholders to transform ideas into modular, polished frontend systems.</p>
                            </div>
                        </article>

                        <article class="timeline-entry">
                            <div class="timeline-marker"></div>
                            <div class="glass-card timeline-card">
                                <div class="timeline-head">
                                    <div>
                                        <h3>Front-End Development Intern</h3>
                                        <span>Omricom Software Technologies</span>
                                    </div>
                                    <div class="timeline-date">June 2024 - August 2024</div>
                                </div>
                                <p>Worked on responsive web pages, refined layout behavior across devices, and helped shape visual consistency and usability through careful implementation.</p>
                            </div>
                        </article>

                        <article class="timeline-entry">
                            <div class="timeline-marker"></div>
                            <div class="glass-card timeline-card">
                                <div class="timeline-head">
                                    <div>
                                        <h3>B.Sc. Computer Science and Engineering</h3>
                                        <span>Adama Science and Technology University</span>
                                    </div>
                                    <div class="timeline-date">September 2021 - June 2026</div>
                                </div>
                                <p>Completed core engineering coursework in data structures, algorithms, databases, software engineering, networking, and web systems. CGPA: 3.59/4.00.</p>
                            </div>
                        </article>

                        <article class="timeline-entry">
                            <div class="timeline-marker"></div>
                            <div class="glass-card timeline-card">
                                <div class="timeline-head">
                                    <div>
                                        <h3>STEM e-Learning Certificate</h3>
                                        <span>University of Padua</span>
                                    </div>
                                    <div class="timeline-date">Certificate Earned</div>
                                </div>
                                <p>Completed professional learning modules under the STEM e-Learning Program.</p>
                                <a href="https://stem.elearning.unipd.it/course/view.php?id=14875" target="_blank" class="inline-link">Verify Credential <i class="fas fa-arrow-up-right-from-square"></i></a>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section id="projects" class="projects scroll-animate">
                <div class="container">
                    <div class="section-heading split-heading">
                        <div>
                            <span class="section-kicker">Projects</span>
                            <h2>Selected work that shows product thinking, engineering depth, and visual ambition.</h2>
                        </div>
                        <p>The collection below highlights real product direction, user-focused interfaces, API-backed workflows, and one of the strongest additions: your pharmacy clinic management system.</p>
                    </div>

                    <div class="project-filters">
                        <button class="filter-btn active" data-filter="all" type="button">All</button>
                        <button class="filter-btn" data-filter="fullstack" type="button">Full-Stack</button>
                        <button class="filter-btn" data-filter="web" type="button">Frontend</button>
                    </div>

                    <div class="featured-project-banner glass-card">
                        <div>
                            <span class="section-kicker">Spotlight Build</span>
                            <h3>Pharmacy Clinic Management System</h3>
                            <p>A complete healthcare workflow concept covering registration, consultations, prescriptions, medicine inventory, reporting, and billing with a clean modern interface.</p>
                        </div>
                        <a href="#projects-grid" class="btn primary-btn">See Project Cards</a>
                    </div>

                    <div class="projects-grid" id="projects-grid">
                        <?php foreach ($projects as $project): ?>
                            <article class="project-card" data-category="<?php echo $project['category']; ?>">
                                <div class="project-image-wrap">
                                    <img src="<?php echo $project['image']; ?>" alt="<?php echo htmlspecialchars($project['title']); ?>">
                                    <span class="project-status"><?php echo htmlspecialchars($project['status']); ?></span>
                                </div>
                                <div class="project-body">
                                    <div class="project-copy">
                                        <h3><?php echo htmlspecialchars($project['title']); ?></h3>
                                        <p><?php echo htmlspecialchars($project['description']); ?></p>
                                    </div>
                                    <div class="project-tech-tags">
                                        <?php foreach ($project['technologies'] as $tech): ?>
                                            <span><?php echo htmlspecialchars($tech); ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="project-links">
                                        <a href="<?php echo $project['github_link']; ?>" target="_blank" class="btn ghost-btn"><i class="fab fa-github"></i> Code</a>
                                    </div>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <section id="contact-cta" class="contact scroll-animate">
                <div class="container">
                    <div class="contact-band glass-card">
                        <div class="contact-intro">
                            <span class="section-kicker">Let&apos;s Build</span>
                            <h2>Need a developer who cares about both system quality and visual finish?</h2>
                            <p>I&apos;m open to internships, junior developer roles, collaborations, and ambitious digital product work.</p>

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
                            <form id="contactForm" action="contact.php" method="POST">
                                <div class="form-grid">
                                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                                    <input type="email" id="email" name="email" placeholder="Your Email Address" required>
                                </div>
                                <input type="text" id="subject" name="subject" placeholder="Project Subject" required>
                                <textarea id="message" name="message" placeholder="Tell me about your idea..." required></textarea>
                                <button type="submit" class="btn primary-btn submit-btn">Send Message <i class="fas fa-paper-plane"></i></button>
                            </form>

                            <div class="visitor-card">
                                <i class="fas fa-eye"></i>
                                <span>Visitor number</span>
                                <strong>#<?php echo $visitor_count; ?></strong>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <div class="container footer-shell">
                <p>&copy; <?php echo date("Y"); ?> Ezedin Kedir. Crafted with code, clarity, and visual intention.</p>
                <div class="footer-links">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#skills">Skills</a>
                    <a href="#projects">Projects</a>
                </div>
            </div>
        </footer>
    </div>

    <script src="script.js"></script>
</body>
</html> -->

<?php
require_once 'config.php';

/* ---------- Content (edit here) ---------- */

$projects = [
    [
        'title'    => 'Pharmacy Clinic System',
        'year'     => '2025 – 2026',
        'summary'  => 'One system for patient records, medicine stock, appointments, prescriptions and billing, with user roles and a dashboard for each team.',
        'image'    => 'assets/5.jpg',
        'category' => 'fullstack',
        'status'   => 'Flagship',
        'tech'     => ['Next.js', 'TypeScript', 'PostgreSQL', 'Drizzle ORM', 'Better Auth'],
        'link'     => 'https://github.com/Ezexkedir10',
    ],
    [
        'title'    => 'EthioScore',
        'year'     => '2026 – now',
        'summary'  => 'An Amharic-first Ethiopian Premier League app: sourced standings, fixtures and club pages, built on a verified snapshot model so every number can be traced.',
        'image'    => 'assets/4.jpg',
        'category' => 'frontend',
        'status'   => 'In progress',
        'tech'     => ['Next.js', 'React', 'TypeScript', 'Tailwind CSS'],
        'link'     => 'https://github.com/Ezexkedir10',
    ],
    [
        'title'    => 'InkLink',
        'year'     => '2025 – 2026',
        'summary'  => 'My graduation project: a social reading and writing platform for Ethiopia with collaborative writing, premium content and AI-assisted moderation.',
        'image'    => 'assets/3.jpg',
        'category' => 'fullstack',
        'status'   => 'Graduation project',
        'tech'     => ['Next.js', 'TypeScript', 'Tailwind CSS', 'API integration'],
        'link'     => 'https://github.com/Ezexkedir10',
    ],
    [
        'title'    => 'Appointment Booking System',
        'year'     => '2025',
        'summary'  => 'Built during my Buna Labs internship: scheduling, rescheduling and tracking of appointments across the frontend, REST APIs and database.',
        'image'    => 'assets/1.jpg',
        'category' => 'fullstack',
        'status'   => 'Internship build',
        'tech'     => ['Next.js', 'TypeScript', 'REST APIs', 'PostgreSQL'],
        'link'     => 'https://github.com/Ezexkedir10',
    ],
    [
        'title'    => 'OmniOptimize',
        'year'     => '2025 – 2026',
        'summary'  => 'Team project where I handled UI/UX and frontend work: reviewing and refining interfaces, and helping teammates ship responsive components.',
        'image'    => 'assets/2.jpg',
        'category' => 'frontend',
        'status'   => 'Team project',
        'tech'     => ['React', 'Responsive UI', 'UI/UX'],
        'link'     => 'https://github.com/Ezexkedir10',
    ],
];

$skills = [
    'Languages'   => ['TypeScript', 'JavaScript', 'Python', 'SQL', 'C++', 'C', 'Dart'],
    'Frontend'    => ['Next.js', 'React', 'Tailwind CSS', 'HTML5', 'CSS3', 'Responsive design'],
    'Backend'     => ['Django', 'Django REST Framework', 'FastAPI', 'RESTful APIs', 'Better Auth'],
    'Data'        => ['PostgreSQL', 'Drizzle ORM', 'MongoDB', 'MySQL', 'SQLite'],
    'Tools'       => ['Git and GitHub', 'Docker', 'Linux', 'Figma', 'VS Code'],
    'Also'        => ['Software testing', 'AI model evaluation', 'UI/UX design', 'Database design'],
];

$marquee_one = ['Next.js', 'React', 'TypeScript', 'PostgreSQL', 'Django', 'FastAPI', 'Tailwind CSS', 'Docker'];
$marquee_two = ['REST APIs', 'Drizzle ORM', 'Figma', 'Python', 'Linux', 'Git', 'Dart', 'MongoDB'];

$journey = [
    [
        'date' => '09/2026 – now',
        'role' => 'App Tester',
        'org'  => 'ttm · Remote',
        'text' => 'Testing a mobile app across its core features and user flows, and sending structured bug and usability reports before release.',
    ],
    [
        'date' => '03/2026 – 09/2026',
        'role' => 'Software Engineering AI Trainer',
        'org'  => 'AfterQuery · Remote',
        'text' => 'Reviewed around 200 tasks for Project Julio, judging whether software implementations were correct, complete and true to the requirements. Also created and reviewed tasks and assessed AI-generated code on Blueprint, Rewrite and Aid.',
    ],
    [
        'date' => '06/2025 – 08/2025',
        'role' => 'Front-End / Full-Stack Development Intern',
        'org'  => 'Buna Labs Company · Addis Ababa',
        'text' => 'Designed the UI/UX and built the frontend of a polling and voting app in Next.js and TypeScript. Built an end-to-end appointment booking system across frontend, backend and PostgreSQL.',
    ],
    [
        'date' => '06/2024 – 08/2024',
        'role' => 'Software Development Intern',
        'org'  => 'Omricom Software Technologies · Addis Ababa',
        'text' => 'Built responsive web apps with HTML, CSS, JavaScript, React, Django and Python, including login and authentication screens. Helped teammates with PHP tasks.',
    ],
    [
        'date' => '09/2022 – 06/2026',
        'role' => 'B.Sc. Computer Science and Engineering',
        'org'  => 'Adama Science and Technology University',
        'text' => 'CGPA 3.59 / 4.00. Exit examination score 79/100. Coursework covered data structures, algorithms, databases, software engineering, networking and web systems.',
    ],
    [
        'date' => 'Certificate',
        'role' => 'STEM e-Learning Program',
        'org'  => 'University of Padua',
        'text' => 'Completed professional learning modules in the STEM e-Learning Program.',
        'link' => 'https://stem.elearning.unipd.it/course/view.php?id=14875',
    ],
];

$visitor_count = updateVisitorCount();
$flash = $_SESSION['flash'] ?? null;
unset($_SESSION['flash']);

$statement = 'I build full-stack products from end to end: interfaces in Next.js, APIs and PostgreSQL behind them, and a reviewer\'s eye for what breaks, sharpened by evaluating around 200 software tasks.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ezedin Kedir | Full-Stack Developer in Addis Ababa</title>
    <meta name="description" content="Ezedin Kedir is a full-stack developer and Computer Science and Engineering graduate building Next.js, TypeScript and PostgreSQL products in Addis Ababa.">
    <meta name="theme-color" content="#000000">
    <meta property="og:title" content="Ezedin Kedir | Full-Stack Developer">
    <meta property="og:description" content="Next.js, TypeScript, PostgreSQL and Django. Healthcare, publishing and football products from Ethiopia.">
    <meta property="og:image" content="p2.png">
    <script>document.documentElement.classList.add('js');</script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Hanken+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <a class="skip-link" href="#main">Skip to content</a>

    <div class="preloader" id="preloader" aria-hidden="true">
        <span class="preloader-count" id="preloaderCount">0</span>
        <span class="preloader-name">Ezedin Kedir</span>
    </div>

    <div class="scroll-progress" id="scrollProgress" aria-hidden="true"></div>
    <div class="cursor-dot" id="cursorDot" aria-hidden="true"></div>
    <div class="cursor-ring" id="cursorRing" aria-hidden="true"></div>
    <div class="grain" aria-hidden="true"></div>

    <header class="site-header" id="siteHeader">
        <a href="#home" class="brand" aria-label="Ezedin Kedir, back to top">EK<span class="brand-dot"></span></a>

        <nav class="nav" id="nav" aria-label="Main">
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#journey">Journey</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>

        <a href="#contact" class="nav-cta magnetic">Hire me</a>
        <button class="menu-toggle" id="menuToggle" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="nav">
            <span></span><span></span>
        </button>
    </header>

    <main id="main">

        <!-- HERO -->
        <section class="hero" id="home">
            <div class="hero-copy">
                <p class="hero-status"><span class="pulse"></span>Open to junior roles, internships and freelance work</p>

                <h1 class="hero-name" aria-label="Ezedin Kedir">
                    <span class="line" aria-hidden="true"><span>Ezedin</span></span>
                    <span class="line line-offset" aria-hidden="true"><span>Kedir</span></span>
                </h1>

                <p class="hero-role">Full-stack developer. <span class="typed" id="typed" data-words='["I ship Next.js apps.","I design the API too.","I test what I build."]'>I ship Next.js apps.</span></p>

                <p class="hero-lede">Computer Science and Engineering graduate from Adama Science and Technology University. I build healthcare, publishing and football products for Ethiopia, and I care about both the code and how it feels on screen.</p>

                <div class="hero-actions">
                    <a href="#projects" class="btn btn-red magnetic">See my work <i class="fas fa-arrow-down"></i></a>
                    <a href="<?php echo e(CV_FILE); ?>" class="btn btn-line magnetic" download><i class="fas fa-download"></i> Download CV</a>
                </div>
            </div>

            <figure class="hero-poster" id="poster">
                <div class="poster-frame">
                    <img src="p2.png" alt="Ezedin Kedir in a black suit and sunglasses, seated on a wooden stool" class="poster-img" id="posterImg" width="1568" height="2352" fetchpriority="high">
                </div>
                <svg class="poster-badge" viewBox="0 0 200 200" aria-hidden="true">
                    <defs><path id="badgeCircle" d="M100,100 m-78,0 a78,78 0 1,1 156,0 a78,78 0 1,1 -156,0"/></defs>
                    <circle cx="100" cy="100" r="98" fill="#000"/>
                    <text><textPath href="#badgeCircle" startOffset="0">Computer Science and Engineering. ASTU. CGPA 3.59.&#160;</textPath></text>
                    <text x="100" y="118" text-anchor="middle" class="badge-core">EK</text>
                </svg>
            </figure>
        </section>

        <!-- TECH MARQUEE -->
        <section class="band" aria-label="Technologies">
            <div class="marquee">
                <div class="marquee-track">
                    <?php for ($i = 0; $i < 2; $i++): foreach ($marquee_one as $item): ?>
                        <span><?php echo e($item); ?></span>
                    <?php endforeach; endfor; ?>
                </div>
            </div>
        </section>

        <!-- ABOUT -->
        <section class="section about" id="about">
            <div class="section-head" data-reveal>
                <h2>About</h2>
            </div>

            <p class="statement" id="statement" aria-label="<?php echo e($statement); ?>">
                <?php foreach (explode(' ', $statement) as $word): ?><span class="word" aria-hidden="true"><?php echo e($word); ?></span> <?php endforeach; ?>
            </p>

            <div class="about-grid">
                <div class="stats">
                    <div class="stat" data-reveal>
                        <strong data-count="3.59" data-decimals="2">3.59</strong>
                        <span>CGPA out of 4.00</span>
                    </div>
                    <div class="stat" data-reveal>
                        <strong><span data-count="200">200</span>+</strong>
                        <span>software tasks reviewed</span>
                    </div>
                    <div class="stat" data-reveal>
                        <strong data-count="4">4</strong>
                        <span>internships and roles</span>
                    </div>
                    <div class="stat" data-reveal>
                        <strong data-count="5">5</strong>
                        <span>products built</span>
                    </div>
                </div>

                <dl class="facts" data-reveal>
                    <div><dt>Based in</dt><dd>Addis Ababa, Ethiopia</dd></div>
                    <div><dt>Education</dt><dd>B.Sc. CSE, ASTU, 2026</dd></div>
                    <div><dt>Languages</dt><dd>Amharic (native), English (fluent)</dd></div>
                    <div><dt>Email</dt><dd><a href="mailto:<?php echo e(SITE_EMAIL); ?>"><?php echo e(SITE_EMAIL); ?></a></dd></div>
                </dl>
            </div>
        </section>

        <!-- SKILLS -->
        <section class="section skills" id="skills">
            <div class="section-head" data-reveal>
                <h2>Skills</h2>
                <p>What I reach for when a product needs to be built, tested and shipped.</p>
            </div>

            <div class="skill-words" aria-hidden="true">
                <div class="skill-row skill-row-a"><div class="skill-track">
                    <?php for ($i = 0; $i < 2; $i++): foreach ($marquee_one as $item): ?><span><?php echo e($item); ?></span><?php endforeach; endfor; ?>
                </div></div>
                <div class="skill-row skill-row-b"><div class="skill-track">
                    <?php for ($i = 0; $i < 2; $i++): foreach ($marquee_two as $item): ?><span><?php echo e($item); ?></span><?php endforeach; endfor; ?>
                </div></div>
            </div>

            <div class="skill-groups">
                <?php foreach ($skills as $group => $items): ?>
                    <div class="skill-group" data-reveal>
                        <h3><?php echo e($group); ?></h3>
                        <ul>
                            <?php foreach ($items as $item): ?>
                                <li><?php echo e($item); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- JOURNEY -->
        <section class="section journey" id="journey">
            <div class="section-head" data-reveal>
                <h2>Journey</h2>
                <p>Work, study and certificates, newest first.</p>
            </div>

            <ol class="timeline" id="timeline">
                <li class="timeline-fill" id="timelineFill" aria-hidden="true"></li>
                <?php foreach ($journey as $step): ?>
                    <li class="step" data-reveal>
                        <span class="step-dot" aria-hidden="true"></span>
                        <time class="step-date"><?php echo e($step['date']); ?></time>
                        <div class="step-body">
                            <h3><?php echo e($step['role']); ?></h3>
                            <p class="step-org"><?php echo e($step['org']); ?></p>
                            <p><?php echo e($step['text']); ?></p>
                            <?php if (!empty($step['link'])): ?>
                                <a class="text-link" href="<?php echo e($step['link']); ?>" target="_blank" rel="noopener">Verify credential <i class="fas fa-arrow-up-right-from-square"></i></a>
                            <?php endif; ?>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ol>
        </section>

        <!-- PROJECTS -->
        <section class="section projects" id="projects">
            <div class="section-head" data-reveal>
                <h2>Projects</h2>
                <p>Hover a row to preview it. Click to open the code.</p>
            </div>

            <div class="filters" role="group" aria-label="Filter projects" data-reveal>
                <button class="filter is-active" type="button" data-filter="all">All</button>
                <button class="filter" type="button" data-filter="fullstack">Full-stack</button>
                <button class="filter" type="button" data-filter="frontend">Frontend</button>
            </div>

            <ul class="project-list" id="projectList">
                <?php foreach ($projects as $p): ?>
                    <li class="project-row" data-category="<?php echo e($p['category']); ?>" data-image="<?php echo e($p['image']); ?>" data-title="<?php echo e($p['title']); ?>">
                        <a href="<?php echo e($p['link']); ?>" target="_blank" rel="noopener">
                            <span class="project-year"><?php echo e($p['year']); ?></span>
                            <span class="project-main">
                                <span class="project-title"><?php echo e($p['title']); ?></span>
                                <span class="project-summary"><?php echo e($p['summary']); ?></span>
                                <span class="project-tech"><?php echo e(implode(', ', $p['tech'])); ?></span>
                            </span>
                            <span class="project-status"><?php echo e($p['status']); ?></span>
                            <span class="project-arrow" aria-hidden="true"><i class="fas fa-arrow-up-right-from-square"></i></span>
                            <img class="project-thumb" src="<?php echo e($p['image']); ?>" alt="" loading="lazy" onerror="this.remove()">
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>

            <div class="project-preview" id="projectPreview" aria-hidden="true"><img alt=""></div>
        </section>

        <!-- CONTACT -->
        <section class="section contact" id="contact">
            <div class="contact-grid">
                <div class="contact-copy">
                    <h2 data-reveal>Have a product to build? Let&apos;s talk.</h2>
                    <p data-reveal>I&apos;m open to junior developer roles, internships, freelance builds and collaborations. Send the idea, a deadline and a budget range, and I&apos;ll reply with next steps.</p>

                    <a class="big-mail magnetic" href="mailto:<?php echo e(SITE_EMAIL); ?>" data-reveal><?php echo e(SITE_EMAIL); ?></a>

                    <ul class="contact-list" data-reveal>
                        <li><i class="fas fa-phone"></i> <a href="tel:+251929413131">+251 929 413 131</a></li>
                        <li><i class="fas fa-location-dot"></i> Addis Ababa, Ethiopia</li>
                        <li><i class="fas fa-globe"></i> <a href="https://ezedin-kedir.onrender.com" target="_blank" rel="noopener">ezedin-kedir.onrender.com</a></li>
                    </ul>

                    <div class="socials" data-reveal>
                        <a href="https://github.com/Ezexkedir10" target="_blank" rel="noopener" aria-label="GitHub" class="magnetic"><i class="fab fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/ezedin-kedir-910464398" target="_blank" rel="noopener" aria-label="LinkedIn" class="magnetic"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://x.com/Ezexkedir10" target="_blank" rel="noopener" aria-label="X" class="magnetic"><i class="fab fa-x-twitter"></i></a>
                        <a href="https://instagram.com/Ezexkedir10" target="_blank" rel="noopener" aria-label="Instagram" class="magnetic"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <form class="contact-form" id="contactForm" action="contact.php" method="POST" novalidate data-reveal>
                    <div class="form-status <?php echo $flash ? ($flash['ok'] ? 'is-ok' : 'is-error') : ''; ?>" id="formStatus" role="status" aria-live="polite">
                        <?php if ($flash): ?>
                            <strong><?php echo e($flash['message']); ?></strong>
                            <?php if (!empty($flash['errors'])): ?>
                                <ul><?php foreach ($flash['errors'] as $err): ?><li><?php echo e($err); ?></li><?php endforeach; ?></ul>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>

                    <div class="field-row">
                        <label class="field"><input type="text" name="name" id="name" placeholder=" " required maxlength="80" autocomplete="name"><span>Your name</span></label>
                        <label class="field"><input type="email" name="email" id="email" placeholder=" " required autocomplete="email"><span>Your email</span></label>
                    </div>
                    <label class="field"><input type="text" name="subject" id="subject" placeholder=" " required maxlength="120"><span>What is it about?</span></label>
                    <label class="field"><textarea name="message" id="message" placeholder=" " required rows="5" maxlength="4000"></textarea><span>Tell me about the idea</span></label>

                    <!-- Honeypot: leave empty -->
                    <input type="text" name="website" class="hp" tabindex="-1" autocomplete="off" aria-hidden="true">

                    <button type="submit" class="btn btn-red btn-wide magnetic" id="submitBtn"><span>Send message</span> <i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <p class="footer-big" aria-hidden="true">Ezedin Kedir</p>
        <div class="footer-row">
            <p>&copy; <?php echo date('Y'); ?> Ezedin Kedir. Built by hand with PHP, CSS and JavaScript.</p>
            <p class="visitor">Visitor <strong>#<?php echo (int) $visitor_count; ?></strong></p>
            <a href="#home" class="to-top">Back to top <i class="fas fa-arrow-up"></i></a>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>