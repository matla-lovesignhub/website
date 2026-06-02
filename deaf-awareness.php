<?php
include("weblib.php");
renderHeader("Deaf Awareness", "Practical Deaf Awareness training that helps you or your team understand clearly as well as communicating and working inclusively.");

$viewArray = [
    [
        "title" => "In Healthcare",
        "description" => "How to communicate effectively in medical settings",
        "image" => "healthcare",
        "coming_soon" => true,
    ],
    [
        "title" => "In Education",
        "description" => "Creating inclusive learning environments",
        "image" => "education",
        "coming_soon" => true,
    ],
    [
        "title" => "In the Workplace",
        "description" => "Building accessible, Deaf-friendly organisations",
        "image" => "workplace",
        "coming_soon" => true,
    ],
    [
        "title" => "In Social Settings",
        "description" => "Everyday interactions with confidence",
        "image" => "social-settings",
        "coming_soon" => true,
    ],
];

echo '<div class="main-header">
    <div class="main-header-content">
        <h1 class="main-header-title">Build Understanding and Confidence. Improve Communication. Create inclusion.</h1>

        <p class="main-header-description">
Practical Deaf Awareness training that helps you or your team understand clearly as well as communicating and working inclusively.    </div>
</div>
<div class="et_pb_toggle_0 et_pb_toggle et_pb_toggle_close" id="translate-toggle">
    <!-- VIDEO -->
    <div class="translate-video">
        <div class="fitvidsignore">
            <video class="hero-video" autoplay muted controls preload="metadata" poster="images/video-thumbnail.png">
                <source src="videos/deaf_awareness.mp4" type="video/mp4">
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
<p>Hello and welcome to our Deaf Awareness page.
Many people and organisations want to be inclusive, but are not always confident in how to communicate with Deaf people.
Our Deaf Awareness training helps your team understand communication, avoid common mistakes and misconceptions, and feel more confident in real situations.
We focus on practical skills that can be used immediately in the workplace or everyday life.
We can tailor the training to your organisation, whether you work in customer service, education, healthcare, or other sectors, especially if you have Deaf employees within your organisation.
If you want to create a more inclusive workplace for your Deaf employees, please contact us.</p>
    </div>
    <div class="tootle-servce">
        <div class="toggle-wrapper-image">
            <img alt="Orange Hands" src="images/Orange-Hands-1.svg" />
        </div>
        <div class="et_pb_text_inner">
<p>We help individuals or organisations understand Deaf culture, identity and communication. WE then make simple changes that have a real impact because clear understanding and communication should be possible for everyone.
Many people and organisations want to be inclusive, but are not always sure how. Deaf Awareness training gives your team the knowledge, confidence and practical skills to communicate effectively with Deaf people. 
At LoveSign Hub, we deliver training that is real, engaging and directly relevant to your workplace. 
This is not just theory but real situations, real people and real improvement.</p>
        </div>
    </div>
</div>
<section class="et_pb_section et_pb_section_2">
    <h2 class="section_title">Why Deaf Awareness Matters</h2>
    <div class="offer-content">
        <div class="offer-text">
           <div class="section_description">
    <p>
        Without the right understanding, communication barriers can lead to:
    </p>

    <ul>
        <li>Misunderstandings</li>
        <li>Frustration for both staff and customers</li>
        <li>Reduced access to services</li>
        <li>Missed opportunities</li>
    </ul>

    <p>
        With the right training, your team will feel more confident, more prepared, and more inclusive in their approach.
    </p>
</div>
        </div>
        <div class="offer-video">
            <img src="images/deaf-awareness.jpg" alt="deaf awareness">
        </div>
    </div>
</section>

<section class="et_pb_section et_pb_section_3">
    <!-- Section Header -->
    <div class="et_pb_row et_pb_row_4">
        <div class="et_pb_column et_pb_column_4_4">
            <h2 class="section_title">Real Life Scenarios</h2>
            <p class="section_description">
               To exporing a real life experience.
            </p>
        </div>
    </div>

    <!-- Video Cards -->
    <div class="et_pb_row et_pb_row_6 et_grid_row">';
foreach ($viewArray as $value) {
    echo '
        <article class="et_pb_column offer_card">
            <div class="image-wrapper">
            <img src="images/' . $value['image'] . '.jpg" alt="' . $value['image'] . '">
            </div>
            <div class="card_content">
                <h3 class="offer_title">' . $value['description'] . '</h3>
                <p class="offer_description"> ' . $value['description'] . '</p>';
    if ($value['coming_soon']) {
        echo '<div class="card_comeing_soon">
                    <img src="images/coming-soon.png" alt="Coming Soon">
                    </div>';
    } else {
        echo '<a class="et_pb_link" href="/bsl-courses.php">Explore More</a>';
    }
    echo '</div>
        </article>';
}
echo '
        </div>
    </div>
</section>';
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