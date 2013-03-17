<?php
// Pursue Ch. 9 - logout.php
/* This is the logout page.  It destroys the session information */

// Name and start the session:
session_name('Logout');
session_start();

 // Reset the session array:
$_SESSION = array();

// Delete the session variable:
session_destroy();

// Define page title and include header file
define('TITLE', 'Logout');
include ('templates/header.html');

?>

<!-- Make page content -->
<h2>Welcome to the J.D. Salinger Fan Club!</h2>
<p>You are now logged out.</p>
<p>Thank you for using this site.  We hope that you liked it. <br />
Blah, blah, blah....
Blah, blah, blah....</p>