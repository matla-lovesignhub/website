<?php

include("weblib.php");

renderHeader(
    "Courses",
    "Explore our range of British Sign Language courses, designed to suit all levels of learners. Whether you're a beginner looking to get started or an advanced learner aiming to enhance your skills, we have the perfect course for you."
);

$allowedViews = [
    'taster',
    'certified',
    'bsl_sessions',
    'intensive'
];

$view = $_GET['view'] ?? '';

if (!in_array($view, $allowedViews, true)) {
    $view = 'not_found';
}

$notFoundHtml = '
<div class="error-message">
    <p>Category not found.</p>
    <a class="et_pb_button" href="https://lovesignhub.co.uk/bsl-courses/">
        Explore Courses
    </a>
</div>';

$viewArray = [];

switch ($view) {

    case 'taster':

        $viewArray = [
            "title" => "BSL Taster Courses",

            "description" => "Our BSL Taster Courses are designed to provide a brief introduction to British Sign Language. These courses are perfect for those who are new to BSL and want to get a feel for the language before committing to a full course.",

            "info" => '
                <p>
                    Our BSL Taster Courses are short, focused British Sign Language courses designed to help you build real confidence in a manageable amount of time.
                </p>

                <p>
                    These courses are ideal if you would like to begin learning BSL, continue developing your skills, explore a higher level before committing to longer study, or fit structured learning around a busy schedule.
                </p>

                <p>
                    Each taster course runs for 4 weeks and gives you the opportunity to learn in an interactive, supportive environment with clear guidance from experienced tutors.
                </p>

                <p>We offer BSL Taster Courses across the following levels:</p>

                <ul>
                    <li>BSL Taster Level 1</li>
                    <li>BSL Taster Level 2</li>
                    <li>BSL Taster Level 3</li>
                    <li>BSL Taster Level 4</li>
                    <li>BSL Taster Level 6</li>
                </ul>

                <p>
                    These courses are not just a preview — they are valuable learning opportunities in their own right.
                    You will develop practical signing skills, improve your understanding of BSL structure and communication,
                    and build confidence using BSL in real situations.
                </p>

                <p>Our BSL Taster Courses are ideal if you would like to:</p>

                <ul>
                    <li>Start learning BSL in a friendly and accessible way</li>
                    <li>Refresh or strengthen your current signing skills</li>
                    <li>Explore whether a particular level is right for you</li>
                    <li>Learn useful BSL without committing to a longer course</li>
                    <li>Build confidence before progressing further</li>
                    <li>Experience interactive teaching and guided practice</li>
                </ul>

                <p>
                    Whether you are learning for personal interest, work, family, community involvement,
                    or future progression, our taster courses give you a structured and meaningful way
                    to develop your BSL skills.
                </p>

                <p>
                    Please contact us for more information, availability, and pricing.
                    We would be happy to help you choose the right taster course for your current level
                    and learning goals.
                </p>
            ',

            "courses" => [

                [
                    "title" => "BSL Taster Level 1",
                    "description" => "An introduction to British Sign Language, covering basic signs and communication skills.",
                    "date" => "Starts 1st September 2026",
                    "deadline_date" => "15th June 2026",
                    "days" => [
                        "Monday 6-7pm",
                        "Wednesday 6-7pm"
                    ],
                    "pdf" => "bsl-taster-level-1.pdf",
                    "pay_link" => "/website/payment.php?course=bsl-taster-level-1"
                ],

                [
                    "title" => "BSL Taster Level 2",
                    "description" => "Build on your basic BSL skills with more signs and practical communication exercises.",
                    "date" => "Starts 1st September 2026",
                    "deadline_date" => "15th June 2026",
                    "days" => [
                        "Tuesday 6-7pm",
                        "Thursday 6-7pm"
                    ],
                    "pdf" => "bsl-taster-level-2.pdf",
                    "pay_link" => "/website/payment.php?course=bsl-taster-level-2",
                    "card_colors" => "#37A2F6"
                ],

                [
                    "title" => "BSL Taster Level 3",
                    "description" => "Expand your BSL vocabulary and improve your fluency with intermediate level content.",
                    "date" => "Starts 1st September 2026",
                    "deadline_date" => "15th June 2026",
                    "days" => [
                        "Monday 6-7pm",
                        "Wednesday 6-7pm"
                    ],
                    "pdf" => "bsl-taster-level-3.pdf",
                    "pay_link" => "/website/payment.php?course=bsl-taster-level-3"
                ],

                [
                    "title" => "BSL Taster Level 4",
                    "description" => "Enhance your BSL skills with more complex signs and real-life communication scenarios.",
                    "date" => "Starts 1st September 2026",
                    "deadline_date" => "15th June 2026",
                    "days" => [
                        "Tuesday 6-7pm",
                        "Thursday 6-7pm"
                    ],
                    "pdf" => "bsl-taster-level-4.pdf",
                    "pay_link" => "/website/payment.php?course=bsl-taster-level-4",
                    "card_colors" => "#37A2F6"
                ],

                [
                    "title" => "BSL Taster Level 6",
                    "description" => "Challenge yourself with advanced BSL content, including nuanced communication and cultural insights.",
                    "date" => "Starts 1st September 2026",
                    "deadline_date" => "15th June 2026",
                    "days" => [
                        "Monday 6-7pm",
                        "Wednesday 6-7pm"
                    ],
                    "pdf" => "bsl-taster-level-6.pdf",
                    "pay_link" => "/website/payment.php?course=bsl-taster-level-6"
                ]
            ]
        ];

        break;

    case 'certified':
        $viewArray = [
            "title" => "BSL Certified Courses",

            "description" => "Our BSL Certified Courses are designed to provide a structured introduction to British Sign Language. These courses are perfect for those who want to develop their BSL skills and gain a recognised qualification.",

            "info" => '
                <p>Our Certified BSL Courses are structured British Sign Language courses designed to help you develop real confidence, practical communication skills, and recognised progression through each level of BSL learning.
These courses are ideal if you would like to begin learning BSL, continue developing your signing skills, gain a recognised qualification, or work towards higher-level study and professional progression.
Each certified course gives you the opportunity to learn in an interactive, supportive environment with clear guidance from experienced tutors, while building the skills needed for your course level and assessments.
We offer BSL Certified Courses across the following levels:</p>
<ul>
<li>BSL Level 1 Certified Course</li>
<li>BSL Level 2 Certified Course</li>
<li>BSL Level 3 Certified Course</li>
<li>BSL Level 4 Certified Course</li>
<li>BSL Level 6 Certified Course</li>
</ul>
<p>These courses are designed to support meaningful progress at every stage of your BSL journey. You will develop practical signing skills, improve your understanding of BSL structure and communication, and build confidence using BSL in real situations.
Our BSL Certified Courses are ideal if you would like to:</p>
<ul>
<li>Start learning BSL in a structured and supportive way</li>
<li>Develop stronger signing, receptive, and conversational skills</li>
<li>Work towards a recognised BSL qualification</li>
<li>Improve your confidence communicating with Deaf people</li>
<li>Progress through the BSL levels step by step</li>
<li>Prepare for assessments with tutor guidance and interactive practice</li>   
<li>Build skills for personal, work, family, community, or professional use</li>
</ul>
<p>
Whether you are learning for personal interest, work, family, community involvement, career development, or future progression, our certified courses give you a clear and structured pathway to develop your BSL skills.
Please contact us for more information, availability, course duration, session length, and pricing. We would be happy to help you choose the right certified course for your current level and learning goals.</p>
            ',

            "courses" => [

                [
                    "title" => "BSL Level 1",
                    "description" => "Build basic BSL vocabulary, confidence, and everyday communication.",
                    "date" => "Starts 1st September 2026",
                    "deadline_date" => "15th June 2026",
                    "days" => [
                        "Monday 6-7pm",
                        "Wednesday 6-7pm"
                    ],
                    "pdf" => "bsl-certified-level-1.pdf",
                    "pay_link" => "/website/payment.php?course=bsl-certified-level-1"
                ],
                [
                    "title" => "BSL Level 2",
                    "description" => "Expand BSL vocabulary, structure, and conversational confidence.",
                    "date" => "Starts 1st September 2026",
                    "deadline_date" => "15th June 2026",
                    "days" => [
                        "Tuesday 6-7pm",
                        "Thursday 6-7pm"
                    ],
                    "pdf" => "bsl-certified-level-2.pdf",
                    "pay_link" => "/website/payment.php?course=bsl-certified-level-2",
                    "card_colors" => "#37A2F6"
                ],
                [
                    "title" => "BSL Level 3",
                    "description" => "Improve BSL fluency, grammar, and expressive signing.",
                    "date" => "Starts 1st September 2026",
                    "deadline_date" => "15th June 2026",
                    "days" => [
                        "Tuesday 6-7pm",
                        "Thursday 6-7pm"
                    ],
                    "pdf" => "bsl-certified-level-3.pdf",
                    "pay_link" => "/website/payment.php?course=bsl-certified-level-3",
                ],
                [
                    "title" => "BSL Level 4",
                    "description" => "Strengthen advanced signing, fluency, and confident discussion skills.",
                    "date" => "Starts 1st September 2026",
                    "deadline_date" => "15th June 2026",
                    "days" => [
                        "Tuesday 6-7pm",
                        "Thursday 6-7pm"
                    ],
                    "pdf" => "bsl-certified-level-4.pdf",
                    "pay_link" => "/website/payment.php?course=bsl-certified-level-4",
                    "card_colors" => "#37A2F6"
                ],
                [
                    "title" => "BSL Level 6",
                    "description" => "Develop professional-level signing, fluency, and expressive confidence.",
                    "date" => "Starts 1st September 2026",
                    "deadline_date" => "15th June 2026",
                    "days" => [
                        "Tuesday 6-7pm",
                        "Thursday 6-7pm"
                    ],
                    "pdf" => "bsl-certified-level-6.pdf",
                    "pay_link" => "/website/payment.php?course=bsl-certified-level-6",
                ],
            ]
        ];
        break;

    case 'bsl_sessions':
        $viewArray = [
            "title" => "BSL one-to-one sessions",

            "description" => "Our BSL one-to-one sessions are designed to provide personalised tuition in British Sign Language. These sessions are perfect for those who want to develop their BSL skills and gain a recognised qualification.",

            "info" => '
                <p>We offer 1:1 personalised British Sign Language (BSL) sessions for learners at any level who would like dedicated support, full attention from a tutor, and tailored feedback to help them progress with confidence.
These sessions are ideal if you would like to:</p>
<ul>
    <li>Improve and refine your signing skills
    <li>Build confidence in using BSL
    <li>Focus on specific areas where you need extra support
    <li>Learn at your own pace with a personalised approach
    <li>Prepare for assessments or exams with targeted guidance
</ul>
<p>Our 1:1 support can also be especially helpful for learners who have previously not passed a BSL exam. We can help you strengthen your signing ability, identify areas for improvement, and guide you through effective preparation strategies to approach your exam with greater confidence and success.
Whether you are just starting your BSL journey or looking to advance your skills at higher levels, our personalised sessions are designed to support your individual learning goals.
Please contact us for more information, availability, and pricing. We would be happy to discuss your learning needs and help you find the right support.</p>
            ',

            "courses" => [

                [
                    "title" => "BSL level 1",
                    "description" => "Build basic BSL vocabulary, confidence, and everyday communication.",
                    "date" => "Starts 1st September 2026",
                    "deadline_date" => "15th June 2026",
                    "days" => [
                        "Monday 6-7pm",
                        "Wednesday 6-7pm"
                    ],
                    "pdf" => "bsl-certified-level-1.pdf",
                    "pay_link" => "/website/payment.php?course=bsl-certified-level-1"
                ],
                [
                    "title" => "BSL Level 2",
                    "description" => "Expand BSL vocabulary, structure, and conversational confidence.",
                    "date" => "Starts 1st September 2026",
                    "deadline_date" => "15th June 2026",
                    "days" => [
                        "Tuesday 6-7pm",
                        "Thursday 6-7pm"
                    ],
                    "pdf" => "bsl-certified-level-2.pdf",
                    "pay_link" => "/website/payment.php?course=bsl-certified-level-2",
                    "card_colors" => "#37A2F6"
                ],
                [
                    "title" => "BSL Level 3",
                    "description" => "Improve BSL fluency, grammar, and expressive signing.",
                    "date" => "Starts 1st September 2026",
                    "deadline_date" => "15th June 2026",
                    "days" => [
                        "Tuesday 6-7pm",
                        "Thursday 6-7pm"
                    ],
                    "pdf" => "bsl-certified-level-3.pdf",
                    "pay_link" => "/website/payment.php?course=bsl-certified-level-3",
                ],
                [
                    "title" => "BSL Level 4",
                    "description" => "Strengthen advanced signing, fluency, and confident discussion skills.",
                    "date" => "Starts 1st September 2026",
                    "deadline_date" => "15th June 2026",
                    "days" => [
                        "Tuesday 6-7pm",
                        "Thursday 6-7pm"
                    ],
                    "pdf" => "bsl-certified-level-4.pdf",
                    "pay_link" => "/website/payment.php?course=bsl-certified-level-4",
                    "card_colors" => "#37A2F6"
                ],
                [
                    "title" => "BSL Level 6",
                    "description" => "Develop professional-level signing, fluency, and expressive confidence.",
                    "date" => "Starts 1st September 2026",
                    "deadline_date" => "15th June 2026",
                    "days" => [
                        "Tuesday 6-7pm",
                        "Thursday 6-7pm"
                    ],
                    "pdf" => "bsl-certified-level-6.pdf",
                    "pay_link" => "/website/payment.php?course=bsl-certified-level-6",
                ],
            ]
        ];
        break;

    case 'intensive':
      $viewArray = [
            "title" => "Intensive British Sign Language (BSL) Levels 3–6 Pathway",

            "description" => "Our BSL one-to-one sessions are designed to provide personalised tuition in British Sign Language. These sessions are perfect for those who want to develop their BSL skills and gain a recognised qualification.",

            "info" => '
                <p>The Intensive BSL Levels 3–6 Pathway is an accelerated training programme designed for learners who are committed to developing professional-level British Sign Language skills within an intensive six-month study period.
This pathway is ideal for:</p>
<ul>
<li>Current Communication Support Workers (CSWs)</li>
<li>Individuals preparing to work as CSWs</li>
<li>Learners actively involved within the Deaf community</li>
<li>Those seeking rapid progression towards advanced BSL fluency and professional communication skills</li>
</ul>
<p><strong>The programme provides immersive, high-intensity learning focused on:</strong></p>
<ul>
<li>Receptive and productive language skills</li>
<li>Advanced grammar and linguistic understanding</li>
<li>Professional communication techniques</li>
<li>Fluency and natural expression</li>
<li>Deaf cultural awareness and community engagement</li>
</ul>',

            "courses" => [

                [
                    "title" => "Intensive Course Level 3",
                    "description" => "The Intensive Level 3 course develops intermediate fluency and strengthens conversational skills, grammatical understanding, and confidence using BSL in everyday, social, and workplace settings.",
                    "date" => "Starts 1st September 2026",
                    "deadline_date" => "15th June 2026",
                    "days" => [
                        "Monday 6-7pm",
                        "Wednesday 6-7pm"
                    ],
                    "pdf" => "bsl-certified-level-3.pdf",
                    "pay_link" => "/website/payment.php?course=bsl-certified-level-3"
                ],
                [
                    "title" => "Intensive Course Level 4",
                    "description" => "The Intensive Level 4 course is designed for learners who wish to communicate confidently and professionally with Deaf people in both social and workplace environments.",
                    "date" => "Starts 1st September 2026",
                    "deadline_date" => "15th June 2026",
                    "days" => [
                        "Tuesday 6-7pm",
                        "Thursday 6-7pm"
                    ],
                    "pdf" => "bsl-certified-level-4.pdf",
                    "pay_link" => "/website/payment.php?course=bsl-certified-level-4",
                    "card_colors" => "#37A2F6"
                ],
                [
                    "title" => "Intensive Course Level 6",
                    "description" => "The Intensive Level 6 course develops advanced professional fluency in British Sign Language and prepares learners for careers in interpreting, translation, communication support, and specialist Deaf services.",
                    "date" => "Starts 1st September 2026",
                    "deadline_date" => "15th June 2026",
                    "days" => [
                        "Tuesday 6-7pm",
                        "Thursday 6-7pm"
                    ],
                    "pdf" => "bsl-certified-level-6.pdf",
                    "pay_link" => "/website/payment.php?course=bsl-certified-level-6",
                ]
            ]
        ];        break;

    case 'not_found':
    default:
        echo $notFoundHtml;
        break;
}

