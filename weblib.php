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
        <link rel="manifest" href="favicons/site.webmanifest" /> ';
    if ($title == 'BSL courses') {
        echo '<link rel="stylesheet" href="assets/bsl_courses_style.css">';
    } else {
        echo '<link rel="stylesheet" href="assets/style.css">';
    }
    echo '
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900,100italic,200italic,300italic,italic,500italic,600italic,700italic,800italic,900italic&#038;subset=latin,latin-ext&#038;display=swap" media="all"/>
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
     <body class="custom-background">
    <div id="page-container">
        <div id="et-boc" class="et-boc">

            <header class="et-l et-l--header">
                <div class="et_builder_inner_content">
                    <div class="et_pb_section_0_tb_header et_pb_section et_section_regular et_flex_section preset--module--divi-section--default">
                        <div class="et_pb_row_0_tb_header et_pb_row et_flex_row lsh-top-header-row preset--module--divi-row--default">
                            <div class="et_pb_column_0_tb_header et_pb_column et_flex_column et_pb_css_mix_blend_mode_passthrough et_flex_column_12_24 et_flex_column_6_24_tablet et_flex_column_24_24_phone lsh-top-logo-col preset--module--divi-column--default">
                                <div class="et_pb_image_0_tb_header et_pb_image et_pb_module et_flex_module">
                                    <a href="https://lovesignhub.co.uk/">
                                        <span class="et_pb_image_wrap">
                                            <img alt="LoveSign Hub Website" fetchpriority="high" loading="lazy" decoding="async" src="images/LoveSign-Hub-Website.svg" title="LoveSign Hub Website" width="688" height="642" srcset="images/LoveSign-Hub-Website.svg 688w" sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 688px, 100vw" class="wp-image-81"/>
                                        </span>
                                    </a>
                                </div>
                            </div>

                            <div class="et_pb_column_1_tb_header et_pb_column et-last-child et_flex_column et_pb_css_mix_blend_mode_passthrough et_flex_column_12_24 et_flex_column_6_24_tablet et_flex_column_24_24_phone lsh-top-contact-col preset--module--divi-column--default">
                                <div class="et_pb_module et_pb_button_module_wrapper et_pb_button_0_tb_header_wrapper">
                                    <a class="et_pb_button_0_tb_header et_pb_button et_pb_bg_layout_light et_pb_module et_flex_module lsh-contact-button" href="https://lovesignhub.co.uk/contact-us/">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
        <div class="et_pb_section_1_tb_header et_pb_section et_section_regular et_flex_section preset--module--divi-section--default">
                        <div class="et_pb_row_1_tb_header et_pb_row et_flex_row lsh-main-menu-row preset--module--divi-row--default">
                            <div class="et_pb_column_2_tb_header et_pb_column et-last-child et_flex_column et_pb_css_mix_blend_mode_passthrough et_flex_column_24_24 et_flex_column_24_24_tablet et_flex_column_24_24_phone lsh-main-menu-col preset--module--divi-column--default">
                                <div class="et_pb_menu_0_tb_header et_pb_menu et_pb_menu--without-logo et_pb_menu--style-left_aligned et_dropdown_animation_fade et_pb_bg_layout_light et_pb_text_align_right-tablet et_pb_text_align_right-phone et_pb_module et_flex_module lsh-main-menu">
                                    <div class="et_pb_menu_inner_container et_flex_module">
                                        <div class="et_pb_menu__wrap">
                                            <div class="et_pb_menu__menu">
                                                <nav class="et-menu-nav">
                                                    <ul id="menu-primary" class="et-menu nav downwards">
                                                        <li class="et_pb_menu_page_id-home menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-17 current_page_item menu-item-57">
                                                            <a href="https://lovesignhub.co.uk/" aria-current="page">Home</a>
                                                        </li>
                                                        <li class="et_pb_menu_page_id-48 menu-item menu-item-type-post_type menu-item-object-page menu-item-58">
                                                            <a href="/bsl-courses.php">BSL Courses</a>
                                                        </li>
                                                        <li class="et_pb_menu_page_id-53 menu-item menu-item-type-post_type menu-item-object-page menu-item-59">
                                                            <a href="https://lovesignhub.co.uk/deaf-awareness/">Deaf Awareness</a>
                                                        </li>
                                                        <li class="et_pb_menu_page_id-279 menu-item menu-item-type-post_type menu-item-object-page menu-item-287">
                                                            <a href="https://lovesignhub.co.uk/career-support-hub/">Career Support Hub</a>
                                                        </li>
                                                        <li class="et_pb_menu_page_id-288 menu-item menu-item-type-post_type menu-item-object-page menu-item-290">
                                                            <a href="https://lovesignhub.co.uk/atw-hub/">ATW Hub</a>
                                                        </li>
                                                        <li class="et_pb_menu_page_id-282 menu-item menu-item-type-post_type menu-item-object-page menu-item-325">
                                                            <a href="https://lovesignhub.co.uk/interpreting-services/">Interpreting Services</a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                            <div class="et_mobile_nav_menu">
                                                <div class="mobile_nav closed">
                                                    <span class="mobile_menu_bar"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
}
function renderFooter()
{
?>
    <footer class="et-l et-l--footer">
        <div class="et_builder_inner_content">
            <div class="et_pb_section_0_tb_footer et_pb_section et_section_regular et_block_section preset--module--divi-section--default">
                <div class="et_pb_row_0_tb_footer et_pb_row et_flex_row preset--module--divi-row--default">
                    <div class="et_pb_column_0_tb_footer et_pb_column et_block_column et_pb_css_mix_blend_mode_passthrough et_flex_column_8_24 et_flex_column_8_24_tablet et_flex_column_24_24_phone preset--module--divi-column--default">
                        <div class="et_pb_image_0_tb_footer et_pb_image et_pb_module et_flex_module">
                            <a href="https://lovesignhub.co.uk/">
                                <span class="et_pb_image_wrap">
                                    <img alt="LoveSign Hub Website" loading="lazy" decoding="async" src="images/LoveSign-Hub-Website.svg" title="LoveSign Hub Website" width="688" height="642" srcset="images/LoveSign-Hub-Website.svg 688w" sizes="(min-width: 0px) and (max-width: 480px) 480px, (min-width: 481px) 688px, 100vw" class="wp-image-81" />
                                </span>
                            </a>
                        </div>

                        <div class="et_pb_text_0_tb_footer et_pb_text et_pb_bg_layout_light et_pb_module et_flex_module preset--module--divi-text--default">
                            <div class="et_pb_text_inner">
                                <p>Deaf-led. Visual. Human.</p>
                            </div>
                        </div>
                    </div>

                    <div class="et_pb_column_1_tb_footer et_pb_column et_block_column et_pb_css_mix_blend_mode_passthrough et_flex_column_8_24 et_flex_column_8_24_tablet et_flex_column_24_24_phone preset--module--divi-column--default">
                        <div class="et_pb_text_1_tb_footer et_pb_text et_pb_bg_layout_light et_pb_module et_flex_module preset--module--divi-text--default">
                            <div class="et_pb_text_inner">
                                <p>EXPLORE</p>
                            </div>
                        </div>

                        <div class="et_pb_text_2_tb_footer et_pb_text et_pb_bg_layout_light et_clickable et_pb_module et_flex_module preset--module--divi-text--default">
                            <div class="et_pb_text_inner">
                                <p>BSL Courses</p>
                            </div>
                        </div>

                        <div class="et_pb_text_3_tb_footer et_pb_text et_pb_bg_layout_light et_clickable et_pb_module et_flex_module preset--module--divi-text--default">
                            <div class="et_pb_text_inner">
                                <p>Deaf Awareness</p>
                            </div>
                        </div>

                        <div class="et_pb_text_4_tb_footer et_pb_text et_pb_bg_layout_light et_clickable et_pb_module et_flex_module preset--module--divi-text--default">
                            <div class="et_pb_text_inner">
                                <p>Career Support Hub</p>
                            </div>
                        </div>

                        <div class="et_pb_text_5_tb_footer et_pb_text et_pb_bg_layout_light et_clickable et_pb_module et_flex_module preset--module--divi-text--default">
                            <div class="et_pb_text_inner">
                                <p>ATW Hub</p>
                            </div>
                        </div>

                        <div class="et_pb_text_6_tb_footer et_pb_text et_pb_bg_layout_light et_clickable et_pb_module et_flex_module preset--module--divi-text--default">
                            <div class="et_pb_text_inner">
                                <p>Interpreting Services</p>
                            </div>
                        </div>
                    </div>

                    <div class="et_pb_column_2_tb_footer et_pb_column et_block_column et_pb_css_mix_blend_mode_passthrough et_flex_column_8_24 et_flex_column_8_24_tablet et_flex_column_24_24_phone preset--module--divi-column--default">
                        <div class="et_pb_text_7_tb_footer et_pb_text et_pb_bg_layout_light et_pb_module et_flex_module preset--module--divi-text--default">
                            <div class="et_pb_text_inner">
                                <p>CONNECT</p>
                            </div>
                        </div>

                        <div class="et_pb_text_8_tb_footer et_pb_text et_pb_bg_layout_light et_clickable et_pb_module et_flex_module preset--module--divi-text--default">
                            <div class="et_pb_text_inner">
                                <p>Meet the Team</p>
                            </div>
                        </div>

                        <div class="et_pb_text_9_tb_footer et_pb_text et_pb_bg_layout_light et_clickable et_pb_module et_flex_module preset--module--divi-text--default">
                            <div class="et_pb_text_inner">
                                <p>Work with Us</p>
                            </div>
                        </div>

                        <div class="et_pb_text_10_tb_footer et_pb_text et_pb_bg_layout_light et_clickable et_pb_module et_flex_module preset--module--divi-text--default">
                            <div class="et_pb_text_inner">
                                <p>
                                    <span>Interpreter Registration</span>
                                </p>
                            </div>
                        </div>

                        <div class="et_pb_text_11_tb_footer et_pb_text et_pb_bg_layout_light et_clickable et_pb_module et_flex_module preset--module--divi-text--default">
                            <div class="et_pb_text_inner" data-et-mv-hidden-tablet="true" data-et-mv-hidden-phone="true">
                                <p>Contact Us</p>
                            </div>
                        </div>
                    </div>

                    <div class="et_pb_column_3_tb_footer et_pb_column et-last-child et_block_column et_pb_css_mix_blend_mode_passthrough et_flex_column_8_24 et_flex_column_8_24_tablet et_flex_column_24_24_phone preset--module--divi-column--default">
                        <div class="et_pb_text_12_tb_footer et_pb_text et_pb_bg_layout_light et_pb_module et_flex_module preset--module--divi-text--default">
                            <div class="et_pb_text_inner">
                                <p>INFORMATION</p>
                            </div>
                        </div>

                        <div class="et_pb_text_13_tb_footer et_pb_text et_pb_bg_layout_light et_clickable et_pb_module et_flex_module preset--module--divi-text--default">
                            <div class="et_pb_text_inner">
                                <p>Terms &amp; Conditions</p>
                            </div>
                        </div>

                        <div class="et_pb_text_14_tb_footer et_pb_text et_pb_bg_layout_light et_clickable et_pb_module et_flex_module preset--module--divi-text--default">
                            <div class="et_pb_text_inner">
                                <p>Cookie Policy</p>
                            </div>
                        </div>

                        <div class="et_pb_text_15_tb_footer et_pb_text et_pb_bg_layout_light et_clickable et_pb_module et_flex_module preset--module--divi-text--default">
                            <div class="et_pb_text_inner">
                                <p>Accessibility Statement</p>
                            </div>
                        </div>

                        <div class="et_pb_text_16_tb_footer et_pb_text et_pb_bg_layout_light et_clickable et_pb_module et_flex_module preset--module--divi-text--default">
                            <div class="et_pb_text_inner">
                                <p>Privacy Policy</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="et_pb_row_1_tb_footer et_pb_row et_flex_row preset--module--divi-row--default">
                    <div class="et_pb_column_4_tb_footer et_pb_column et-last-child et_flex_column et_pb_css_mix_blend_mode_passthrough et_flex_column_24_24 et_flex_column_24_24_tablet et_flex_column_24_24_phone preset--module--divi-column--default">
                        <ul class="et_pb_social_media_follow_0_tb_footer et_pb_social_media_follow et_pb_bg_layout_light et_pb_module et_flex_module">
                            <li class="et_pb_social_media_follow_network_0_tb_footer et_pb_social_media_follow_network et_pb_social_icon et_pb_social_network_link et-social-facebook et_pb_module et_flex_module">
                                <a href="https://www.facebook.com/LoveSignHub" class="icon" target="_self" title="Follow on Facebook" rel="noopener">
                                    <span class="et_pb_social_media_follow_network_name">Follow</span>
                                </a>
                            </li>

                            <li class="et_pb_social_media_follow_network_1_tb_footer et_pb_social_media_follow_network et_pb_social_icon et_pb_social_network_link et-social-instagram et_pb_module et_flex_module">
                                <a href="https://www.instagram.com/lovesignhub/?hl=en" class="icon" target="_self" title="Follow on Instagram" rel="noopener">
                                    <span class="et_pb_social_media_follow_network_name">Follow</span>
                                </a>
                            </li>

                            <li class="et_pb_social_media_follow_network_2_tb_footer et_pb_social_media_follow_network et_pb_social_icon et_pb_social_network_link et-pb-social-fa-icon et-social-tiktok et_pb_module et_flex_module">
                                <a href="https://www.tiktok.com/@lovesignhub" class="icon" target="_self" title="Follow on TikTok" rel="noopener">
                                    <span class="et_pb_social_media_follow_network_name">Follow</span>
                                </a>
                            </li>

                            <li class="et_pb_social_media_follow_network_3_tb_footer et_pb_social_media_follow_network et_pb_social_icon et_pb_social_network_link et-social-youtube et_pb_module et_flex_module">
                                <a href="https://www.youtube.com/@LoveSignHub" class="icon" target="_self" title="Follow on Youtube" rel="noopener">
                                    <span class="et_pb_social_media_follow_network_name">Follow</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="et_pb_row_2_tb_footer et_pb_row et_flex_row preset--module--divi-row--default">
                    <div class="et_pb_column_5_tb_footer et_pb_column et-last-child et_block_column et_pb_css_mix_blend_mode_passthrough et_flex_column_24_24 et_flex_column_24_24_tablet et_flex_column_24_24_phone preset--module--divi-column--default">
                        <div class="et_pb_divider_0_tb_footer et_pb_divider et_pb_space et_pb_divider_position_top et_pb_module">
                            <div class="et_pb_divider_internal"></div>
                        </div>
                    </div>
                </div>

                <div class="et_pb_row_3_tb_footer et_pb_row et_flex_row preset--module--divi-row--default">
                    <div class="et_pb_column_6_tb_footer et_pb_column et-last-child et_block_column et_pb_css_mix_blend_mode_passthrough et_flex_column_24_24 et_flex_column_24_24_tablet et_flex_column_24_24_phone preset--module--divi-column--default">
                        <div class="et_pb_text_17_tb_footer et_pb_text et_pb_bg_layout_light et_pb_module et_flex_module preset--module--divi-text--default">
                            <div class="et_pb_text_inner">
                                <p>
                                    <!-- FooterForge Credit: eg8q2uds -->
                                    <br />
                                    <span id="ff-eg8q2uds"></span>
                                    <br />
                                    <script>
                                        (function() {
                                            var el = document.getElementById('ff-eg8q2uds');
                                            if (el)
                                                el.textContent = `[copyright] [year] LoveSign Hub. All rights reserved.`.replace(/\[year\]/g, new Date().getFullYear()).replace(/\[copyright\]/g, '©');
                                        })();
                                    </script>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
