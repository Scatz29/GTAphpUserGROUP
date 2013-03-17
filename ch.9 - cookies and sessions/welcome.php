<?php
// Pursue Ch. 9
/* This is the welcome page.  The user is redirected here after they successfully log in. */

// Pursue Ch. 9 -Name the session
session_name('Welcome')
// Need the session:
session_start();

// Define page title and include the header file:
define('TITLE', 'Welcome to the J.D. Salinger Fan Club!');
include ('templates/header.html');

// Print a greeting:
print '<h2>Welcome to the J.D. Salinger Fan Club!</h2>';
print "<p>Hello, " . $_SESSION['email'] . "!</p>";

// Print how long they've been logged in:
date_default_timezone_set('America/Chicago');

// Create variable for date() function
$date = date('g:i a', $_SESSION['loggedin']);
print "<p>You have been logged in since: " . $date . "</p>";

// Make a logout link:
print '<p><a href="logout.php">Click here to logout.</a></p>';

// Include html footer
include ('templates/footer.html');
?>