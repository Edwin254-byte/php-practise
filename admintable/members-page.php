<?php
    session_start();
    if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 0)){
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
    <!-- Header Section-->
    <header class="jumbotron text-center row" style="margin-bottom:2px; background:linear-gradient(white, #0073e6); padding:20px;">
        <?php include('members-header.php'); ?>
    </header>
    <!-- Body Section-->
    <div class="row" style="padding-left: Opx;">
        <!-- Left-side Column Menu Section-->
        <nav class="col-sm-2">
            <ul class="nav nav-pills flex-column">
                <?php include('nav.php'); ?>
            </ul>
        </nav>
        <!-- Center Column Content Section-->
        <div class="col-sm-8">
            <h2 class="text-center">This is the Member's Page</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel voluptates ad laborum officia vero! Vel, doloribus quibusdam. Reprehenderit eaque nemo natus doloribus sed, velit laborum consequuntur. Reiciendis corporis sunt blanditiis.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus ipsa natus quo fugit? Corporis vel ea sunt, voluptatibus ipsum iste, corrupti sed veniam quae doloremque praesentium, soluta quaerat? Aperiam, veritatis.
            </p>
            <p class="h3 text-center">Special offers to members only.</p>
            <p class="text-center"><strong>T-Shirts 700.00 ksh</strong></p>
            <img class="mx-auto d-block" src="polo-t.png" alt="Polo Shirt" height="150px" width="150px">
            <br>
        </div>

        <!-- Right-side Column Content Section-->
        <aside class="col-sm-2">
            <?php include('info-col.php'); ?>
        </aside>
    </div>
    <!-- Footer Content Section-->
    <footer class="jumbotron text-center row" style="padding-bottom:lpx; padding-top:8px;">
        <?php include('footer.php'); ?>
    </footer>
</div>
</body>
</html>
