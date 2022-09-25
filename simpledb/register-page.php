<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap link -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="verify.js"></script>
    <title>Register</title>
</head>
<body>
    <div class="container" style="margin-top:30px">
        <!-- header section -->
        <header class="jumbtron row text-center" style="margin-bottom: 2px; background:linear-gradient(white,#0073e6); padding:20px;">
            <?php include('header.php'); ?>
        </header>

        <!-- Body section -->
        <div class="row" style="padding-left: 0px">
            <nav class="col-sm-2">
                <ul class="nav nav-pills flex-column">
                    <?php include('nav.php'); ?>
                </ul>
            </nav>
            <!-- validate input -->
            <?php
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    require('process-register-page.php');
                }
            ?>
            <div class="col-sm-8">
                <h2 class="text-center">Register</h2>
                <form action="register-page.php" method="post" onsubmit="return checked()">
                    <!-- first name details -->
                    <div class="form-group row my-4">
                       <label for="first_name" class="col-sm-4 col-form-label">
                            FIRST NAME:
                        </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" maxlength="30" required value="<?php if(isset($_POST['first_name'])) echo $_POST['first_name'];?>"> 
                        </div> 
                    </div>
                    <!-- last name details -->
                    <div class="form-group row my-4">
                       <label for="last_name" class="col-sm-4 col-form-label">
                            LAST NAME:
                        </label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" maxlength="40" required value="<?php if(isset($_POST['last_name'])) echo $_POST['last_name'];?>"> 
                        </div> 
                    </div>

                    <!-- email details -->
                    <div class="form-group row my-4">
                       <label for="email" class="col-sm-4 col-form-label">
                            EMAIL:
                        </label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email" name="email" placeholder="E-Mail" maxlength="60" required value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>"> 
                        </div> 
                    </div>
                    <!-- password 1 details -->
                    <div class="form-group row my-4">
                       <label for="password1" class="col-sm-4 col-form-label">
                            PASSWORD:
                        </label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="password1" name="password1" placeholder="password" minlength="8" maxlength="12" required value="<?php if(isset($_POST['password1'])) echo $_POST['password1'];?>"> 
                            <span id="message">Between 8 and 12 characters</span>
                        </div> 
                    </div>
                    <!-- password 2 details -->
                    <div class="form-group row my-4">
                       <label for="password2" class="col-sm-4 col-form-label">
                            CONFIRM PASSWORD:
                        </label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm password" minlength="8"maxlength="12" required value="<?php if(isset($_POST['password2'])) echo $_POST['password2'];?>"> 
                        </div> 
                    </div>
                    <!-- submit form -->
                    <div class="form-group row my-4">
                        <div class="col-sm-12">
                            <input type="submit" id="submit" class="btn btn-primary" name="submit" value="Register">
                        </div>
                    </div>
                </form>
            </div>
            <!-- right side column section -->
            <?php
                if(!isset($errorstring)){
                    echo '<aside class="col-sm-2">';
                    include('info-col.php');
                    echo '</aside>';
                    echo '</div>';
                    echo '<footer class="jumbotron text-center row col-sm-14" style="padding-bottom:1px; padding-top:8px;">';
                } else{
                    echo '<footer class="jumbotron text-center row col-sm-14" style="padding-bottom:1px; padding-top:8px;">';
                }
                include('footer.php');
            ?>
        </div>
    </div>
</body>
</html>