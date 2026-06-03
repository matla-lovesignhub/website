<?php
include("weblib.php");
renderHeader('Professional Interpreting Services Hub', 'Clear, reliable communication support for workplaces, events, and everyday situations.');
?>

<div class="main-header">
    <!-- <img src="images/hero-image-mash.png" alt="LoveSign Hub" class="main-header-image"> -->
    <div class="main-header-content">
        <h1 class="main-header-title">Professional Interpreting Services Hub</h1>
        <p class="main-header-description">
            Clear, reliable communication support for workplaces, events, and everyday situations.
        </p>
    </div>
</div>

<div class="et_pb_toggle_0 et_pb_toggle et_pb_toggle_close" id="translate-toggle">

    <div class="translate-video">
        <div class="fitvidsignore">
            <video
                class="hero-video" autoplay
                muted
                controls
                playsinline
                preload="metadata"
                poster="images/video-thumbnail.png">

                <source src="videos/interpreting_services.mp4" type="video/mp4">
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
        <p>We provide professional interpreting support for a range of situations, including workplaces, meetings, events, and appointments.
            We understand that every situation is different, so we match the right interpreter to your needs.
            We also support Access to Work and can help you understand how to arrange interpreting support.
            Our aim is to make communication clear, smooth, and accessible for everyone.
            If you need an interpreter, please contact us and tell us your requirements.</p>
    </div>

    <div class="tootle-servce">
        <div class="toggle-wrapper-image">
            <img alt="Orange Hands" src="images/Orange-Hands-1.svg" />
        </div>
    </div>
</div>

<section class="et_pb_section et_pb_section_2">
    <div class="et_pb_row et_pb_row_4">
        <div class="et_pb_column et_pb_column_4_4">
            <h2 class="section_title">Interpreting services</h2>
        </div>
    </div>
    <div class="offer-content">
        <div class="offer-text">
            <p class="section_description">
                Communication should never be a barrier.At LoveSign Hub, we provide professional interpreting services to support clear and effective communication between Deaf and Hearing people.
                We understand that every situation is different. That is why we match the right interpreter to your specific needs, ensuring the best possible communication experience.
                Whether you need support for a meeting, event, workplace setting, or specialist environment, we are here to assist you. </p>
            <div class="et_pb_button">
                <a href="contact_us">GET IN TOUCH</a>
            </div>
        </div>
        <div class="offer-video">
            <video class="hero-video" controls preload="metadata" poster="images/video-thumbnail.png">
                <source src="videos/interpreting_services.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</section>

<section class="et_pb_section et_pb_section_3">
    <div class="et_pb_row et_pb_row_4">
        <div class="et_pb_column et_pb_column_4_4">
            <h2 class="section_title">What We Offer</h2>
            <p class="section_description">
                Our interpreting services cover a wide range of situations:
            </p>
        </div>
    </div>

    <div class="et_pb_row et_pb_row_6 et_grid_row">
        <article class="et_pb_column offer_card">
            <div class="card_content">
                <h3 class="offer_title">Workplace Support</h3>
                <p class="offer_description">Meetings, training sessions, interviews, and day-to-day communication.</p>
            </div>
        </article>
        <article class="et_pb_column offer_card">
            <div class="card_content">
                <h3 class="offer_title">Events and Conferences</h3>
                <p class="offer_description">Professional interpreting for large and small events.</p>
            </div>
        </article>
        <article class="et_pb_column offer_card">
            <div class="card_content">
                <h3 class="offer_title">Appointments</h3>
                <p class="offer_description">Support for medical, legal, educational, and community settings.</p>
            </div>
        </article>
        <article class="et_pb_column offer_card">
            <div class="card_content">
                <h3 class="offer_title">Remote Interpreting</h3>
                <p class="offer_description">Online support via video platforms when in-person is not required.</p>
            </div>
        </article>
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