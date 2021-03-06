<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html"; charset=utf-8/>
    <title>Login</title>
</head>

<body>
<h1>Login</h1>

<?php
// Scripte 11.8 - login.php
/* This script logs a user in by checking the stored values in text file. */



// Define page title as a constant and include header file
define ('TITLE', 'Login');
// No included header or template files for this example 


// Identify the file to use:
$file = 'C:\xampp\users\users.txt'; // The value of $file should be the same as that in register.php

// Check whether the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    // Handle the form.

    // Create dummy variable to use as a flag:
    $loggedin = FALSE; // Not currently logged in.

    // Enable auto_detect_line_settings:
    ini_set('auto_detect_line_endings', 1);

    // Open the file:
    $fp = fopen($file, 'rb');

    // Loop through the file:
    while ($line = fgetcsv($fp, 200, "\t"))
    {
        // Check the file data against the submitted data:
        if ( ($line[0] == $_POST['username']) AND ($line[1] == md5(trim($_POST['password']))))
        {
            $loggedin = TRUE; // Correct username/password combination.

            // Stop looping through the file:
            break;

        } // End of IF.

     } // End of WHILE.

     fclose($fp); // Close the file.

     // Print a message:
     if ($loggedin)
     {
        // Do session stuff:
        session_start();
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['loggedin'] = time();
        // Redirect the user to the welcome page!
        ob_end_clean(); // Destroy the buffer!
        header('Location: login.php');  // Just redirect back to login page for now
        exit();
        print '<p>You are now logged in.</p>';
     }
     else
     {
        print '<p style="color: red;">The username and password you entered do not match those on file.</p>';
     }


}
else
{
    // Display the form.
    // Leave PHP and display the form:

?>

<form action="login.php" method="post">
    <p>Username: <input type="text" name="username" size="20" /></p>
    <p>Password: <input type="password" name="password" size="20" /></p>
    <input type="submit" name="submit" value="Login" />
</form>

<?php } // end of submission IF. ?>
</body>

</html>