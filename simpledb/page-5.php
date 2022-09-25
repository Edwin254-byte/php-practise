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
                <h2 class="text-center">Page 5 content</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Delectus, sed, perferendis necessitatibus saepe optio debitis minus doloremque laboriosam temporibus, ullam totam hic fuga adipisci earum beatae repellendus quia quisquam laudantium soluta numquam dolor placeat iste. Excepturi quaerat quia facilis sit numquam eius sequi quas sapiente ipsam ex distinctio amet dolore dolor rerum praesentium, esse ea nihil quasi repellat. Odio, dolore facere doloribus sapiente consequuntur porro deleniti, aliquid eaque neque sit quo a laborum quas eius est iste dignissimos repellat nam asperiores unde in! Libero aperiam, eaque voluptatum ratione dignissimos suscipit facere quibusdam dolorem quis, ipsa odio fuga mollitia, enim sapiente.</p>
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