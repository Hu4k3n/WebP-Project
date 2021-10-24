<?php include('auth.php') ?>
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
    <nav>
        <div class="row center">
            <a class="active" href="#">Home</a>
            <a style="cursor: pointer" onclick="window.scrollBy(0,document.body.scrollHeight)">About</a>
            <a href="pages/courses.html">Courses</a>
            <a href="pages/teachers.html">Mentors</a>
            <a style="cursor: pointer" onclick="window.scrollBy(0,document.body.scrollHeight)">Contact</a>
        </div>
        <div class="usernav">
            <?php 
            if(isset($_SESSION['username'])):?>
                <a href="#"aria-haspopup="true" onclick="openModal()"> <?php echo $_SESSION['username']; ?></a>
            <div class="mask" role="dialog" id="mask"></div>
            <div class="modal" role="alert">
                <button class="close" role="button" onclick="closeModal()">
                    <i class="fa fa-close" style="position:relative;top:0px;left:0px;"></i>
                </button>
            <h1> Hello there <?php echo $_SESSION['username'] ?>!</h1>
            <div>
                <button class="logout" onclick="window.location.href = 'logout.php';">Logout</button>
            </div>
            </div>
            
            <?php endif; ?>
            </div>
    </nav>

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
            <button onclick="window.location.href = 'login.php';">
                Login
            </button>
            <button class="signup-btn" onclick="window.location.href = 'signup.php';">
                Sign Up
            </button>
        </div>
        <?php else:
            ?>
            
        <?php endif; ?>
    </div>

    <footer>
        <div class="container">
            <div class="sec aboutus">
                <h2>About Us</h2>
                <p>
                    Webcoursera was founded by Anish Sharma, Arjun Syam and
                    Dev Sony in 2020 with a vision of providing
                    life-transforming learning experiences to learners
                    around the world. Today, Webcoursera is a global online
                    learning platform that offers anyone, anywhere, access
                    to online courses and degrees from leading universities
                    and companies. We received B Corp certification in
                    February 2021, which means that we have a legal duty not
                    only to our shareholders, but to also make a positive
                    impact on society more broadly, as we continue our
                    efforts to reduce barriers to world-class education for
                    all.
                </p>
                <ul class="sci">
                    <li>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>

            <div class="sec quickLinks">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="https://www.privacypolicies.com/live/4e0bbccc-8fb1-4619-b3b1-3ccc16909a8d" target="_blank">Privacy Policy</a></li>
                    <li><a href="#">Help & Support</a></li>
                    <li><a href="https://www.termsandconditionsgenerator.com/live.php?token=b7UtdrWNSWg9TQbYnWcA4yZtLV9Yiqoi" target="_blank">Terms & Conditions</a></li>
                </ul>
            </div>

            <div class="sec contact">
                <h2>Contact Info</h2>
                <ul class="info">
                    <li>
                        <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                        <span>
                            <a href="tel:918899889988">+91 889 988 9988</a><br /><a href="tel:918921710488">+91 892 171 0488</a>
                        </span>
                    </li>
                    <li>
                        <span>
                            <i class="fa fa-envelope" aria-hidden="true"></i></span><span><a href="mailto:support@webcoursera.edu">support@webcoursera.edu</a>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <div class="copyright">
        <p>Copyright &copy; 2021 Webcoursera. All Rights Reserved.</p>
    </div>
</body>
</html>