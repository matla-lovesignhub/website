<?php
include 'weblib.php';
renderHeader($title = 'Home page', $description = 'Welcome to the Love Sign Hub, your one-stop destination for all things British Sign Language (BSL). We are dedicated to providing high-quality BSL courses, resources, and support to help you learn and connect with the Deaf community. Whether you are a beginner or looking to enhance your BSL skills, we have something for everyone. Join us on this journey to embrace the beauty of sign language and foster inclusive communication. Explore our courses, access valuable resources, and become part of our vibrant community today!');
?>

<div class="main-header">
    <img src="images/hero-image-mash.png" alt="LoveSign Hub" class="main-header-image">

    <div class="main-header-content">
        <h1 class="main-header-title">Welcome to LoveSign Hub</h1>

        <p class="main-header-description">
            Your interactive gateway to British Sign Language (BSL) learning, career support and a strong inclusive community. </p>
    </div>
</div>

<div class="et_pb_toggle_0 et_pb_toggle et_pb_toggle_close" id="translate-toggle">
    <div class="toggle_title">
        <h2> Deaf-led. Visual.<span style="color: #8484ef;"> Human.</span></h2>
    </div>
    <div class="et_pb_text_inner">
        <p>
            <span>LoveSign Hub is built by the Deaf community, for everyone. We believe communication should be seen, not just heard.</span>
        </p>
    </div>
    <!-- VIDEO -->
    <div class="translate-video">
        <div class="fitvidsignore">
            <video class="hero-video" autoplay muted controls preload="metadata" poster="images/video-thumbnail.png">
                <source src="videos/home.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

    </div>

    <!-- TOGGLE HEADER -->
    <div class="toggle-header">
        <h4 class="et_pb_toggle_title">Translate Video</h4>

        <button class="toggle-btn" id="toggleBtn">
            <span class="toggle-icon">+</span>
        </button>
    </div>

    <!-- TOGGLE CONTENT -->
    <div class="et_pb_toggle_content" id="toggleContent">

        <p>Hello and welcome! I’m Lamin. At LoveSign Hub, we are more than just a service provider. We are a bridge between Deaf and Hearing worlds. We make sure that communication, opportunity and support are fully accessible for both Deaf and Hearing people.</p>
        <p>We offer BSL courses from Level 1 to Level 6, supporting you at every stage of your learning. </p>
        <p>We deliver Deaf awareness training, helping organisations build confidence and communicate inclusively.</p>
        <p>We offer interpreter booking services, connecting you with qualified professionals when you need them.</p>
        <p>And for interpreters, we provide training and coaching to strengthen skills and support career progression.</p>
        <p>We provide Deaf career support—helping Deaf individuals find the right opportunities, grow professionally, and succeed at work.</p>
        <p>We also guide you through Access to Work, helping you understand and secure the support available to you.</p>
        <p>Everything we do is about access, growth, and real inclusion.</p>
        <p>Explore LoveSign Hub, connect with us, and be part of a community where communication works for everyone.</p>
    </div>
    <div class="tootle-servce">
        <div class="toggle-wrapper-image">
            <img alt="Orange Hands" src="images/Orange-Hands-1.svg" />
        </div>
        <div class="et_pb_text_inner">
            <p>At LoveSign Hub, we believe communication is a basic human right, not a privilege. We have a space that feels welcoming, supportive and full of life, just like the community we serve.</p>
            <p>Whether you are a hearing person starting your journey in BSL, developing your career as a professional interpreter, or learning BSL to connect with Deaf friends and the wider Deaf community, this is your place.</p>
            <p>If you are a Deaf person looking for job opportunities that match your skills and ambitions, this is your place too.</p>
        </div>
    </div>
</div>

