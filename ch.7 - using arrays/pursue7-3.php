<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html"; charset=utf-8/>
    <title>I Have This Sorted Out</title>
</head>

<body>
<?php
// pursue 7-3.php is rewrite of list.php using foreach instead of implode(), but still prints each sorted word on its own line in the browser plus form validation
/* This script receives a string in $_POST['words'].  It then turns it into an array, sorts the array alphbetically, and reprints it. */

// Error Handling
ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);

// Validate that string has value entered
if (empty($_POST['words']))
{
    print "<p>Please enter names separated only by spaces!</p>";
}
else
{
    // Turn the incoming string into an array:
    $words_array = explode(' ', $_POST['words']);

    // Sort the array
    sort($words_array);

    // Print array and turn the array back into a string using foreach:
    print "<p>An alphabetized version of your list is: <br />";
    foreach ($words_array as $names => $name)
    {
        print "<p>$name</p>";
    }
}



?>


</body>

</html>