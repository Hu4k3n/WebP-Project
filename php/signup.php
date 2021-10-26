<?php include('auth.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../css/index.css" />
        <link rel="stylesheet" href="../css/login.css" />
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        />
    </head>

    <body>
    <?php include('../nav.php') ?>

        <?php if (count($errors) != 0) {
            echo '<script>alert("Error Encountered: ' . $errors[0] . '")</script>';
        } ?>

        <form method="post" action="/php/signup.php" style="padding:0; margin:0;">
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
                    <input type="checkbox" name="termsnconditions"/>
                    <label>Agree to the Terms and Privacy Policy</label>
                </div>
                <label>
                    Already have an account?&nbsp;
                    <a href="/php/login.php">Login</a>
                </label>
                <button type ="submit" name="sign_up">
                    Sign-Up
                </button>
            </div>
        </form>

        <?php include('../footer.php') ?>
    </body>
</html>
