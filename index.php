<?php
$studentName = "Pia Katleya V. Macalanda";
$courseSubject = "Applications Development & Emerging Technologies";

// Function to generate the correct file path for viewing an activity
function getActivityViewFile($activityName)
{
    // Extract the number from "Activity#1" format
    $number = filter_var($activityName, FILTER_SANITIZE_NUMBER_INT);
    // Generate filename like "activity1.php"
    return $activityName . "/activity" . $number . ".php";
}

// Function to list directories and filter out special entries
function listDirectories($path)
{
    $directories = array();
    if (is_dir($path)) {
        if ($handle = opendir($path)) {
            while (($entry = readdir($handle)) !== false) {
                if ($entry != "." && $entry != ".." && is_dir($path . '/' . $entry) && strpos($entry, 'Activity') === 0) {
                    $directories[] = $entry;
                }
            }
            closedir($handle);
        }
    }
    return $directories;
}

// Activity details - Add descriptions for each activity
$activityDetails = [
    "Activity1" => "Introduction to the basics of Bootstrap including setup, containers, grid layout, and foundational text and table formatting.",
    "Activity2" => "Explored key Bootstrap UI components such as images, buttons, dropdowns, alerts, and badges to enhance interface design.",
    "Activity3" => "Worked with more complex Bootstrap elements like panels, collapses, accordions, tab navigation, and pagination systems.",
    "Activity4" => "Created responsive navigation bars and designed, styled, and validated forms using Bootstrap utilities.",
    "Activity5" => "ps.🍓I deleted the file T_T . Implemented interactive features including modals, carousels, tooltips, and popovers for dynamic user experience.",
    "Activity6" => "Applied Bootstrap’s scroll spy functionality to create active link tracking based on page scroll position.",
];

// Use activities directly from the array instead of directories
$activities = array_keys($activityDetails);

