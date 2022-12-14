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

    <title>Search users</title>
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
            <h2 class="h2 text-center">Search for a record</h2>
            <h6 class="text-center">Both names are required items</h6>
            <form action="view_found_record.php" method="post">
                <div class="form-group row my-3">
                    <label for="first name" class="col-sm-4 col-form-label">First Name:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" maxlength="30" required
                        value="<?php if (isset($_POST['first_name']))
                        echo htmlspecialchars($_POST['first_name'], ENT_QUOTES); ?>" >
                    </div>
                </div>
                <div class="form-group row my-3">
                    <label for="last_name" class="col-sm-4 col-form-label">Last Name:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" maxlength= "40" required
                        value="<?php if (isset($_POST['last_name']))
                        echo htmlspecialchars($_POST['last_name'], ENT_QUOTES); ?>">
                    </div>
                </div>
                <div class="form-group row my-3">
                    <label for="" class="col-sm-4 col-form-label"></label>
                    <div class="col-sm-8">
                        <input id="submit" class="btn btn-primary" type="submit" name="submit" value="Search">
                    </div>
                </div>
            </form>
        </div>
        <!-- Right-side Column Content Section -->
        <?php
            if(!isset($errorstring)) {
                echo '<aside class="col-sm-2">';
                include('info-col.php');
                echo	'</aside> ';
                echo ' </div> ' ;
                echo '<footer class="jumbotron text-center row col-sm-14" style="padding-bottom:1px; padding-top:8px;">';
            }else{
                echo '<footer class="jumbotron text-center col-sm-12" style="padding-bottom:1px; padding-top:8px;">';
            }
            include('footer.php');
        ?>
        </footer>
</div>
</body>
</html>
