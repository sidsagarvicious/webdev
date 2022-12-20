<?php
    require "header.php";
    
    if (isset($_SESSION['userId'])){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <script src="https://kit.fontawesome.com/10022afe1e.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="css/login-style.css"> -->
</head>
<body>

<div class="test">
<main>
    <div class="container">
        <div class="forms-container">
            <div class="login-signup">
                <form action="phpOnly/plogin.php" method="post" class="login-form">
                    <h2 class="title">Driver Login</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="uidmail" placeholder="Username/Email">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="pwd" placeholder="Password">
                    </div>
                    <input type="submit" name="login-submit" value="login" class="btn solid">
                </form>
            </div>
        </div>
    </div>
    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3 class="about">SAFA SAHAR </h3>
                <p class="about">Clean City, Green City , Our dream city</p>
                <a href="signup.php" class="signup-link"><button class="btn transparent" id="signup-btn">Back</button></a>
            </div>
            <img src="img/airJordan.png" alt="" class="image">
        </div>
    </div>
    </div>
    </main>

<?php

    if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
            echo "<script>alert('You have to feed me data to get access. Fill up the fields.');</script>";
        }
        else if ($_GET['error'] == "nouser") {
            echo "<script>alert('I did not find the user from the given detail. Please try again.');</script>";
        }
        else if ($_GET['error'] == "wrongpassword") {
            echo "<script>alert('You entered wrong password. Please try again.');</script>";
        }
    }
?>

<?php
    require "footer.php";
?>