<section class="et_pb_section et_pb_section_3">
    <!-- Section Header -->
    <div class="et_pb_row et_pb_row_4">
        <div class="et_pb_column et_pb_column_4_4">

            <h2 class="section_title">What We Offer</h2>

            <p class="section_description">
                LoveSign Hub is built by the Deaf community, for everyone.
                We believe communication should be seen, not just heard.
            </p>
        </div>
    </div>

    <!-- Video Cards -->
    <div class="et_pb_row et_pb_row_6 et_grid_row">
        <article class="et_pb_column offer_card">
            <div class="video-wrapper">
                <video
                    class="hero-video"
                    controls
                    preload="metadata"
                poster="images/video-thumbnail.png">

                    <source src="videos/bsl_courses_category.mp4" type="video/mp4">

                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="card_content">
                <h3 class="offer_title">BSL Courses</h3>

                <p class="offer_description">
                    From beginner (Level 1) to advanced (Level 6), our courses
                    support you at every stage. Learn at your own pace with
                    expert guidance and practical learning opportunities.
                </p>
                <a class="et_pb_link" href="/bsl-courses.php">Explore More</a>
            </div>
        </article>

        <article class="et_pb_column offer_card">
            <div class="video-wrapper">
                <video
                    class="hero-video"
                    controls
                    preload="metadata"
                    poster="images/video-thumbnail.png">
                    <source src="videos/deaf_awareness.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="card_content" style="--card-color: #37A2F6;">
                <h3 class="offer_title">Deaf Awareness</h3>

                <p class="offer_description">
                    Helping organisations and individuals build confidence in understanding and communicating with Deaf people and create more inclusive environments.
                </p>
                <a class="et_pb_link" style="--card-color: #37A2F6;" href="/deaf-awareness.php">Explore More</a>
            </div>
        </article>
        <article class="et_pb_column offer_card">
            <div class="video-wrapper">
                <video
                    class="hero-video"
                    controls
                    preload="metadata"
                    poster="images/video-thumbnail.png">

                    <source src="videos/career_support_category.mp4" type="video/mp4">

                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="card_content">
                <h3 class="offer_title">Career Support Hub</h3>

                <p class="offer_description">
                    Supporting deaf people in finding work that involves job searching assistance, CV preparation, and interview preparation.
                </p>
                <a class="et_pb_link" href="/career-support.php">Explore More</a>
            </div>
        </article>
        <article class="et_pb_column offer_card">
            <div class="video-wrapper">
                <video
                    class="hero-video"
                    controls
                    preload="metadata"
                    poster="images/video-thumbnail.png">
                    <source src="videos/atw_hub_category.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="card_content">
                <h3 class="offer_title" style="--card-color: #37A2F6;">ATW Hub</h3>
                <p class="offer_description">
                    We guide you through the Access to Work process, helping you understand and secure the support you need.
                </p>
                <a class="et_pb_link" style="--card-color: #37A2F6;" href="/atw-hub.php">Explore More</a>
            </div>
        </article>
        <article class="et_pb_column offer_card">
            <div class="video-wrapper">
                <video
                    class="hero-video"
                    controls
                    preload="metadata"
                    poster="images/video-thumbnail.png">

                    <source src="videos/interpreter_services_category.mp4" type="video/mp4">

                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="card_content">
                <h3 class="offer_title">Interpreter Services</h3>
                <p class="offer_description">
                    We provide professional interpreting support for a range of situations, including workplaces, meetings, events, and appointments. </p>
                <a class="et_pb_link" href="/interpreter-services.php">Explore More</a>
            </div>
        </article>
    </div>
</section>
<section class="et_pb_section et_pb_section_2">
    <h2 class="section_title">Terps Corner</h2>
    <div class="offer-content">
        <div class="offer-text">
            <p class="section_description">
                We provide a complete A–Z professional development ecosystem designed specifically for interpreters working within the field. Created by terps, for terps, this space is designed to support interpreters navigating our niche field. From CPD courses to mentorships, you'll find the tools, guidance, and opportunities you need all in one place.
            </p>
        </div>
        <div class="offer-video">
            <!-- <video
                class="hero-video"
                controls
                preload="metadata"
                poster="images/video-thumbnail.png">

                <source src="videos/terps_corner_category.mp4" type="video/mp4">

                Your browser does not support the video tag.
            </video> -->

            <img src="images/coming-soon.png" alt="Coming Soon">
        </div>
    </div>
</section>

<?php
renderFooter();
?>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        const toggle = document.getElementById("translate-toggle");
        const button = document.getElementById("toggleBtn");
        const content = document.getElementById("toggleContent");
        const icon = button.querySelector(".toggle-icon");

        button.addEventListener("click", function() {

            toggle.classList.toggle("et_pb_toggle_open");

            if (toggle.classList.contains("et_pb_toggle_open")) {
                content.style.display = "block";
                icon.textContent = "−";
            } else {
                content.style.display = "none";
                icon.textContent = "+";
            }

        });

    });
</script>