// Process form submission if any
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["activity_feedback"])) {
        // In a real app, we would save this to a database
        $message = "Thank you for your feedback on " . htmlspecialchars($_POST["activity_name"]) . "!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($studentName); ?> - <?php echo htmlspecialchars($courseSubject); ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --strawberry-red: #ff5a5f;
            --strawberry-light: #ffb3b3;
            --strawberry-dark: #d03e44;
            --strawberry-green: #7fb069;
            --strawberry-leaf: #5c8d48;
            --vintage-cream: #fff6e9;
            --vintage-brown: #7d5a50;
            --vintage-paper: #f5e8d0;
        }

        body {
            background-color: var(--vintage-cream);
            font-family: 'Poppins', sans-serif;
            color: var(--vintage-brown);
            position: relative;
            min-height: 100vh;
        }

        h1,
        h2,
        h3,
        .navbar-brand {
            font-family: 'Playfair Display', serif;
        }

        .navbar {
            background-color: var(--strawberry-red);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand,
        .nav-link {
            color: white !important;
            font-weight: 600;
        }

        .navbar-brand:hover,
        .nav-link:hover {
            color: var(--vintage-cream) !important;
        }

        .student-info {
            background-color: var(--strawberry-dark);
            color: white;
            padding: 8px 0;
            font-size: 0.9rem;
        }

        .header-image {
            height: 350px;
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="400" height="400" viewBox="0 0 400 400"><rect width="100%" height="100%" fill="%23ffb3b3"/><circle cx="50" cy="50" r="40" fill="%23ff5a5f"/><circle cx="150" cy="150" r="40" fill="%23ff5a5f"/><circle cx="250" cy="50" r="40" fill="%23ff5a5f"/><circle cx="350" cy="150" r="40" fill="%23ff5a5f"/><circle cx="50" cy="250" r="40" fill="%23ff5a5f"/><circle cx="150" cy="350" r="40" fill="%23ff5a5f"/><circle cx="250" cy="250" r="40" fill="%23ff5a5f"/><circle cx="350" cy="350" r="40" fill="%23ff5a5f"/></svg>');
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .header-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: white;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }

        .strawberry-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            margin-bottom: 30px;
            background-color: white;
            position: relative;
        }

        .strawberry-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .strawberry-card::before {
            content: "";
            position: absolute;
            top: -5px;
            left: 50%;
            transform: translateX(-50%);
            width: 80%;
            height: 10px;
            background-color: var(--strawberry-red);
            border-radius: 0 0 50% 50%;
        }

        .card-body {
            padding: 1.75rem;
        }

        .card-title {
            color: var(--strawberry-dark);
            font-weight: bold;
            margin-bottom: 0.75rem;
        }

        .activity-icon {
            font-size: 2.5rem;
            color: var(--strawberry-red);
            margin-bottom: 15px;
            transition: transform 0.3s ease;
        }

        .strawberry-card:hover .activity-icon {
            transform: scale(1.1) rotate(10deg);
        }

        .btn-strawberry {
            background-color: var(--strawberry-red);
            border-color: var(--strawberry-red);
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 30px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-strawberry:hover {
            background-color: var(--strawberry-dark);
            border-color: var(--strawberry-dark);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }

        .btn-outline-strawberry {
            border: 2px solid var(--strawberry-red);
            color: var(--strawberry-red);
            background-color: transparent;
            padding: 0.5rem 1.5rem;
            border-radius: 30px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-outline-strawberry:hover {
            background-color: var(--strawberry-red);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }

        .vintage-divider {
            height: 30px;
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%23ff5a5f" fill-opacity="0.5" d="M0,32L48,37.3C96,43,192,53,288,80C384,107,480,149,576,144C672,139,768,85,864,80C960,75,1056,117,1152,122.7C1248,128,1344,96,1392,80L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
            background-size: cover;
            background-repeat: no-repeat;
            margin: 20px 0;
        }

        footer {
            background-color: var(--vintage-brown);
            color: white;
            padding: 20px 0;
            width: 100%;
        }

        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 2rem;
        }

        .section-title::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50%;
            height: 3px;
            background-color: var(--strawberry-red);
        }

        .progress {
            height: 8px;
            margin-bottom: 10px;
        }

        .progress-bar {
            background-color: var(--strawberry-red);
        }

        .detail-box {
            background-color: var(--vintage-paper);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .detail-box:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
            transform: translateY(-3px);
        }

        .detail-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            color: var(--strawberry-dark);
        }

        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: var(--strawberry-red);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            opacity: 0;
            transition: opacity 0.3s ease;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        .back-to-top:hover {
            background-color: var(--strawberry-dark);
            color: white;
        }

        .back-to-top.visible {
            opacity: 1;
        }

        .toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1050;
        }

        .activity-details {
            margin-top: 10px;
            display: none;
        }

        .feedback-form {
            margin-top: 15px;
            display: none;
        }

        .floating-strawberry {
            position: absolute;
            font-size: 2rem;
            animation: float 15s infinite linear;
            opacity: 0.7;
            z-index: 0;
        }

        @keyframes float {
            0% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-50px) rotate(180deg);
            }

            100% {
                transform: translateY(0) rotate(360deg);
            }
        }

        .content-wrapper {
            position: relative;
            z-index: 1;
        }

        /* Add a subtle texture overlay */
        .texture-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 200 200"><rect width="100%" height="100%" fill="none"/><path d="M0 0L200 200M200 0L0 200" stroke="%23000" stroke-width="0.3" stroke-opacity="0.05"/></svg>');
            pointer-events: none;
            z-index: 9999;
        }

        .highlight {
            background-color: rgba(255, 90, 95, 0.1);
            padding: 2px 4px;
            border-radius: 3px;
        }
    </style>
</head>

