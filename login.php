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
    <?php include('nav.php') ?>
    <?php if (count($errors) != 0) {
        echo '<script>alert("Invalid Credentials.")</script>';
    } ?>
    <form method="post" action="login.php" style="padding:0; margin:0;">

        <div class="login">
            <h1>Login</h1>
            <input name="username" placeholder="Enter username" />
            <input
                name="password"
                type="password"
                placeholder="Enter password"
            />
            <label
                >Don't have an account?&nbsp;<a href="signup.php"
                    >Sign-Up</a
                ></label
            >
            <button type="submit" name="login">
                Login
            </button>
        </div>
    </form>
    <?php include('footer.php'); ?>
    </body>
</html>
