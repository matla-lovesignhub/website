<?php
include("weblib.php");
renderHeader('Access To work hub', 'We assist you in understanding, applying for and utilising Access to Work support.');
?>
<div class="main-header">
    <div class="main-header-content">
        <h1 class="main-header-title">Access To Work made simple for you</h1>

        <p class="main-header-description">
            We assist you in understanding, applying for and utilising Access to Work support.
        </p>
    </div>
</div>

<div class="et_pb_toggle_0 et_pb_toggle et_pb_toggle_close" id="translate-toggle">
    <!-- VIDEO -->
    <div class="translate-video">
        <div class="fitvidsignore">
            <video
                class="hero-video" autoplay muted controls preload="metadata" poster="images/hero-video-thumbnail.jpg">
                <source src="videos/access_to_work_hub.mp4" type="video/mp4">
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

        <p>Hello and welcome to our Access to Work Hub.
            Access to Work is a government fund that provides accessibility support to help you at work.
            Many people find the application process confusing, but we are here to make it clear and simple.
            We can help you understand the process, apply for the support you need, and provide interpreters for your request once it is approved.
            We also support employers so they can understand how Access to Work works.
            If you need help or are not sure where to start, please contact us and we will guide you.</p>
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
            <h2 class="section_title">Access To Work Support</h2>
        </div>
    </div>
    <div class="offer-content">
        <div class="offer-text">
            <p class="section_description">
                If you are unsure where to begin or feel overwhelmed by the process, we are here to guide you.
                Access to Work can provide important support but many people find the process confusing or difficult to manage.
                At LoveSign Hub, we simplify the process and guide you through it from start to finish and continue support you for your work.Whether you are applying for the first time, already have support in place or need help reviewing your situation, we are here to support you.
            </p>
            <div class="et_pb_button">
                <a href="registration-form.php?view=atw">Registration now</a>
            </div>
        </div>
        <div class="offer-video">
            <video class="hero-video" controls preload="metadata" poster="images/video-thumbnail.png">
                <source src="videos/atw.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</section>

<section class="et_pb_section et_pb_section_3">
    <div class="et_pb_row et_pb_row_4">
        <div class="et_pb_column et_pb_column_4_4">
            <h2 class="section_title">What We Offer</h2>
        </div>
    </div>

    <div class="et_pb_row et_pb_row_6 et_grid_row">
        <article class="et_pb_column offer_card">
            <div class="card_content">
                <h3 class="offer_title">How We Support You</h3>
                <p class="offer_description">We provide clear, step-by-step support.</p>
            </div>
        </article>
        <article class="et_pb_column offer_card">
            <div class="card_content">
                <h3 class="offer_title">Understanding the Process</h3>
                <p class="offer_description">We explain how Access to Work works in a simple and clear way.</p>
            </div>
        </article>
        <article class="et_pb_column offer_card">
            <div class="card_content">
                <h3 class="offer_title">Application Support</h3>
                <p class="offer_description">We guide you through the application so you know what to include and what to expect.</p>
            </div>
        </article>
        <article class="et_pb_column offer_card">
            <div class="card_content">
                <h3 class="offer_title">After Approval</h3>
                <p class="offer_description">We help you understand how to use your support properly and avoid common issues.</p>
            </div>
        </article>
        <article class="et_pb_column offer_card">
            <div class="card_content">
                <h3 class="offer_title">Ongoing Guidance</h3>
                <p class="offer_description">If your situation changes, we can help you review and adjust your support.</p>
            </div>
        </article>
    </div>
</section>

<?php
renderFooter(); ?>