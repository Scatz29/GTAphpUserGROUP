<?php
// Script 8.9 - register.php
/* This page lets people register for the site (in theory). */

// Error Handling
ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);

// Define page title and include header
define ('TITLE', 'Register');
include ('templates/header.html');

// Introductory text and define CSS class:
print '<h2>Registration Form</h2>
    <p>Register so that you can take advantage of certain features like this, that, and the other thing.</p>';

print '<style type="text/css" media="screen"> .error {color: red}</style>';

// Check whether the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $problem = FALSE; // No problems so far.

    // Check for each value...
    if (empty($_POST['first_name']))
    {
        $problem = TRUE;
        print '<p class="error">Please enter your first name!</p>';
    }

    if (empty($_POST['last_name']))
    {
        $problem = TRUE;
        print '<p class="error">Please enter your last name!</p>';
    }

    if (empty($_POST['email']) || (substr_count($_POST['email'], '@') != 1))
    {
        $problem = TRUE;
        print '<p class="error">Please enter your email address!</p>';
    }

    if (empty($_POST['password1']))
    {
        $problem = TRUE;
        print '<p class="error">Please enter a password!</p>';
    }
    elseif ($_POST['password1'] != $_POST['password2'])
    {
        $problem = TRUE;
        print '<p class="error">Your password did not match your confirmed password!</p>';
    }

    if (!$problem)
    {
        // Print a message
        print '<p>You are now registered!<br />Okay, you are not really registered but...</p>';

        // Validate email with filter_var() and then send the email:

        if (filter_var($_POST['email'], 'FILTER_VALIDATE_EMAIL'))
        {
          $body = "After careful consideration, and boy do we mean CAREFUL consideration, you have been deemed worthy to join the J.D. Salinger fan club!  Your password is '{$_POST['password1']}' so if you lose it, don't come back since you would have just proven most of us right in the first place!";
            mail($_POST['email'],'We are making a huge mistake but we will give you a chance!', $body, 'From: admin@example.com');
        }

        // Clear the posted values:
        $_POST = array();
    }
    else
    {
        // Forgot a field.
        print '<p class="error">Please try again!</p>';
    }

} // End of handle form IF.

// Create the STICKY form:
?>

<form action ="register.php" method="post">
    <p>First Name: <input type="text" name="first_name" size="20" value="<?php if (isset($_POST['first_name'])) { print htmlspecialchars($_POST['first_name']); } ?>" /></p>
    <p>Last Name: <input type="text" name="last_name" size="20" value="<?php if (isset($_POST['last_name'])) { print htmlspecialchars($_POST['last_name']);} ?>" /></p>
    <p>Email Address: <input type="text" name="email" size="20" value="<?php if (isset($_POST['email'])) { print htmlspecialchars($_POST['email']);} ?>" /></p>
    <p>Password: <input type="password" name="password1" size="20" value="<?php if (isset($_POST['password1'])) {print htmlspecialchars($_POST['password1']);} ?>" /></p>
    <p>Confirm Password: <input type="password" name="password2" size="20" value="<?php if (isset($_POST['password2'])) { print htmlspecialchars($_POST['password2']);} ?>" /></p>
    <p><input type="submit" name="submit" value="Register!" /></p>
</form>

<?php include ('templates/footer.html'); ?>