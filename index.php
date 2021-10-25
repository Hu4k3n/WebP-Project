<?php include('php/auth.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/index.css" />
        <link rel="stylesheet" href="css/modal.css" />
        <script type="text/javascript" src="js/modal.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    </head>

<body>
    <?php include('nav.php') ?>
    <div class="landing">
        <h1>Web Coursera</h1>
        <p>
            Webcoursera partners with more than 200 leading universities and
            companies to bring flexible, affordable, job-relevant online
            learning to individuals and organizations worldwide. We offer a
            range of learning opportunities, from hands-on projects and
            courses to job-ready certificates and degree programs.
        </p>
        <div class="row">
            <input type="text" placeholder="Start learning... Search for a course" />
            <button onclick="window.location.href = 'pages/courses.html';">
                <i class="fa fa-search"></i>
            </button>
        </div>

            <?php
            if(!isset($_SESSION['username'])):?>
            <div class="row">
                <button onclick="window.location.href = 'php/login.php';">
                    Login
                </button>
                <button class="signup-btn" onclick="window.location.href = '/php/signup.php';">
                    Sign Up
                </button>
            </div>
            <?php endif; ?>
        </div>

    <?php include('footer.php'); ?>
</body>
</html>