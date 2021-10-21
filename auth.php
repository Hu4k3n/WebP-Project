<?php
session_start();

// initializing variables
$username = "";
$fullname    = "";
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
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($fullname)) { array_push($errors, "Full Name is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }
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
    
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password);//encrypt the password before saving in the database
        
        $query = "INSERT INTO users (username, fullname, password) 
        VALUES('$username', '$fullname', '$password')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.html');
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
          header('location: index.html');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  
  ?>