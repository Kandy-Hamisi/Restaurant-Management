<?php

session_start();

//initializing variables
$username = "";
$email = "";
$errors = array();

//Connecting to the database

$mysqli = mysqli_connect('localhost', 'said', '#Password2021', 'Eatery');

//Register User

if (isset($_POST['save'])) {
    //receive all input values from the form
    $username  = mysqli_real_escape_string($mysqli, $_POST['username']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $password_1 = mysqli_real_escape_string($mysqli, $_POST['pwd1']);
    $password_2 = mysqli_real_escape_string($mysqli, $_POST['pwd2']);


    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
  }

    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($mysqli, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
        if ($user['username'] === $username) {
        array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
        array_push($errors, "email already exists");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database

        $query = "INSERT INTO users (username, email, Password) 
                VALUES('$username', '$email', '$password')";
        if(mysqli_query($mysqli, $query)){
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            
            echo '<script>window.location="reserve.php</script>';
        }else{
            echo 'Failed';
        }
        
    }

    //LOGIN USER

    if (isset($_POST['login_user'])) {
        $email = mysqli_real_escape_string($mysqli, $_POST['email']);
        $password = mysqli_real_escape_string($mysqli, $_POST['pwd']);

        if(empty($email)){
            array_push($errors, "Email is required");
        }
        if(empty($password)){
            array_push($errors, "Password is required");
        }

        if(count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM users WHERE Email = '$email' AND Password = '$password'";
            $results = mysqli_query($mysqli, $query);
            if(mysqli_num_rows($reults) == 1){
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                echo '<script>window.location="index.php"</script>';
            }else{
                array_push($errors, "Wrong username/password combinations");
            }
        }
        # code...
    }

}

?>