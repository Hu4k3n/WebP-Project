<?php include('../php/auth.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/coursePage.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Ajax-CoursePage</title>
</head>

<body>
    <nav>
        <i class="fa fa-angle-left" style="font-size: 50px; cursor: pointer" onclick="window.location.href = '../pages/courses.php';"></i>
        <div class="row center">
            <a href="../index.php">Home</a>
            <a style="cursor: pointer" onclick="window.scrollTo(0, document.body.scrollHeight)">About</a>
            <a class="active" href="../pages/courses.php">Courses</a>
            <a href="../pages/teachers.php">Mentors</a>
            <a style="cursor: pointer" onclick="window.scrollTo(0, document.body.scrollHeight)">Contact</a>
        </div>
    </nav>
    <div class="htmlbg">
        <div class="htmllanding">
            <div class="flex-container">
                <div>
                    <h1>Ajax</h1>
                </div>
            </div>
            <p>
                Ajax is a web technology that allows web pages to be updated
                asynchronously.
            </p>
        </div>
    </div>
    <?php
    if (!isUserRegistered(5)) {
        echo '
        <div class="course">
        <div class="row center">
            <form action="ajaxCourse.php" method="post">
                <input type="hidden" name="course_id" value="5">
                <button type="submit" name="register_course" class="signup-btn">
                    Register
                </button>
            </form>
        </div>
    </div>
        ';
    } else {
        echo '
        <div class="course">
            <div class="module">
                <hr class="section" />
                <h1>References</h1>
                <hr class="moduleHeading" />
                <br />
                <div class="moduleContents">
                    <input type="checkbox" id="reference1" name="reference1
                        value=" books">
                    <label for="references1"> <a href="https://www.academiepro.com/uploads/livres/AjaxProgramming.pdf" target="_blank">Ajax Programming for Absolute Beginners <i class="fa fa-external-link"></i></a></label><br />
                    <input type="checkbox" id="reference1" name="reference1
                        value=" books">
                    <label for="references1"><a href="https://inspirit.net.in/books/html,%20css%20and%20javascript/AJAX%20-%20The%20Complete%20Reference.pdf" target="_blank">Ajax: The Complete Reference <i class="fa fa-external-link"></i></a></label><br />
                    <input type="checkbox" id="reference1" name="reference1
                        value=" books">
                    <label for="references1"> <a href="https://doc.lagout.org/programmation/Ajax/Ajax%20For%20Dummies%20%282006%29.pdf" target="_blank">Ajax For Dummies <i class="fa fa-external-link"></i></a></label><br /><br />
                </div>
            </div>
            <div class="row center">
                <label>Filter: </label>
                <select id="filter">
                    <option value="all">None</option>
                    <option value="short">Short</option>
                    <option value="medium">Medium</option>
                    <option value="long">Long</option>
                </select>
            </div>
            <div id="course"></div>
        </div>
        <script type="text/javascript" src="../js/ajaxCourse.js"></script>
        <script type="text/javascript" src="../js/rendercourse.js"></script>

        <div class="course">
            <div class="row center">
                <form action="" method="post">
                    <input type="hidden" name="course_id" value="5">
                    <button type="submit" name="completed_course" class="signup-btn">
                        Completed
                    </button>
                </form>
            </div>
        </div>
        ';
    }
    ?>
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