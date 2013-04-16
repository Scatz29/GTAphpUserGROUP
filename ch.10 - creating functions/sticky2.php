<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html"; charset=utf-8/>
    <title>Sticky Text Inputs</title>
</head>

<body>
<?php // Script 10.2 - sticky1.php
/* This script defines and calls a function that creates a sticky text input. */

// This function makes a sticky text input that requires 2 arguments be passed to it.
function make_text_input($name, $label, $type = 'text', $size= 20) // Script 10.3 - sticky2.php
{
    // Begin a paragraph and a label:
    print '<p><label>' . $label . ': ';

    // Begin the input:
    print '<input type="' . $type . '" name="' . $name . '" size="' . $size . '" ';

    // Pursue10-2 - rewrite make_text_input() function so that it can be told whether to look for an existing value in either $_POST or $_GET.
    // Add the value:
    if (isset($_POST[$name]))
    {
        print ' value="' . htmlspecialchars($_POST[$name]) . '"';
    }
    elseif (isset($_GET[$name]))
    {
        print ' value="' . htmlspecialchars($_GET[$name]) . '"';
    }//Pursue10-3 - create variation of make_text_input() function that can create a text or password input, depending on how the function is called.
    else
    {
        if (isset($_POST[$type]))
        {
            print '<input type="password" name="' . $type . '" size="' . $size . '"';
            //print ' value="' . htmlspecialchars($_POST[$password]) . '"';
        }
    }


    // Complete the input, the label and the paragraph:
    print ' /></label></p>';
} // End of make_text_input() function.

// Make the form:
print '<form action="" method="post">';

// Create some inputs:
make_text_input('first_name', 'First Name','text');
make_text_input('last_name', 'Last Name', 'text', 30);
make_text_input('email', 'Email Address', 'text', 50);
make_text_input ('password', 'Password', 'password', 30);

print '<input type="submit" name="submit" value="Register!" /></form>';
?>


</body>

</html>