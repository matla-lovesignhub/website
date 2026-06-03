<?php
include("weblib.php");
renderHeader('career Support Hub', 'Empowering the Deaf community to achieve their professional goals.');
?>
<div class="main-header">
    <div class="main-header-content">
        <h1 class="main-header-title">Career Support Hub</h1>

        <p class="main-header-description">
            Empowering the Deaf community to achieve their professional goals.
        </p>
    </div>
</div>

<div class="et_pb_toggle_0 et_pb_toggle et_pb_toggle_close" id="translate-toggle">
    <!-- VIDEO -->
    <div class="translate-video">
        <div class="fitvidsignore">
            <video
                class="hero-video" autoplay muted controls preload="metadata" poster="images/hero-video-thumbnail.jpg">
                <source src="videos/career_support_hub.mp4" type="video/mp4">
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
        <p>Hello and welcome to our Career Support Hub.
            We believe that career success should be accessible to everyone. Our mission is to break down barriers in the recruitment process and ensure Deaf and Hard-of-hearing individuals have the tools, confidence and support they need to thrive in the workplace. We bridge the gap between talented candidates and inclusive employers.
            We offer support to Deaf and Hard-of-hearing individuals in career development and building confidence. Our services include CV writing, job application, interview preparation and understanding workplace communication.
            Our goal is to empower you with your professional talent and preparation you need to seize opportunities.
            If you require support, please contact us and let us know what you need.</p>
    </div>
    <div class="tootle-servce">
        <div class="toggle-wrapper-image">
            <img alt="Orange Hands" src="images/Orange-Hands-1.svg" />
        </div>
        <div class="et_pb_text_inner">
        </div>
    </div>
</div>

<section class="et_pb_section et_pb_section_2">
    <div class="et_pb_row et_pb_row_4">
        <div class="et_pb_column et_pb_column_4_4">
            <h2 class="section_title">Our Career Support</h2>
        </div>
    </div>
    <div class="offer-content">
        <div class="offer-text">
            <div class="section_description">
                <h3><strong>We Help YOu Suceed</strong></h3>
                <ul>
                    <li>Job Applications – Create strong, impactful applications</li>
                    <li>CV Development – Build a professional CV that stands out</li>
                    <li>Interview Preparation – Gain confidence and practice your skills</li>
                    <li>Access to Opportunities – Connect with useful resources and networks</li>
                    <li>Workplace Support – Understand Access to Work and reasonable adjustments</li>
                    <li>Workplaces – Get support advocating for Deaf-friendly environments</li>
                </ul>
                <h3><strong>Your Future Starts Here</strong></h3>
                <p>We’re here to break down barriers, build your confidence, and support you every step of the way toward meaningful employment.</p>
                <!-- <h3><strong>Everyone deserves the chance to succeed.</strong></h3>
                <p>LoveSign Hub, we recognise the challenges Deaf and Hard-of-hearing individuals face barriers in employment, communication, and career progression.
                Our Career Support Hub provides practical, personalised support to help you realise your professional and passion skills are your right path to achieving your desired opportunities.
                We are here to support you whether you are starting your career, changing direction or looking to grow professionally.</p>
                <h3><strong>Personalised Support for Your Career Journey</strong></h3>
                <p>provide tailored, one-to-one employment support designed specifically for Deaf people across the UK.
                Our team are Deaf and fluent in British Sign Language (BSL) bring lived experience and deep cultural understanding. This means you receive support that is not only accessible, but truly relevant and empowering.</p> -->
            </div>
            <div class="et_pb_button">
                <a href="registration-form.php?view=careerRegistration">Registration now</a>
            </div>
        </div>
        <div class="offer-video">
            <video class="hero-video" controls preload="metadata" poster="images/video-thumbnail.png">
                <source src="videos/terps_corner_category.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</section>

<?php
renderFooter();
?>