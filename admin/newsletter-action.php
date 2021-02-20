<?php 

$mysqli = mysqli_connect('localhost', 'phpmyadmin', 'password', 'Eatery');

$username = "";
$email = "";


if (isset($_POST['submit'])) {


    //receive all input values from the form
    $username  = mysqli_real_escape_string($mysqli, $_POST['name']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM newsletters WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($mysqli, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
        if ($user['name'] === $username) {
        array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
        array_push($errors, "email already exists");
        }
    }

}

?>