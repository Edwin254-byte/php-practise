<!DOCTYPE html>
<html lang="en">
<head>
    <title>Template for an interactive web page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap link -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top:30px">
        <!-- Header Section-->
        <header class="jumbotron text-center row" style="margin-bottom:2px;background:linear-gradient(white, #0073e6); padding:20px;">
            <?php include('thanks-header.php'); ?>
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
            <div class="col-sm-8 text-center">
                <h2>Thank you for registering</h2>
                On the Home Page, you will now be able to login and add new quotes to the message board.
                <!-- login does not yet work, nut will in the next chapter-->
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
