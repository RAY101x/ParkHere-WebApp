<?php
    session_start();
    require_once '../index.php';

    // check if the user is already logged in
    if(isset($_SESSION['user_id'])){
        header('Location: header.php');
        exit;
    }

    // check if the login form was submitted
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        // create a new User object and attempt to log in the user
        $user = new User();
        $login = $user->login($email, $password);

        if($login){
            // set session variables for the logged in user
            $_SESSION['user_id'] = $login['id'];
            $_SESSION['user_name'] = $login['name'];
            $_SESSION['user_email'] = $login['email'];

            // redirect to the dashboard page
            header('Location: header.php');
            exit;
        }else{
            // display an error message if login fails
            $error = 'Invalid email or password.';
        }
    }

    // load the login view
    require 'login.php';
?>
