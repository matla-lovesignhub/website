<?php
include 'weblib.php';
renderHeader(
    'Home page',
    'Welcome to the Love Sign Hub, your one-stop destination for all things British Sign Language (BSL). We are dedicated to providing high-quality BSL courses, resources, and support to help you learn and connect with the Deaf community. Whether you are a beginner or looking to enhance your BSL skills, we have something for everyone. Join us on this journey to embrace the beauty of sign language and foster inclusive communication. Explore our courses, access valuable resources, and become part of our vibrant community today!'
);

$viewArray = [
    [
        'title' => 'BSL Courses',
        'description' => 'From beginner (Level 1) to advanced (Level 6), our courses support you at every stage. Learn at your own pace with expert guidance and practical learning opportunities.',
        'videoLink' => 'bsl_courses_category.mp4',
        'link' => 'bsl-courses',
    ],
    [
        'title' => 'Deaf Awareness',
        'description' => 'Helping organisations and individuals build confidence in understanding and communicating with Deaf people and create more inclusive environments.',
        'videoLink' => 'deaf_awareness.mp4',
        'link' => 'deaf-awareness',
        'colour' => '#37A2F6',
    ],
    [
        'title' => 'Career Support Hub',
        'description' => 'Supporting Deaf people in finding work through job searching assistance, CV preparation, and interview preparation.',
        'videoLink' => 'career_support_category.mp4',
        'link' => 'career-support',
    ],
    [
        'title' => 'ATW Hub',
        'description' => 'We guide you through the Access to Work process, helping you understand and secure the support you need.',
        'videoLink' => 'atw_hub_category.mp4',
        'link' => 'atw-hub',
        'colour' => '#37A2F6',
    ],
    [
        'title' => 'Interpreter Services',
        'description' => 'We provide professional interpreting support for workplaces, meetings, events, and appointments.',
        'videoLink' => 'interpreter_services_category.mp4',
        'link' => 'interpreter-services',
    ],
];

?>
<div class="main-header">
    <img src="images/hero-image-mash.png" alt="LoveSign Hub" class="main-header-image">

    <div class="main-header-content">
        <h1 class="main-header-title">Welcome to LoveSign Hub</h1>

        <p class="main-header-description">
            Your interactive gateway to British Sign Language (BSL) learning,
            career support and a strong inclusive community.
        </p>
    </div>
</div>

<div class="et_pb_toggle_0 et_pb_toggle et_pb_toggle_close" id="translate-toggle">

    <div class="toggle_title">
        <h2>Deaf-led. Visual.<span style="color:#8484ef;"> Human.</span></h2>
    </div>

    <div class="et_pb_text_inner">
        <p>
            LoveSign Hub is built by the Deaf community, for everyone.
            We believe communication should be seen, not just heard.
        </p>
    </div>

    <div class="translate-video">
        <div class="fitvidsignore">
            <video
                class="hero-video"
                muted
                controls
                playsinline
                preload="metadata"
                poster="images/video-thumbnail.png">

                <source src="videos/home.mp4" type="video/mp4">

                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div class="toggle-header">
        <h4 class="et_pb_toggle_title">Translate Video</h4>

        <button class="toggle-btn" id="toggleBtn" type="button">
            <span class="toggle-icon">+</span>
        </button>
    </div>

    <div class="et_pb_toggle_content" id="toggleContent">

        <p>Hello and welcome! I'm Lamin.</p>
        <p>
            At LoveSign Hub, we are more than just a service provider.
            We are a bridge between Deaf and Hearing worlds.
            We offer BSL courses from Level 1 to Level 6, supporting you at every stage of your learning.
            We deliver Deaf awareness training, helping organisations build confidence and communicate inclusively.
            We offer interpreter booking services, connecting you with qualified professionals when you need them.
            For interpreters, we provide training and coaching to strengthen skills and support career progression.
            We provide Deaf career support, helping Deaf individuals find the right opportunities, grow professionally, and succeed at work.
            We also guide you through Access to Work, helping you understand and secure the support available to you.
            Everything we do is about access, growth, and real inclusion.
            Explore LoveSign Hub, connect with us, and be part of a community where communication works for everyone.
        </p>

    </div>

    <div class="tootle-servce">
        <div class="toggle-wrapper-image">
            <img alt="Orange Hands" src="images/Orange-Hands-1.svg" />
        </div>
        <div class="et_pb_text_inner">
            <p>At LoveSign Hub, we believe communication is a basic human right, not a privilege. We have a space that feels welcoming, supportive and full of life, just like the community we serve.
                Whether you are a hearing person starting your journey in BSL, developing your career as a professional interpreter, or learning BSL to connect with Deaf friends and the wider Deaf community, this is your place.
                If you are a Deaf person looking for job opportunities that match your skills and ambitions, this is your place too.</p>
        </div>
    </div>
