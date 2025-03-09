<?php
$subTitle = "Home - Pia";
$header = "Application Development";
$section = "3BSCS-2";
$image = "profile.jpg"; // Replace with actual image path
$name = "Pia Katleya V. Macalanda";
$header2 = "🧺Bootstrap Activities";
$activities = [
    "Activity1: 🍓Bootstrap Container, 🍓Grid System, 🍓Test Tables, 🍓Tables" => "Activity1\activity1.php",
    "Activity2: 🍓Bootstrap Image, 🍓Button, 🍓Button Group, 🍓Dropdown, 🍓Glyphicon, 🍓Alert, 🍓Badges" => "Activity2\activity2.php",
    "Activity3: 🍓Bootstrap Panel, 🍓Collapse: Collapse Panel, List Group, List-group-collpase, 🍓Accordion, 🍓Tab and Pill Dynamic, 🍓Pager, 🍓Pagination" => "Activity3\activity3.php",
    "Activity4: 🍓Bootstrap Navbar, 🍓Form, and 🍓Form Style Validation" => "Activity4\activity4.php",
    // Add more activities as needed
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $subTitle; ?></title>

    <!-- commenting because practicing non-CDN/local-based bootstrap o(*￣▽￣*)ブ -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <!-- <link rel= "stylesheet" href="css/bootstrap.min.css">
        <script src="js\jquery.js"></script>
        <script src="js\bootstrap.js"></script> -->
        
    <style>
        body {
            background-color: #f8e8dc;
            color: #5a3e36; 
            font-family: 'Georgia', serif;
        }
        .container {
            margin-top: 50px;
            background-color: #fff8f0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            border: 2px solid #c08552;
        }
        .profile-img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #c08552;
        }
        .header-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            border: 2px solid #c08552;
        }
        h1, h2, h3 {
            color: #8b5e3b;
        }
        .list-group-item {
            background-color: #fdf5e6;
            border: 1px solid #c08552;
        }
        .list-group-item a {
            color: #8b5e3b;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <img src="header.jpg" alt="Header Image" class="header-img"> <!-- Replace with actual header image -->
        <h1 class="mt-3"> <?php echo $header; ?> </h1>
        <p> <?php echo $section; ?> </p>
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo $image; ?>" alt="Profile Picture" class="profile-img">
            </div>
            <div class="col-md-8 text-left">
                <h2> <?php echo $name; ?> </h2>
                <h3> <?php echo $header2; ?> </h3>
                <ul class="list-group">
                    <?php foreach ($activities as $title => $link): ?>
                        <li class="list-group-item">
                            <a href="<?php echo $link; ?>">
                                <?php echo $title; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
