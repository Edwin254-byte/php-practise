<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap link -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script defer src="./script-1.js"></script>

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
                <h2 class="text-center">Currently at page 4</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus est, voluptate atque sint ullam odio nihil iure tempore, sit, libero doloremque impedit blanditiis assumenda repudiandae. Error quaerat rerum nobis, laudantium placeat quas ipsam possimus consectetur id molestiae unde doloremque maxime facere, autem eius dolorem illum consequatur consequuntur. Incidunt tempore illum corrupti exercitationem ex deleniti amet optio consectetur aliquid corporis. Doloremque neque assumenda iure consequuntur alias beatae exercitationem. Non amet doloremque voluptas culpa ipsa sequi reiciendis eius delectus itaque id velit nemo, ab quia obcaecati dolorum ratione provident quibusdam quae recusandae explicabo mollitia blanditiis necessitatibus odit laudantium! Adipisci reprehenderit eius tempore.</p>
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