</div>

<section class="et_pb_section et_pb_section_3">
    <div class="et_pb_row et_pb_row_4">
        <div class="et_pb_column et_pb_column_4_4">
            <h2 class="section_title">What We Offer</h2>
            <p class="section_description">
                LoveSign Hub is built by the Deaf community, for everyone.
                We believe communication should be seen, not just heard.
            </p>
        </div>
    </div>

    <div class="et_pb_row et_pb_row_6 et_grid_row">
        <?php foreach ($viewArray as $value): ?>
            <article class="et_pb_column offer_card">
                <div
                    class="card_content"
                    style="--card-color: <?= htmlspecialchars($value['colour'] ?? 'var(--secondary-yellow)', ENT_QUOTES, 'UTF-8'); ?>">
                    <div class="video-wrapper">
                        <video
                            class="hero-video"
                            controls
                            preload="metadata"
                            poster="images/video-thumbnail.png">
                            <source
                                src="videos/<?= htmlspecialchars($value['videoLink'], ENT_QUOTES, 'UTF-8'); ?>"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <h3 class="offer_title">
                        <?= htmlspecialchars($value['title'], ENT_QUOTES, 'UTF-8'); ?>
                    </h3>
                    <p class="offer_description">
                        <?= htmlspecialchars($value['description'], ENT_QUOTES, 'UTF-8'); ?>
                    </p>
                    <a
                        class="et_pb_link"
                        href="/<?= htmlspecialchars($value['link'], ENT_QUOTES, 'UTF-8'); ?>.php">
                        Explore More
                    </a>
                </div>
            </article>

        <?php endforeach; ?>
    </div>
</section>

<section class="et_pb_section et_pb_section_2">
    <div class="et_pb_row et_pb_row_4">
        <div class="et_pb_column et_pb_column_4_4">
            <h2 class="section_title">Terps Corner</h2>
        </div>
    </div>
    <div class="offer-content">
        <div class="offer-text">
            <p class="section_description">
                We provide a complete A–Z professional development ecosystem designed specifically for interpreters working within the field.
                Created by terps, for terps, this space is designed to support interpreters navigating our niche field.
                From CPD courses to mentorships, you'll find the tools, guidance, and opportunities you need all in one place.
            </p>
        </div>
        <div class="offer-video">
            <img src="images/coming-soon.png" alt="Coming Soon">
        </div>
    </div>

    </div>
</section>
<?php renderFooter(); ?>
<script>
    document.addEventListener("DOMContentLoaded", function() {

        const toggle = document.getElementById("translate-toggle");
        const button = document.getElementById("toggleBtn");
        const content = document.getElementById("toggleContent");

        if (!toggle || !button || !content) {
            return;
        }

        const icon = button.querySelector(".toggle-icon");

        button.addEventListener("click", function() {

            toggle.classList.toggle("et_pb_toggle_open");

            const isOpen = toggle.classList.contains("et_pb_toggle_open");

            content.style.display = isOpen ? "block" : "none";

            if (icon) {
                icon.textContent = isOpen ? "−" : "+";
            }

        });

    });
</script>