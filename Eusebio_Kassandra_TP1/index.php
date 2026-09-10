<?php

// PORTFOLIO DATA

$name = "Kassandra Nicole Eusebio";
$role = "Computer Science Student • Content Creator • Tech Enthusiast";
$about = "I’m a computer science student and content creator with a growing passion for technology. I’m currently exploring programming, digital experiences, and the opportunities within the growing tech industry.";
$aboutDetails = "I’m currently learning and working with programming languages such as Java, C#, HTML, CSS, PHP, and JavaScript. While I’m still a beginner, I enjoy exploring the tech industry and improving my skills through hands-on practice. I’m also taking online courses to expand my knowledge and work toward earning certifications as I continue building my foundation in technology.";
$email = "kssndrncl.06@gmail.com";
$github = "https://github.com/k4sndr";
$instagram = "https://www.instagram.com/kssndrncl_/";

// Certifications
$certifications = [
    [
        "status" => "IN PROGRESS",
        "title" => "Building My Credentials",
        "description" => "Currently working toward certifications and expanding my technical knowledge."
    ]
];

// Skills
$skills = [
    "Java",
    "C#",
    "HTML",
    "CSS",
    "PHP",
    "JavaScript",
    "UI/UX Design",
    "Content Creation"
];

// Projects
$projects = [
    [
        "number" => "01",
        "title" => "Projects in Progress",
        "description" => "Building, experimenting, and learning. Selected academic and personal projects will appear here as they develop."
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,500&display=swap" rel="stylesheet">

    <title><?php echo $name; ?> — Portfolio</title>

    <style>

        /* GENERAL */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f5f1eb;
            color: #20201f;
            line-height: 1.6;
            overflow-x: hidden;
        }

        a {
            color: inherit;
            text-decoration: none;
        }


        /* NAVIGATION */

        nav {
            position: sticky;
            top: 0;
            z-index: 100;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 24px 6%;
            background-color: rgba(245, 241, 235, 0.95);
            border-bottom: 1px solid #d8d2ca;
        }

        .logo {
            font-family: "Cormorant Garamond", serif;
            font-size: 26px;
            font-style: italic;
            font-weight: 500;
            letter-spacing: 0;
        }

        .nav-links {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        .nav-links a {
            font-size: 12px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            transition: opacity 0.3s ease;
        }

        .nav-links a:hover {
            opacity: 0.5;
        }


        /* HERO */

        .hero {
            min-height: 75vh;
            display: grid;
            grid-template-columns: minmax(0, 1.1fr) minmax(280px, 0.7fr);
            align-items: center;
            padding: 70px 8%;
            gap: 50px;
        }

        .hero-small {
            font-size: 12px;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 20px;
            color: #77716a;
        }

        .hero h1 {
            font-size: clamp(48px, 6vw, 90px);
            line-height: 0.9;
            letter-spacing: -4px;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .hero-description {
            max-width: 520px;
            font-size: clamp(14px, 1.4vw, 17px);
            color: #5f5b56;
        }

        .hero-image {
            width: 100%;
            max-width: 290px;
            height: 360px;
            background-color: #ddd7e5;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            margin-left: auto;
        }

        .hero-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }


        /* SECTIONS */

        section {
            padding: 120px 8%;
            border-top: 1px solid #d8d2ca;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            margin-bottom: 70px;
        }

        .section-number {
            font-size: 12px;
            letter-spacing: 2px;
            color: #77716a;
        }

        .section-title {
            font-size: clamp(40px, 6vw, 80px);
            letter-spacing: -3px;
            line-height: 1;
        }


        /* ABOUT */

        .about-content {
            max-width: 900px;
        }

        .about-content p {
            font-size: clamp(24px, 3vw, 40px);
            line-height: 1.25;
            letter-spacing: -1px;
        }


        /* CERTIFICATIONS */

        .certification-list {
            border-top: 1px solid #cfc8bf;
        }

        .certification {
            display: grid;
            grid-template-columns: 100px 1fr 1fr;
            gap: 30px;
            padding: 30px 0;
            border-bottom: 1px solid #cfc8bf;
            transition: padding 0.3s ease;
        }

        .certification:hover {
            padding-left: 15px;
            padding-right: 15px;
            background-color: #ebe5ef;
        }

        .cert-year {
            color: #77716a;
            font-size: 11px;
            letter-spacing: 2px;
            font-weight: bold;
        }

        .cert-title {
            font-size: 24px;
            font-weight: bold;
        }

        .cert-org {
            color: #77716a;
            font-size: 14px;
            max-width: 400px;
        }


        /* SKILLS */

        .skills-container {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .skill {
            padding: 15px 22px;
            border: 1px solid #bdb6ae;
            border-radius: 50px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .skill:hover {
            background-color: #2a2927;
            color: #f5f1eb;
        }


        /* PROJECTS */

        .project-list {
            border-top: 1px solid #cfc8bf;
        }

        .project {
            display: grid;
            grid-template-columns: 100px 1fr 1fr;
            gap: 30px;
            padding: 45px 0;
            border-bottom: 1px solid #cfc8bf;
        }

        .project-number {
            color: #77716a;
            font-size: 13px;
        }

        .project-title {
            font-size: 32px;
            letter-spacing: -1px;
        }

        .project-description {
            color: #77716a;
            font-size: 15px;
        }


        /* CONTACT */

        .contact {
            min-height: 70vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .contact-heading {
            font-size: clamp(50px, 9vw, 130px);
            line-height: 0.9;
            letter-spacing: -6px;
            max-width: 1000px;
        }

        .contact-links {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
        }

       .contact-links a {
            padding-bottom: 5px;
            border-bottom: 1px solid #20201f;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .contact-links a:hover {
            color: #77716a;
            padding-left: 8px;
            border-bottom-color: #77716a;
        }


        /* FOOTER */

        footer {
            padding: 25px 8%;
            display: flex;
            justify-content: space-between;
            border-top: 1px solid #d8d2ca;
            color: #77716a;
            font-size: 12px;
        }


        /* MOBILE */

        @media (max-width: 768px) {

            nav {
                padding: 20px 5%;
            }

            .nav-links {
                gap: 12px;
            }

            .nav-links a {
                font-size: 9px;
            }

            .hero {
                grid-template-columns: 1fr;
                min-height: auto;
                padding: 60px 6%;
                gap: 40px;
            }

            .hero h1 {
                font-size: clamp(48px, 14vw, 70px);
                letter-spacing: -3px;
            }

            .hero-description {
                max-width: 520px;
                font-size: 15px;
            }

            .hero-image {
                width: 100%;
                max-width: 320px;
                height: 400px;
                margin: 0 auto;
            }

            section {
                padding: 80px 6%;
            }

            .section-header {
                display: block;
            }

            .section-number {
                display: block;
                margin-bottom: 15px;
            }

            .certification,
            .project {
                grid-template-columns: 1fr;
                gap: 10px;
            }

            .project-title {
                font-size: 26px;
            }

            .contact-heading {
                letter-spacing: -3px;
            }

            footer {
                padding: 20px 6%;
            }
        }

    </style>

</head>


<body>

    <!-- NAVIGATION -->

    <nav>

        <div class="logo">
            KE.
        </div>

        <ul class="nav-links">

            <li>
                <a href="#about">About</a>
            </li>

            <li>
                <a href="#certifications">Certifications</a>
            </li>

            <li>
                <a href="#skills">Skills</a>
            </li>

            <li>
                <a href="#projects">Projects</a>
            </li>

            <li>
                <a href="#contact">Contact</a>
            </li>

        </ul>

    </nav>


    <!-- HERO -->

    <header class="hero">

        <div>

            <p class="hero-small">
                <?php echo $role; ?>
            </p>

            <h1>
                <?php echo $name; ?>
            </h1>

            <p class="hero-description">
                <?php echo $about; ?>
            </p>

        </div>

        <div class="hero-image">
            <img src="images/kassandra.jpg" alt="Kassandra Nicole Eusebio">
        </div>

    </header>


    <!-- ABOUT -->

    <section id="about">

        <div class="section-header">

            <span class="section-number">
                01 — ABOUT
            </span>

            <h2 class="section-title">
                About
            </h2>

        </div>

        <div class="about-content">

            <p>
                <?php echo $aboutDetails; ?>
            </p>

        </div>

    </section>


    <!-- CERTIFICATIONS -->

    <section id="certifications">

        <div class="section-header">

            <span class="section-number">
                02 — CERTIFICATIONS
            </span>

            <h2 class="section-title">
                Certifications
            </h2>

        </div>

        <div class="certification-list">

            <?php foreach ($certifications as $certificate): ?>

                <div class="certification">

                    <span class="cert-year">
                        <?php echo $certificate["status"]; ?>
                    </span>

                    <div>

                        <h3 class="cert-title">
                            <?php echo $certificate["title"]; ?>
                        </h3>

                    </div>

                    <p class="cert-org">
                        <?php echo $certificate["description"]; ?>
                    </p>

                </div>

            <?php endforeach; ?>

        </div>

    </section>


    <!-- SKILLS -->

    <section id="skills">

        <div class="section-header">

            <span class="section-number">
                03 — SKILLS
            </span>

            <h2 class="section-title">
                Skills
            </h2>

        </div>

        <div class="skills-container">

            <?php foreach ($skills as $skill): ?>

                <span class="skill">
                    <?php echo $skill; ?>
                </span>

            <?php endforeach; ?>

        </div>

    </section>


    <!-- PROJECTS -->

    <section id="projects">

        <div class="section-header">

            <span class="section-number">
                04 — PROJECTS
            </span>

            <h2 class="section-title">
                Projects
            </h2>

        </div>

        <div class="project-list">

            <?php foreach ($projects as $project): ?>

                <div class="project">

                    <span class="project-number">
                        <?php echo $project["number"]; ?>
                    </span>

                    <h3 class="project-title">
                        <?php echo $project["title"]; ?>
                    </h3>

                    <p class="project-description">
                        <?php echo $project["description"]; ?>
                    </p>

                </div>

            <?php endforeach; ?>

        </div>

    </section>


    <!-- CONTACT -->

    <section id="contact" class="contact">

        <div>

            <span class="section-number">
                05 — CONTACT
            </span>

            <h2 class="contact-heading">
                Let's connect.
            </h2>

        </div>

        <div class="contact-links">

            <a href="mailto:<?php echo $email; ?>">
                Email
            </a>

            <a href="<?php echo $github; ?>">
                GitHub
            </a>

            <a href="<?php echo $instagram; ?>">
                Instagram
            </a>

        </div>

    </section>


    <!-- FOOTER -->

    <footer>

        <span>
            © <?php echo date("Y"); ?> <?php echo $name; ?>
        </span>

        <span>
            Built with PHP
        </span>

    </footer>


</body>

</html>