if (!empty($viewArray) && is_array($viewArray)) {

    $title = htmlspecialchars($viewArray['title'] ?? '');
    $description = htmlspecialchars($viewArray['description'] ?? '');

    echo '
    <div class="main-header">
        <div class="main-header-content">
            <h1 class="main-header-title">' . $title . '</h1>
            <p class="main-header-description">' . $description . '</p>
        </div>
    </div>

    <div class="main-info">
        <div class="main-info-content">

            <div class="main-info-text">
                ' . ($viewArray['info'] ?? '') . '
            </div>
        </div>
    </div>';


    if (!empty($viewArray['courses']) && is_array($viewArray['courses'])) {

        echo '<div class="course-listing">';

        foreach ($viewArray['courses'] as $course) {

            $courseTitle = htmlspecialchars($course['title'] ?? '');
            $courseDescription = htmlspecialchars($course['description'] ?? '');
            $courseDate = htmlspecialchars($course['date'] ?? '');
            $courseDeadlineDate = htmlspecialchars($course['deadline_date'] ?? '');
            $coursePdf = htmlspecialchars($course['pdf'] ?? '');
            $coursePayLink = htmlspecialchars($course['pay_link'] ?? '');
            $card_colors = htmlspecialchars($course['card_colors'] ?? 'var(--secondary-yellow)');

            $scheduleHtml = '';

            foreach (($course['days'] ?? []) as $schedule) {

                $scheduleHtml .= '
        <div class="schedule-item">
            <span class="schedule-text">
                ' . htmlspecialchars($schedule) . '
            </span>

            <a class="schedule-enrol-btn" href="' . $coursePayLink . '"> Enrol </a>
        </div>';
            }

            echo '
    <div class="course-item" style="--card-color:' . $card_colors . ';">

        <h3 class="course-title">' . $courseTitle . '</h3>

        <p class="course-description">
            ' . $courseDescription . '
        </p>

        <p class="course-date">
            📅 ' . $courseDate . '
        </p>
        <p class="course-deadline">
            🕒 Enroll by: ' . $courseDeadlineDate . '
        </p>
        <a class="course-pdf" href="assets/' . $coursePdf . '" target="_blank">
            View Course Details
        </a>

        <div class="course-schedule">
            ' . $scheduleHtml . '
        </div>

    </div>';
        }
        echo '</div>';
    }
}

renderFooter();
