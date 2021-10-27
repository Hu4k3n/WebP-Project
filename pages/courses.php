<?php include('../php/auth.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/courses.css">
    <link rel="stylesheet" href="../css/modal.css">
    <script type="text/javascript" src="/js/modal.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Courses</title>
</head>

<body>
    <!-- Navbar -->
    <?php include('../nav.php') ?>
    <div class="main">
        <h1>Our Courses</h1>
        <!-- First Row -->
        <div class="row center" style="flex-grow: 0;">
            <?php if(isset($_SESSION['username'])):?>
            <div class="card" onclick="window.location.href = '../courses/htmlCourse.php';">
            <?php else:?>
            <div class="card">
            <?php endif;?>
                <div class="card-image">
                    <img src="../images/html.jpg" alt="">
                </div>
                <div class="card-text">
                    <h2>HTML</h2>
                    <p>HTML is the language behind every website on the Internet! It's a markup language used to define the structure and content of web pages. It's the first language you need to learn if you want to become a web developer.</p>
                </div>
                <div class="card-stats">
                    <div class="stat">
                        <div class="value">5</div>
                        <div class="type">Hour</div>
                    </div>
                    <div class="stat">
                        <?php
                        $noOfUsers=countOfRegisteredUsers(1);
                        echo "
                        <div class='value'>$noOfUsers</div>
                        <div class='type'>number of registraions</div>
                        ";
                        ?>
                    </div>
                </div>

            </div>
            <?php if(isset($_SESSION['username'])):?>
            <div class="card" onclick="window.location.href = '../courses/cssCourse.php';">
            <?php else:?>
            <div class="card">
            <?php endif;?>
                <div class="card-image">
                    <img src="../images/css.jpg" alt="">
                </div>
                <div class="card-text">
                    <h2>CSS</h2>
                    <p>Cascading Style Sheets (CSS) are the main coding files used to lay out a website and its design.</p>
                </div>
                <div class="card-stats">
                    <div class="stat">
                        <div class="value">14</div>
                        <div class="type">Hours</div>
                    </div>
                    <div class="stat">
                    <?php
                        $noOfUsers=countOfRegisteredUsers(2);
                        echo "
                        <div class='value'>$noOfUsers</div>
                        <div class='type'>number of registraions</div>
                        ";
                        ?>
                    </div>
                </div>
            </div>

            <?php if(isset($_SESSION['username'])):?>
            <div class="card" onclick="window.location.href = '../courses/jsCourse.php';">
            <?php else:?>
            <div class="card">
            <?php endif;?>
                <div class="card-image">
                    <img src="../images/js.jpg" alt="" style="object-fit: 26em;object-position: -6.75em;">
                </div>
                <div class="card-text">
                    <h2>JavaScript</h2>
                    <p>JavaScript is among the most powerful and flexible programming languages of the web. It powers the dynamic behavior on most websites, including this one.</p>
                </div>
                <div class="card-stats">
                    <div class="stat">
                        <div class="value">68</div>
                        <div class="type">Hours</div>
                    </div>
                    <div class="stat">
                    <?php
                        $noOfUsers=countOfRegisteredUsers(3);
                        echo "
                        <div class='value'>$noOfUsers</div>
                        <div class='type'>number of registraions</div>
                        ";
                        ?>
                    </div>
                </div>

            </div>

            <!-- Second Row -->
            <?php if(isset($_SESSION['username'])):?>
            <div class="card" onclick="window.location.href = '../courses/javaCourse.php';">
            <?php else:?>
            <div class="card">
            <?php endif;?>
                <div class="card-image">
                    <img src="../images/java.png" alt="">
                </div>
                <div class="card-text">
                    <h2>Java</h2>
                    <p>Java is very versatile as it is used for programming applications on the web, mobile, desktop, etc. with features such as dynamic coding, multiple security features, platform-independent characteristics, network-centric designing, etc. that make it quite versatile.</p>
                </div>
                <div class="card-stats">
                    <div class="stat">
                        <div class="value">61</div>
                        <div class="type">Hours</div>
                    </div>
                    <div class="stat">
                    <?php
                        $noOfUsers=countOfRegisteredUsers(4);
                        echo "
                        <div class='value'>$noOfUsers</div>
                        <div class='type'>number of registraions</div>
                        ";
                        ?>
                    </div>
                </div>
            </div>
            <?php if(isset($_SESSION['username'])):?>
            <div class="card" onclick="window.location.href = '../courses/ajaxCourse.php';">
            <?php else:?>
            <div class="card">
            <?php endif;?>
                <div class="card-image">
                    <img src="../images/ajax.webp" alt="">
                </div>
                <div class="card-text">
                    <h2>AJAX</h2>
                    <p>AJAX stands for Asynchronous JavaScript and XML. AJAX is a new technique for creating better, faster, and more interactive web applications with the help of XML, HTML, CSS, and Java Script.</p>
                </div>
                <div class="card-stats">
                    <div class="stat">
                        <div class="value">3.2</div>
                        <div class="type">Hours</div>
                    </div>
                    <div class="stat">
                    <?php
                        $noOfUsers=countOfRegisteredUsers(5);
                        echo "
                        <div class='value'>$noOfUsers</div>
                        <div class='type'>number of registraions</div>
                        ";
                        ?>
                    </div>
                </div>
            </div>

            <?php if(isset($_SESSION['username'])):?>
            <div class="card" onclick="window.location.href = '../courses/pythonCourse.php';">
            <?php else:?>
            <div class="card">
            <?php endif;?>
                <div class="card-image">
                    <img src="../images/python.png" alt="">
                </div>
                <div class="card-text">
                    <h2>Python</h2>
                    <p>Python is one of the most loved programming languages by developers, data scientists, software engineers, and even hackers because of its versatility, flexibility, and object-oriented features.</p>
                </div>
                <div class="card-stats">
                    <div class="stat">
                        <div class="value">22.1</div>
                        <div class="type">Hours</div>
                    </div>
                    <div class="stat">
                    <?php
                        $noOfUsers=countOfRegisteredUsers(6);
                        echo "
                        <div class='value'>$noOfUsers</div>
                        <div class='type'>number of registraions</div>
                        ";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('../footer.php') ?>
</body>

</html>