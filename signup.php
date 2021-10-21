<?php include('auth.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/index.css" />
        <link rel="stylesheet" href="css/login.css" />
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        />
    </head>
    <body>
        <nav>
            <div class="row center">
                <a class="active" href="#">Home</a>
                <a style="cursor: pointer" onclick="window.scrollBy(0,document.body.scrollHeight)"
                    >About</a
                >
                <a href="pages/courses.html">Courses</a>
                <a href="pages/teachers.html">Mentors</a>
                <a style="cursor: pointer" onclick="window.scrollBy(0,document.body.scrollHeight)"
                    >Contact</a
                >
            </div>
        </nav>
    <?php if (count($errors) != 0) {
        echo '<script>alert("Error Encountered: ' . $errors[0] . '")</script>';
    } ?>
    <form method="post" action="signup.php" style="padding:0; margin:0;">
        <div class="login">
            <h1>Sign Up</h1>
            <input name="fullname" placeholder="Enter Full Name" value="<?php echo $fullname; ?>" />
            <input name="username" placeholder="Enter username" value="<?php echo $username; ?>" />
            <input
                name="password"
                type="password"
                placeholder="Enter password"
            />
            <input
                name="repassword"
                type="password"
                placeholder="Renter password"
            />
            <div class="row center">
                <input type="checkbox" /><label
                    >Agree to the Terms and Privacy Policy</label
                >
            </div>
            <label
                >Already have an account?&nbsp;<a href="login.php"
                    >Login</a
                ></label
            >
            <button type ="submit" name="sign_up">
                Sign-Up
            </button>
        </div>
    </form>

        <footer>
            <div class="container">
                <div class="sec aboutus">
                    <h2>About Us</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Eveniet vero qui modi omnis iusto, eaque harum autem
                        officia ipsum repellat voluptatum corrupti doloremque
                        voluptas. Quas omnis fuga inventore laboriosam fugit.
                        Animi possimus laboriosam, quis, maxime dicta ut fuga
                        eos eius amet eum voluptatibus! Corporis adipisci saepe
                        beatae rerum tenetur, consequatur magni et, iure quia
                        at, error veniam ipsa modi id! Amet blanditiis
                        voluptatem, nisi debitis dolores nostrum ea libero.
                        Dolorem a ipsa facere autem unde nesciunt aperiam illo!
                        Numquam doloremque eaque ipsam veritatis enim blanditiis
                        praesentium sit. Architecto, ducimus. Exercitationem!
                    </p>
                    <ul class="sci">
                        <li>
                            <a href="#"
                                ><i
                                    class="fa fa-facebook"
                                    aria-hidden="true"
                                ></i
                            ></a>
                        </li>
                        <li>
                            <a href="#"
                                ><i class="fa fa-twitter" aria-hidden="true"></i
                            ></a>
                        </li>
                        <li>
                            <a href="#"
                                ><i
                                    class="fa fa-instagram"
                                    aria-hidden="true"
                                ></i
                            ></a>
                        </li>
                        <li>
                            <a href="#"
                                ><i
                                    class="fa fa-youtube-play"
                                    aria-hidden="true"
                                ></i
                            ></a>
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
                            <span
                                ><i class="fa fa-phone" aria-hidden="true"></i
                            ></span>
                            <span>
                                <a href="tel:918899889988">+91 889 988 9988</a
                                ><br />
                                <a href="tel:918921710488"
                                    >+91 892 171 0488</a
                                ></span
                            >
                        </li>
                        <li>
                            <span
                                ><i
                                    class="fa fa-envelope"
                                    aria-hidden="true"
                                ></i
                            ></span>
                            <span
                                ><a href="mailto:support@webcoursera.edu"
                                    >support@webcoursera.edu</a
                                ></span
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
        <div class="copyright">
            <p>Copyright &copy; 2021 Thengu Geng. All Rights Reserved.</p>
        </div>
    </body>
</html>
