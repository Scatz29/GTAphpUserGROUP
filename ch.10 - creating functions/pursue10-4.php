<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html"; charset=utf-8/>
    <title>Pursue10-4</title>
</head>

<body>
<?php
// Pursue10-4 will be a script that is a custom function
// This function will print out a custom welcome message after users login
function welcome ()
{
    if (empty($_POST['user']))
    {
        print '<p class="error">Please enter your username!</p>';
    }
    elseif (isset($_POST['user']))
    {
        print '<p>Welcome $_POST[\'user\']!</p>';
    }
    else
    {
        print '<p class="error">That username does not exist!  Please enter the correct username!</p>';
    }

}

welcome();
?>


</body>

</html>