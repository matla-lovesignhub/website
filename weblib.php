<?php
include_once("SQLManger.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function renderHeader(string $title, string $description)
{
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
        <title>' . htmlspecialchars($title) . ' | LoveSign Hub</title>
        <link rel="icon" type="image/png" href="favicons/favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/svg+xml" href="favicons/favicon.svg" />
        <link rel="shortcut icon" href="favicons/favicon.ico" />
        <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png" />
        <link rel="manifest" href="favicons/site.webmanifest" /> 
        <link rel="stylesheet" href="assets/navBar.css">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="shortlink" href="https://lovesignhub.co.uk/">

        <meta name="apple-mobile-web-app-title" content="LoveSign Hub" />
        <meta name="keywords" content="BSL courses, British Sign Language, Deaf awareness training, interpreting services, Access to Work, Deaf career support, sign language learning, professional interpreter, Deaf community, inclusive communication, LoveSign Hub, BSL Level 1, BSL Level 6, British sign language courses, Deaf culture, sign language training, Deaf education, sign language resources, Deaf-led company, visual communication, human connection">';
    if ($description != '') {
        echo '<meta name="description" content="' . htmlspecialchars($description) . '">';
    } else {
        echo '<meta name="description" content="LoveSign Hub is a Deaf-led company for everyone. We offer BSL courses (Level 1–6), Deaf awareness training, interpreting services, career support, Access to Work support and mentorship for interpreters. We believe communication should be seen, not just heard.">';
    }
    // TODO: add meta tags for SEO and social media sharing
    // TODO: add Google Analytics script
    echo '
    </head>
     <body>
<header class="site-header">
    <div class="header-inner">
        <div class="header-row">
            <!-- Logo -->
            <div class="header-column logo-column">
                <div class="image-module">
                    <a href="https://lovesignhub.co.uk/">
                        <span class="image-wrap">
                            <img alt="LoveSign Hub Website" fetchpriority="high" loading="lazy" decoding="async" src="images/LoveSign-Hub-Website.svg" title="LoveSign Hub Website" width="100" height="100" srcset="images/LoveSign-Hub-Website.svg 688w" sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 688px, 100vw" class="wp-image-81"/>
                        </span>
                    </a>
                </div>
            </div>
            <!-- Contact Button -->
            <div class="header-column contact-column">
                <div class="button-wrapper">
                    <a class="contact-button" href="https://lovesignhub.co.uk/contact-us/">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
                    
<nav class="main-menu">
    <div class="menu-container">
        <ul class="menu-list">
            <li>
                <a href="/website/index.php">
                    Home
                </a>
            </li>
            <li>
                <a href="/website/bsl-courses.php">
                    BSL Courses
                </a>
            </li>
            <li>
                <a href="https://lovesignhub.co.uk/deaf-awareness/">
                    Deaf Awareness
                </a>
            </li>
            <li>
                <a href="https://lovesignhub.co.uk/career-support-hub/">
                    Career Support Hub
                </a>
            </li>
            <li>
                <a href="https://lovesignhub.co.uk/atw-hub/">
                    ATW Hub
                </a>
            </li>
            <li>
                <a href="https://lovesignhub.co.uk/interpreting-services/">
                    Interpreting Services
                </a>
            </li>
        </ul>
    </div>
</nav>';
}
function renderFooter()
{
?>
<footer class="site-footer">
    <div class="footer-container">
        <div class="footer-grid">
            <!-- BRAND -->
            <div class="footer-column">
                <a href="https://lovesignhub.co.uk/" class="footer-logo">
                    <img src="images/LoveSign-Hub-Website.svg" alt="LoveSign Hub Website">
                </a>
                <p class="footer-tagline">
                    Deaf-led. Visual. Human.
                </p>
            </div>

            <!-- EXPLORE -->
            <div class="footer-column">
                <h4>Explore</h4>
                <ul>
                    <li><a href="/bsl-courses.php">BSL Courses</a></li>
                    <li><a href="#">Deaf Awareness</a></li>
                    <li><a href="#">Career Support Hub</a></li>
                    <li><a href="#">ATW Hub</a></li>
                    <li><a href="#">Interpreting Services</a></li>
                </ul>

            </div>

            <!-- CONNECT -->
            <div class="footer-column">
                <h4>Connect</h4>
                <ul>
                    <li><a href="#">Meet the Team</a></li>
                    <li><a href="#">Work with Us</a></li>
                    <li><a href="#">Interpreter Registration</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <!-- INFORMATION -->
            <div class="footer-column">
                <h4>Information</h4>
                <ul>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Cookie Policy</a></li>
                    <li><a href="#">Accessibility Statement</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>

        <!-- SOCIAL -->
        <div class="footer-social">
            <a href="https://www.facebook.com/LoveSignHub">Facebook</a>
            <a href="https://www.instagram.com/lovesignhub/?hl=en">
                Instagram
            </a>
            <a href="https://www.tiktok.com/@lovesignhub">
                TikTok
            </a>
            <a href="https://www.youtube.com/@LoveSignHub">
                YouTube
            </a>
        </div>

        <!-- COPYRIGHT -->
        <div class="footer-bottom">
            <p>
                © <span id="footer-year"></span>
                LoveSign Hub. All rights reserved.
            </p>
        </div>
    </div>
</footer>
</body>
</html>
<script>
    document.getElementById("footer-year").textContent =
        new Date().getFullYear();
</script>
<?php
}


function testSelect()
{
    echo "<br> Testing select function <br>";

    $data = SelectedData(
        "SELECT name, email FROM users WHERE status = ?",
        ['active'],
        false
    );

    if (empty($data)) {
        echo "No active users found.";
        return;
    }

    echo "<pre>";
    print_r($data);
    echo "</pre>";

    echo "<br> Select list <br>";

    echo "name: " . htmlspecialchars($data[0]['name']) . "<br>";
    echo "email: " . htmlspecialchars($data[0]['email']) . "<br>";
}

function testInsert(): void
{
    echo "<br> Testing insert function <br>";

    $email = 'john' . time() . '@example.com';

    $result = InsertData(
        "INSERT INTO users (name, email, status)
         VALUES (?, ?, ?)",
        ['John Doe', $email, 'active']
    );

    if ($result > 0) {

        echo "Insert successful.";
    } else {

        echo "Insert failed.";
    }
}

function testInsertReturnID(): void
{
    echo "<br> Testing insert with return ID function <br>";

    $id = InsertDataReturnID(
        "INSERT INTO users (name, status)
         VALUES (?, ?)
         RETURNING id",
        ['John', 'active']
    );

    if ($id !== false) {

        echo "Inserted ID: "
            . htmlspecialchars((string)$id);
    } else {

        echo "Insert failed.";
    }
}

function testDelete(): void
{
    echo "<br> Testing delete function <br>";

    $result = DeleteData(
        "DELETE FROM users WHERE email = ?",
        ['john.doe@example.com']
    );

    echo "Deleted rows: "
        . htmlspecialchars((string)$result);
}
function testUpdate(): void
{
    echo "<br> Testing update function <br>";

    $result = UpdateData(
        "UPDATE users
         SET status = ?
         WHERE email = ?",
        ['inactive', 'john.doe@example.com']
    );

    echo "Updated rows: "
        . htmlspecialchars((string)$result);
}
