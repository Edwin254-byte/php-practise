<?php
    session_start();
    if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 1)){
        header("Location: login.php"); 
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap link -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Template for interactive webpage</title>
</head>
<body>
<div class="container" style="margin-top:30px">
    <!-- Header Section -->
    <header class="jumbotron text-center row"
    style="margin-bottom:2px; background: linear-gradient(white, #0073e6); padding:20px;">
        <?php include('admin-header.php'); ?>
    </header>
    <!-- Body Section -->
    <div class="row" style="padding-left: 0px;">
        <!-- Left-side Column Menu Section -->
        <nav class="col-sm-2">
            <ul class="nav nav-pills flex-column">
                <?php include('nav.php'); ?>
            </ul>
        </nav>
        <!-- Center Column Content Section -->
        <div class="col-sm-8">
            <h2 class="text-center">These are the registered users</h2>
            <?php include "process_admin_view_users.php"?>
        </div>
        <!-- Right-side Column Content Section -->
        <aside class="col-sm-2">
            <?php include('info-col.php'); ?>
        </aside>
    </div>
    <!-- Footer Content Section -->
    <footer class="jumbotron text-center row" style="padding-bottom:1px; padding-top:8px;">
        <?php include('footer.php'); ?>
    </footer>
</div>
</body>
</html>
