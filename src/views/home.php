<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: index');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Alfonso Lopez">
    <meta name="generator" content="">
    <title>Signin</title>
    <style>
        .container{
            
            
        }
    </style>

    <?php include('partials/header.php'); ?>
</head>

<body>
    <?php include('partials/ToggleThemeDown.php') ?>
    <?php include('partials/navbar.php') ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nesciunt non officia repellat dolorem cumque reprehenderit veritatis? Eum magni, sit fuga dolore odit beatae accusantium omnis ullam iste laboriosam tempora.</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nesciunt non officia repellat dolorem cumque reprehenderit veritatis? Eum magni, sit fuga dolore odit beatae accusantium omnis ullam iste laboriosam tempora.</p>
            </div>
        </div>
    </div>
   


    <?php include('partials/footer.php'); ?>
</body>

</html>