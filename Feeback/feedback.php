<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Books</title>
    <link rel="stylesheet" href="mystyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha512-DkPsH9LzNzZaZjCszwKrooKwgjArJDiEjA5tTgr3YX4E6TYv93ICS8T41yFHJnnSmGpnf0Mvb5NhScYbwvhn2w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js" integrity="sha512-0xrMWUXzEAc+VY7k48pWd5YT6ig03p4KARKxs4Bqxb9atrcn2fV41fWs+YXTKb8lD2sbPAmZMjKENiyzM/Gagw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<nav>
    <div class="logo"><h1>E-Books</h1></div>
    <div class="openMenu"><i class="fa fa-bars"></i></div>
    <ul class="mainMenu">
        <li><a href="../home/home.php">Home</a></li>
        <li><a href="../index.html">Text</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="C:\Users\Ion\OneDrive\Documents\UTM Docs\Anul 2\html\login\login.html">Log In</a></li>
        <div class="closeMenu">X</div>
    </ul>
</nav>
<script src="./app.js"></script>
<div class="body1">
    <div class="container">
        <div class="title">Log in</div>
        <form action="signin.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" name="login" placeholder="Enter your username" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" name="password" placeholder="Enter your password" required>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Log in">
            </div>

            <?php
            if ($_SESSION['message']){
                echo '<p class="msg">' . $_SESSION['message'] . '</p>';
            }
            unset($_SESSION['message']);
            ?>
            <div class="registration">
                <span class="details">New on the page?</span>
                <span class="details"> <a href="../register/register.php">Register</a></span>
            </div>
        </form>
    </div>
</div>
</body>
</html>