<body>
    <!-- Texture Overlay -->
    <div class="texture-overlay"></div>

    <!-- Floating Strawberries -->
    <?php for ($i = 0; $i < 10; $i++): ?>
        <div class="floating-strawberry" style="top: <?php echo rand(5, 95); ?>vh; left: <?php echo rand(5, 95); ?>vw; animation-duration: <?php echo rand(10, 30); ?>s; animation-delay: <?php echo rand(0, 10); ?>s;">🍓</div>
    <?php endfor; ?>

    <!-- Student Info Bar -->
    <div class="student-info py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- <i class="fas fa-user me-2"></i> <?php echo htmlspecialchars($studentName); ?> -->
                </div>
                <div class="col-md-6 text-md-end">
                    <!-- <i class="fas fa-book me-2"></i> <?php echo htmlspecialchars($courseSubject); ?> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-strawberry me-2"></i> My Berry Best
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home"><i class="fas fa-home me-1"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#activities"><i class="fas fa-tasks me-1"></i> Activities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#progress"><i class="fas fa-chart-line me-1"></i> Progress</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact"><i class="fas fa-envelope me-1"></i> Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header Image -->
    <div class="header-image" id="home">
        <div class="header-overlay">
            <h1 class="display-4"><?php echo htmlspecialchars($studentName); ?>'s Portfolio</h1>
            <p class="lead"><?php echo htmlspecialchars($courseSubject); ?> - Journey Through Web Development</p>
            <a href="#activities" class="btn btn-strawberry mt-3">
                <i class="fas fa-arrow-down me-2"></i> Explore My Work
            </a>
        </div>
    </div>

    <div class="vintage-divider"></div>

    <!-- Toast Notification -->
    <?php if (!empty($message)): ?>
        <div class="toast-container">
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-success text-white">
                    <strong class="me-auto">Success</strong>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    <?php echo $message; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="content-wrapper">
        <!-- Main Content -->
        <div class="container py-5">
            <!-- Activities Section -->
            <section id="activities" class="mb-5">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h2 class="section-title">My Activities</h2>
                        <p class="lead">A journey through my web development learning path</p>
                    </div>
                </div>

                <div class="row">
                    <?php
                    // Display activities directly from $activityDetails
                    if (!empty($activityDetails)) {
                        $index = 0;
                        echo '<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">';
                        foreach ($activityDetails as $activity => $description) {
                            echo '<div class="col-lg-4 col-md-6">';
                            echo '<div class="strawberry-card h-100">';
                            echo '<div class="card-body text-center">';
                            echo '<div class="activity-icon"><i class="fas fa-code-branch"></i></div>';
                            echo '<h5 class="card-title">' . htmlspecialchars($activity) . '</h5>';

                            echo '<p class="card-text mt-3">' . substr(htmlspecialchars($description), 0, 60) . '...</p>';
                            echo '<div class="d-flex justify-content-center gap-2">';
                            // Replace the actual link with a placeholder or remove it if you don't have directories
                            echo '<a href="' . getActivityViewFile($activity) . '" class="btn btn-strawberry"><i class="fas fa-eye me-1"></i> View</a>';
                            // echo '<button type="button" class="btn btn-strawberry view-btn" data-index="' . $index . '"><i class="fas fa-eye me-1"></i> View</button>';
                            echo '<button type="button" class="btn btn-outline-strawberry detail-btn" data-index="' . $index . '"><i class="fas fa-info-circle me-1"></i> Details</button>';
                            echo '</div>';

                            // Hidden activity details section
                            echo '<div class="activity-details" id="details-' . $index . '">';
                            echo '<div class="detail-box mt-3 text-start">';
                            echo '<div class="detail-header">';
                            echo '<h6><i class="fas fa-list-alt me-2"></i> Full Description</h6>';
                            echo '<span class="badge bg-danger">Activity #' . ($index + 1) . '</span>';
                            echo '</div>';
                            echo '<p>' . htmlspecialchars($description) . '</p>';
                            echo '<div class="d-flex justify-content-between align-items-center">';
                            echo '<small class="text-muted"><i class="far fa-calendar-alt me-1"></i> Created: ' . date('M d, Y', strtotime('-' . rand(1, 30) . ' days')) . '</small>';
                            echo '<button class="btn btn-sm btn-outline-strawberry feedback-toggle" data-index="' . $index . '"><i class="far fa-comment me-1"></i> Leave Feedback</button>';
                            echo '</div>';
                            echo '</div>';

                            // Hidden feedback form
                            echo '<div class="feedback-form" id="feedback-' . $index . '">';
                            echo '<form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '#activities">';
                            echo '<input type="hidden" name="activity_name" value="' . htmlspecialchars($activity) . '">';
                            echo '<div class="mb-3">';
                            echo '<label for="activity_feedback" class="form-label">Your Feedback</label>';
                            echo '<textarea class="form-control" name="activity_feedback" rows="3" required></textarea>';
                            echo '</div>';
                            echo '<button type="submit" class="btn btn-sm btn-strawberry"><i class="fas fa-paper-plane me-1"></i> Submit Feedback</button>';
                            echo '</form>';
                            echo '</div>';
                            echo '</div>'; // End of activity details

                            echo '</div>'; // End of card-body
                            echo '</div>'; // End of strawberry-card
                            echo '</div>'; // End of column

                            $index++;
                        }
                    } else {
                        echo '<div class="col-12 text-center">';
                        echo '<div class="detail-box">';
                        echo '<p><i class="fas fa-exclamation-circle me-2 text-warning"></i> No activities defined.</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </section>

            <!-- Progress Section -->
            <div class="vintage-divider"></div>

            <section id="progress" class="py-4">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h2 class="section-title">My Learning Progress</h2>
                        <p class="lead">Tracking my web development skills</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="detail-box">
                            <h5><i class="fab fa-html5 me-2" style="color: #e34f26;"></i> HTML & CSS</h5>
                            <div class="progress mb-3">
                                <div class="progress-bar" style="width: 80%;" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">85%</div>
                            </div>

                            <h5><i class="fab fa-js-square me-2" style="color: #f7df1e;"></i> JavaScript</h5>
                            <div class="progress mb-3">
                                <div class="progress-bar" style="width: 70%;" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                            </div>

                            <h5><i class="fab fa-php me-2" style="color: #777bb3;"></i> PHP</h5>
                            <div class="progress mb-3">
                                <div class="progress-bar" style="width: 65%;" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                            </div>

                            <h5><i class="fab fa-node me-2" style="color: #68A063;"></i> Node.js</h5>
                            <div class="progress mb-3">
                                <div class="progress-bar" style="width: 85%;" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="detail-box">
                            <h5><i class="fas fa-database me-2" style="color: #4479a1;"></i> MySQL</h5>
                            <div class="progress mb-3">
                                <div class="progress-bar" style="width: 60%;" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                            </div>

                            <h5><i class="fa fa-wind me-2" style="color: #38BDF8;"></i> Tailwind</h5>
                            <div class="progress mb-3">
                                <div class="progress-bar" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                            </div>

                            <h5><i class="fab fa-bootstrap me-2" style="color: #7952b3;"></i> Bootstrap</h5>
                            <div class="progress mb-3">
                                <div class="progress-bar" style="width: 60%;" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                            </div>

                            <h5><i class="fas fa-mobile-alt me-2" style="color: #ff5a5f;"></i> Responsive Design</h5>
                            <div class="progress mb-3">
                                <div class="progress-bar" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <div class="vintage-divider"></div>

            <section id="contact" class="py-4">
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <h2 class="section-title">Contact Me</h2>
                        <p class="lead">Have questions about my projects?</p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="detail-box">
                            <form id="contact-form">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="form-label">Your Name</label>
                                        <input type="text" class="form-control" id="name" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label">Subject</label>
                                    <input type="text" class="form-control" id="subject" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" rows="4" required></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="button" id="send-message" class="btn btn-strawberry">
                                        <i class="fas fa-paper-plane me-2"></i> Send Message
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top" id="back-to-top">
        <i class="fas fa-chevron-up"></i>
    </a>

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3 mb-md-0">
                    <h5>About</h5>
                    <p class="small">A portfolio of web development activities by <?php echo htmlspecialchars($studentName); ?> for <?php echo htmlspecialchars($courseSubject); ?>.</p>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#home" class="text-white">Home</a></li>
                        <li><a href="#activities" class="text-white">Activities</a></li>
                        <li><a href="#progress" class="text-white">Progress</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Connect</h5>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="https://github.com/PiaMacalanda" class="text-white"><i class="fab fa-github fa-lg"></i></a>
                        <a href="https://www.linkedin.com/in/pia-katleya-macalanda/" class="text-white"><i class="fab fa-linkedin fa-lg"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-twitter fa-lg"></i></a>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <p class="mb-0">© <?php echo date('Y'); ?> - <?php echo htmlspecialchars($studentName); ?></p>
                <p class="small">Created with 🍓 and Bootstrap</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Back to top button functionality
            const backToTopButton = document.getElementById('back-to-top');

            window.addEventListener('scroll', function() {
                if (window.pageYOffset > 300) {
                    backToTopButton.classList.add('visible');
                } else {
                    backToTopButton.classList.remove('visible');
                }
            });

            backToTopButton.addEventListener('click', function(e) {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // Activity details toggle
            const detailButtons = document.querySelectorAll('.detail-btn');
            detailButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const index = this.getAttribute('data-index');
                    const detailsSection = document.getElementById('details-' + index);

                    // Hide all other activity details
                    document.querySelectorAll('.activity-details').forEach(section => {
                        if (section !== detailsSection) {
                            section.style.display = 'none';
                        }
                    });

                    // Toggle current activity details
                    if (detailsSection.style.display === 'block') {
                        detailsSection.style.display = 'none';
                        this.innerHTML = '<i class="fas fa-info-circle me-1"></i> Details';
                    } else {
                        detailsSection.style.display = 'block';
                        this.innerHTML = '<i class="fas fa-times-circle me-1"></i> Close';
                    }
                });
            });

            // Feedback form toggle
            const feedbackToggles = document.querySelectorAll('.feedback-toggle');
            feedbackToggles.forEach(button => {
                button.addEventListener('click', function() {
                    const index = this.getAttribute('data-index');
                    const feedbackForm = document.getElementById('feedback-' + index);

                    if (feedbackForm.style.display === 'block') {
                        feedbackForm.style.display = 'none';
                        this.innerHTML = '<i class="far fa-comment me-1"></i> Leave Feedback';
                    } else {
                        feedbackForm.style.display = 'block';
                        this.innerHTML = '<i class="fas fa-times-circle me-1"></i> Cancel';
                    }
                });
            });

            // Smooth scrolling for anchor links with offset
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();

                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;

                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        // Measure navbar height dynamically
                        const navbarHeight = document.querySelector('.navbar').offsetHeight;
                        // Add extra padding for visual comfort
                        const offset = navbarHeight + 20;

                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - offset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Auto-dismiss toast notifications after 5 seconds
            const toasts = document.querySelectorAll('.toast');
            toasts.forEach(toast => {
                setTimeout(() => {
                    const bsToast = new bootstrap.Toast(toast);
                    bsToast.hide();
                }, 5000);
            });

            // Contact form submission (simulated)
            const contactForm = document.getElementById('contact-form');
            const sendButton = document.getElementById('send-message');

            sendButton.addEventListener('click', function() {
                // Simple validation
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const subject = document.getElementById('subject').value;
                const message = document.getElementById('message').value;

                if (!name || !email || !subject || !message) {
                    alert('Please fill in all fields');
                    return;
                }

                // Simulated submission - in a real app you'd send this to the server
                sendButton.disabled = true;
                sendButton.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Sending...';

                setTimeout(function() {
                    // Create a success toast notification
                    const toastContainer = document.querySelector('.toast-container') || createToastContainer();
                    const toast = createToast('Message sent successfully! I\'ll get back to you soon.');
                    toastContainer.appendChild(toast);

                    // Reset form
                    contactForm.reset();
                    sendButton.disabled = false;
                    sendButton.innerHTML = '<i class="fas fa-paper-plane me-2"></i> Send Message';

                    // Auto-dismiss after 5 seconds
                    setTimeout(() => {
                        toast.remove();
                    }, 5000);
                }, 1500);
            });

            // Helper function to create toast container if it doesn't exist
            function createToastContainer() {
                const container = document.createElement('div');
                container.className = 'toast-container';
                document.body.appendChild(container);
                return container;
            }

            // Helper function to create toast notification
            function createToast(message) {
                const toast = document.createElement('div');
                toast.className = 'toast show';
                toast.setAttribute('role', 'alert');
                toast.setAttribute('aria-live', 'assertive');
                toast.setAttribute('aria-atomic', 'true');

                toast.innerHTML = `
                <div class="toast-header bg-success text-white">
                    <strong class="me-auto">Success</strong>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    ${message}
                </div>
            `;

                // Add click event to close button
                toast.querySelector('.btn-close').addEventListener('click', function() {
                    toast.remove();
                });

                return toast;
            }

            // Add hover effects to strawberry cards
            const strawberryCards = document.querySelectorAll('.strawberry-card');
            strawberryCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.querySelector('.activity-icon').style.color = '#d03e44';
                });

                card.addEventListener('mouseleave', function() {
                    this.querySelector('.activity-icon').style.color = '#ff5a5f';
                });
            });

            // Create animated strawberry particles on click
            document.addEventListener('click', function(e) {
                createStrawberryParticle(e.clientX, e.clientY);
            });

            function createStrawberryParticle(x, y) {
                const particle = document.createElement('div');
                particle.innerHTML = '🍓';
                particle.style.position = 'fixed';
                particle.style.left = x + 'px';
                particle.style.top = y + 'px';
                particle.style.fontSize = '1.5rem';
                particle.style.pointerEvents = 'none';
                particle.style.zIndex = '9999';
                particle.style.opacity = '1';
                particle.style.transition = 'all 1s ease-out';

                document.body.appendChild(particle);

                // Random direction
                const angle = Math.random() * Math.PI * 2;
                const distance = Math.random() * 100 + 50;
                const destX = x + Math.cos(angle) * distance;
                const destY = y + Math.sin(angle) * distance;

                setTimeout(() => {
                    particle.style.transform = `translate(${destX - x}px, ${destY - y}px) rotate(${Math.random() * 360}deg)`;
                    particle.style.opacity = '0';
                }, 10);

                setTimeout(() => {
                    particle.remove();
                }, 1000);
            }
        });
    </script>
</body>

</html>