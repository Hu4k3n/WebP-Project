<?php
session_start();

// initializing variables
$username = "";
$fullname = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'monkeywings', '3p1cburg3r', 'eLearningDB');

// Register new user
if (isset($_POST['sign_up'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $repassword = mysqli_real_escape_string($db, $_POST['repassword']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($fullname)) {
        array_push($errors, "Full Name is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if ($password != $repassword) {
        array_push($errors, "The two passwords do not match");
    }

    // first check the database to make sure 
    // a user does not already exist with the same username 
    $user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        array_push($errors, "Username already exists");
    }

    if (!isset($_POST['termsnconditions'])) {
        array_push($errors, "Please agree to Terms and Conditions.");
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password); //encrypt the password before saving in the database

        $query = "INSERT INTO users (username, fullname, password) 
        VALUES('$username', '$fullname', '$password')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: ../index.php');
    }
}

// Login Existing User
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password); // Password hashed
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: ../index.php');
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}
// register for html
if (isset($_POST['register_course'])) {
    if (!isset($_SESSION['username']))
    {
        header('location:../php/login.php');
    }
    $username = mysqli_real_escape_string($db, $_SESSION['username']);
    $course_id = mysqli_real_escape_string($db, $_POST['course_id']);
    $query = "select id from users where '$username'=username;";
    $results = mysqli_query($db, $query);
    $personid = mysqli_fetch_array($results);
    $query = "insert into reg_course values ($course_id, {$personid['id']}, 0);";
    mysqli_query($db, $query);
}
// completed the course
if (isset($_POST['completed_course'])) {
    $username = mysqli_real_escape_string($db, $_SESSION['username']);
    $course_id = mysqli_real_escape_string($db, $_POST['course_id']);
    $query = "select id from users where '$username'=username;";
    $results = mysqli_query($db, $query);
    $personid = mysqli_fetch_array($results);

    $query = "delete from reg_course where $course_id=course_id and {$personid['id']}=person_id;";
    error_log(print_r($query, TRUE));
    mysqli_query($db, $query);
    $query = "select count(*) from reg_course where {$personid['id']}=person_id;";
    $results = mysqli_query($db, $query);
    $number_of_courses = mysqli_fetch_array($results);

    error_log(print_r($number_of_courses[0], TRUE));

    if ($number_of_courses[0] == 0) {
        $query = "delete from users where {$personid['id']}=id;";
        mysqli_query($db, $query);
        header('location:../php/logout.php');
    }
}
// to check whether a user is in session before registering
function isUserRegistered($course_id)
{
    $conn = mysqli_connect('localhost', 'monkeywings', '3p1cburg3r', 'eLearningDB');
    $username = mysqli_real_escape_string($conn, $_SESSION['username']);
    $query = "select id from users where '$username'=username;";
    $results = mysqli_query($conn, $query);
    error_log(print_r($results, TRUE));
    $personid = mysqli_fetch_array($results);
    $query = "select count(*) from reg_course where $course_id=course_id and {$personid['id']}=person_id;";
    $results = mysqli_query($conn, $query);
    $noOfCourseEntries = mysqli_fetch_array($results);
    error_log(print_r($query, TRUE));
    error_log(print_r($results, TRUE));
    if ($noOfCourseEntries[0] == 0) {
        return false;
    } else {
        return true;
    }
}
// to count the number of user registrations in the courses.php
function countOfRegisteredUsers($course_id){
    $conn = mysqli_connect('localhost', 'monkeywings', '3p1cburg3r', 'eLearningDB');
    $query = "select count(*) from reg_course where $course_id=course_id;";
    $results = mysqli_query($conn, $query);
    $noOfUsers = mysqli_fetch_array($results);
    return $noOfUsers[0];
}
?>
