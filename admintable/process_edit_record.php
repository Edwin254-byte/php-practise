<?php
try{
    // After clicking the Edit link in the found_record.php page.
    // This code is exeuted
    // The code looks for a valid user ID, either through SET or POST: 
    if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) {
        // From view_users.php
        $id = htmlspecialchars($_GET['id'], ENT_QUOTES);
    } elseif ( (isset($_POST['id'])) && (is_numeric($_POST['id'])) ) {
        // Form submission.
        $id = htmlspecialchars($_POST['id'], ENT_QUOTES);
    } else { // No valid ID, kill the script.
        echo '<p class="text-center">This page has been accessed in error.</p>'; 
        include ('footer.php');
        exit();
    } 

    require ('./mysqli_connect.php');
    // Has the form been submitted?
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $errors = array();
        // Look for the first name:	#2
        $first_name = filter_var( $_POST['first_name'], FILTER_SANITIZE_STRING); 
        if (empty($first_name)) {
            $errors[] = 'You forgot to enter your first name.';
        }
        // Look for the last name:
        $last_name = filter_var( $_POST['last_name'], FILTER_SANITIZE_STRING); 
        if (empty($last_name)) {
            $errors[] = 'You forgot to enter your last name.';
        }
        // Look for the email address:
        $email = filter_var( $_POST['email'], FILTER_SANITIZE_EMAIL);
        if ((empty($email)) || (!filter_var($email, FILTER_VALIDATE_EMAIL))) {
            $errors[] = 'You forgot to enter your email address';
            $errors[] = ' or the e-mail format is incorrect.';
        }
        if (empty($errors)) { // If everything's OK.	#3
            $q = mysqli_stmt_init($dbcon);
            $query = 'SELECT user_id FROM users WHERE email=? AND user_id !=?'; 
            mysqli_stmt_prepare($q, $query);
            // bind $id to SQL Statement 
            mysqli_stmt_bind_param($q, 'si', $email, $id);
            // execute query
            mysqli_stmt_execute($q);
            $result = mysqli_stmt_get_result($q);

            if (mysqli_num_rows($result) == 0) {
                // e-mail does not exist in another record	#4
                $query = 'UPDATE users SET first_name=?, last_name=?, email=?';
                $query .= ' WHERE user_id=? LIMIT 1';
                $q = mysqli_stmt_init($dbcon); 
                mysqli_stmt_prepare($q, $query);
                // bind values to SQL Statement
                mysqli_stmt_bind_param($q, 'sssi', $first_name, $last_name, $email, $id);
                // execute query
                mysqli_stmt_execute($q);
                if (mysqli_stmt_affected_rows($q) == 1) { // Update OK
                // Echo a message if the edit was satisfactory: 
                    echo '<h3 class="text-center">The user has been edited.</h3>';
                } else { // Echo a message if the query failed. 
                    echo '<p class="text-center">The user could not be edited due '; 
                    echo 'to a system error.';
                    echo ' We apologize for any inconvenience.</p>'; // Public message.
                    //echo '<p>' . mysqli error($dbcon) . '<br />Query: ' . $q . '</p>';
                    // Debugging message.
                    // Message above is only for debug and should not display SQL in live //mode
                } 
            } else { // Already registered.
                echo '<p class="text-center">The email address has '; 
                echo 'already been registered.</p>';
            }
        } else { // Display the errors.
            echo '<p class="text-center">The following error(s) occurred:<br />';
            foreach ($errors as $msg) { //  Echo  each  error.  
                echo " - $msg<br />\n";
            }
            echo '</p><p>Please try again.</p>';
            } // End of if (empty($errors))section.
        } // End of the conditionals
        // Select the user's information to display in textboxes:	
        $q = mysqli_stmt_init($dbcon);
        $query = "SELECT first_name, last_name, email FROM users WHERE user_id=?"; 
        mysqli_stmt_prepare($q, $query);
        // bind $id to SQL Statement 
        mysqli_stmt_bind_param($q, 'i', $id);
        // execute query 
        mysqli_stmt_execute($q);
        $result = mysqli_stmt_get_result($q);
        $row = mysqli_fetch_array($result, MYSQLI_NUM);
    if (mysqli_num_rows($result) == 1) { // Valid user ID, display the form.
    // Get the user's information:
    // Create the form:
    ?>

    <h2 class="h2 text-center">Edit Record</h2>
    <form action="edit_user.php" method="post" name="editform" id="editform">
        <div class="form-group row my-3">
            <label for="first_name" class="col-sm-4 col-form-label"> First Name:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" maxlength="30" required
                value="<?php echo htmlspecialchars($row[0], ENT_QUOTES); ?>" >
            </div>
        </div>
        <div class="form-group row my-3">
            <label for="last name" class="col-sm-4 col-form-label"> Last Name:</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" maxlength="40" required
                value="<?php echo htmlspecialchars($row[1], ENT_QUOTES); ?>">
            </div>
        </div>
        <div class="form-group row my-3">
            <label for="email" class="col-sm-4 col-form-label">E-mail:</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" id="email" name="email"placeholder="E-mail" maxlength="60" required
                value="<?php echo htmlspecialchars($row[2], ENT_QUOTES); ?>">
            </div>
        </div>
        <input type="hidden" name="id" value=" <?php echo $id	?>" />
        <div class="form-group row">
            <label for=" class="col-sm-4 col-form-label"></label>
            <div class="col-sm-8">
                <input id="submit" class="btn btn-primary" type="submit" name="submit" value="Register">
            </div>
        </div>
    </form>

    <?php
    } else { // The user could not be validated
        echo '<p class="text-center">This page has been accessed in error.</p>';

        mysqli_stmt_free_result($q); 
        mysqli_close($dbcon);
    }
}catch (Exception $e){
    print "The system is busy. Please try later";
    print "An Exception occurred. Message: " . $e->getMessage(); 
}catch(Error $e){
    print "The system is currently busy. Please try later";
    print "An Error occurred. Message: " . $e->getMessage();
}
?>