<?php
include 'weblib.php';
renderHeader('BSL courses', 'Learn British Sign Language (BSL) with our comprehensive courses. Our BSL courses cover levels 1 to 6, providing you with the skills and knowledge to communicate effectively in sign language. Whether you are a beginner or looking to advance your BSL proficiency, our courses are designed to meet your needs. Join us at LoveSign Hub and start your journey to mastering British Sign Language today!');
$viewArray = [
    [
        'bage' => 'Beginner - Advanced',
        'title' => 'BSL Taster Courses',
        'description' => 'Our BSL Taster Courses are available from Level 1 to Level 6,
                    offering a focused and manageable way to build practical signing skills.',
        'duration' => '4 weeks',
        'local' => 'Video-led',
        'link' => 'taster'
    ],   
    [
        'bage' => 'Beginner - Advanced',
        'title' => 'BSL Certified Courses',
        'description' => 'Structured courses from Level 1 to Level 6,
                    designed to help you develop your BSL skills step by step.',
        'duration' => '30 - 50 weeks',
        'local' => 'Video-led',
        'link' => 'certified',
        'card-color' => '#37A2F6;'
    ],
    [
        'bage' => 'Beginner - Advanced',
        'title' => '1:1 BSL Learning Support',
        'description' => 'Personalised BSL sessions for learners at any level,
                    focused on your goals and confidence.',
        'duration' => '1 day',
        'local' => 'Video-led',
        'link' => 'bsl_sessions',
    ],  
    [
        'bage' => 'Intermediate - Advanced',
        'title' => 'Intensive Courses',
        'description' => 'Intensive certified courses for Levels 3, 4 and 6,
                    designed for learners who want to progress faster.',
        'duration' => '1 day',
        'local' => 'Video-led',
        'link' => 'intensive',
        'card-color' => '#37A2F6;',
        'comeing-soon' => true
    ]
]
?>

<div class="main-header">
    <div class="main-header-content">
        <h1 class="main-header-title">Learn British Sign Language (BSL) with confidence</h1>

        <p class="main-header-description">
            Your interactive gateway to British Sign Language (BSL) learning,
            career support and a strong inclusive community.
        </p>
    </div>
</div>

<div class="et_pb_toggle_0 et_pb_toggle et_pb_toggle_close" id="translate-toggle">
    <!-- VIDEO -->
    <div class="translate-video">
        <div class="fitvidsignore">
            <video
                class="hero-video" autoplay muted controls preload="metadata" poster="images/hero-video-thumbnail.jpg">
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

        <p>Hello and welcome to our BSL courses page.
            At LoveSign Hub, we offer BSL courses from Level 1 to Level 6.
            If you are new, you can start at Level 1 and learn the basics of communication.
            If you already have experience, please contact us so that you can continue building your skills and confidence at higher levels.
            Our BSL courses are designed to be practical and interactive. We focus on real communication, not just learning signs.
            We also provide training for businesses for those who have deaf employees under them, helping teams improve communication and accessibility.
            Whether you are learning for personal development, work, or career progression, we are here to support you.</p>
    </div>
    <div class="tootle-servce">
        <div class="toggle-wrapper-image">
            <img alt="Orange Hands" src="images/Orange-Hands-1.svg" />
        </div>
        <div class="et_pb_text_inner">
            <p>
                Whether you are starting from zero, building on your skills,
                or learning for work, our courses are designed to be practical,
                engaging and accessible.
            </p>

            <p>
                Learning BSL is more than just learning a language.
                It is about connection, understanding, and confidence in real communication.
            </p>

            <p>
                At LoveSign Hub, we provide structured BSL courses from Level 1 to Level 6.
                Our courses are designed to support both individuals and organisations,
                with a strong focus on real-life communication.
            </p>

            <p>
                We create a learning environment that is supportive,
                interactive and inclusive.
                You will not just learn signs, you will learn how to use them confidently
            </p>
        </div>
    </div>
</div>

<!-- COURSES SECTION-->
<section class="et_pb_section et_pb_section_1">
    <div class="et_pb_row et_pb_row_4">
        <div class="et_pb_column et_pb_column_4_4">

            <h2 class="section_title">We offer BSL Taster Courses and BSL Level 1 to 6 Courses.</h2>
            <p class="section_description">Contact us for more information about our courses.</p>

        </div>
    </div>

    <!-- COURSE GRID -->
    <div class="et_pb_row et_pb_row_5 et_grid_row">
        <?php
        foreach ($viewArray as $value) {
            $cardColor = htmlspecialchars($value['card-color'] ?? 'var(--secondary-yellow)');
            ?>
            <div class="et_pb_column">
            <div class="et_pb_text" style="--card-color: <?= $cardColor ?>">
                <p><?= htmlspecialchars($value['bage']) ?></p>
            </div>
            <div class="et_pb_text">
                <h2><?= htmlspecialchars($value['title']) ?></h2>
            </div>
            <div class="et_pb_description">
                <p><?= htmlspecialchars($value['description']) ?></p>
            </div>
            <div class="et_pb_group">
                <div class="et_pb_blurb">
                    <div class="et_pb_blurb_content">
                        <span class="et-pb-icon">⏱</span>
                        <h4><?= htmlspecialchars($value['duration'])?></h4>
                    </div>
                </div>
                <div class="et_pb_blurb">
                    <div class="et_pb_blurb_content">
                        <span class="et-pb-icon">▶</span>
                        <h4><?= htmlspecialchars($value['local'])?></h4>
                    </div>
                </div>
            </div>
            <?php
            if ($value['comeing-soon'] ?? false) {
                echo '<div class="coming-soon">
                <img src="images/coming-soon.png" alt="Coming Soon">
            </div>';
            }else {
                   echo '<a class="et_pb_link" style="--card-color:'. $cardColor . '" href="/website/courses-category.php?view=' . $value['link'] . '">Explore More</a>';
                  }
            echo'</div>';
        }
        ?>

        </section>
</div>
</div>
</div>
</article>
<?php renderFooter(); ?>

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