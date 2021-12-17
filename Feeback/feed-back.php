<?php
    session_start();
    require_once '..\register\connect.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);
//    $password = $_POST['password'];

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `username` = '$login' and `password` = '$password'");

//    echo mysqli_num_rows($check_user);
    if(mysqli_num_rows($check_user) > 0){
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
                "id" => $user['id'],
                "full_name" => $user['full_name'],
                "email" => $user['email'],
        ];
        header('Location: ../home/home.php');
    }else{
        $_SESSION['message'] = 'Incorrect Password';
        header('Location: login.php');
    }


