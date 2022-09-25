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

    <title>Administration Page</title>
</head>
<body>
<div class="container" style="margin-top:30px">
    <!-- Header Section-->
    <header class="jumbotron text-center row" style="margin-bottom:2px; background:linear-gradient(white, #0073e6); padding:20px;">
        <?php include('admin-header.php'); ?>
    </header>
    <!-- Body Section-->
    <div class="row" style="padding-left: 0px;">
        <!-- Left-side Column Menu Section-->
        <nav class="col-sm-2">
            <ul class="nav nav-pills flex-column">
                <?php include('nav.php'); ?>
            </ul>
        </nav>
        <!-- Center Column Content Section-->
        <div class="col-sm-8">
            <h2 class="text-center">This is the Administration Page</h2>
            <h3>You have permission to:</h3>
            <p>Edit and Delete a record</p>
            <p>Use the View Members button to page through all the members</p>
            <p>Use the Search button to locate a particular member</p>
            <p>Use the New Password button to change your password.</p>
        </div>
        <!-- Right-side Column Content Section-->
        <aside class="col-sm-2">
            <?php include('info-col.php'); ?>
        </aside>
    </div>
    <!-- Footer Content Section-->
    <footer class="jumbotron text-center row" style="padding-bottom:1px; padding-top:8px;">
        <?php include('footer.php'); ?>
    </footer>
</div>
</body>
</html>
