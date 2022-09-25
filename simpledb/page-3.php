<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Template for interactive webpage</title>
</head>
<body>
    <div class="container" style="margin-top:30px">
        <!-- header section -->
        <header class="jumbtron row text-center" style="margin-bottom: 2px; background:linear-gradient(white,#0073e6); padding:20px;">
            <?php include('header.php'); ?>
        </header>
        <!-- body section -->
        <div class="row" style="padding-left: 0px">
            <nav class="col-sm-2">
                <ul class="nav nav-pills flex-column">
                    <?php include('nav.php'); ?>
                </ul>
            </nav>

            <div class="col-sm-8">
                <h2 class="text-center">Currently at page 3...</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, mollitia est, commodi dolorem velit veniam, eveniet voluptatum quae accusamus quibusdam accusantium corporis possimus ipsa blanditiis perspiciatis rerum ipsum dolorum nisi eum quaerat assumenda culpa soluta dignissimos ullam. Eligendi enim possimus suscipit architecto quia quos autem corrupti in iusto quae tempore unde, doloremque cum atque maxime id adipisci perspiciatis eaque qui beatae voluptatibus, necessitatibus eum minus laborum. Dolore quia molestias ratione ea laborum veniam excepturi, itaque dolorum, iste a ducimus sed eius. Reiciendis, placeat veniam labore officiis, repellendus veritatis quis dignissimos ea eligendi suscipit qui sunt, expedita mollitia. Eos, sunt ut!</p>
            </div>

            <aside class="col-sm-2">
                <?php include('info-col.php'); ?>
            </aside>
        </div>

        <!-- footer section -->
        <footer class="jumbotron row text-center" style="padding-bottom:1px; padding-top:8px; ">
        <?php include('footer.php'); ?>
        </footer>
    </div>
</body>
</html>