<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html"; charset=utf-8/>
    <title>Registration</title>
    <style type="text/css" media="screen">
        .error {
            color: red;
        }
        .red {
            color: red;
        }
        .yellow {
            color: yellow;
        }
        .green {
            color: green;
        }
        .blue {
            color: blue;
        }

    </style>
</head>

<body>
<h1>Registration Results</h1>

<?php
// All Pursue Steps and Scripts are found in this file

/*
* Big thanks to Teresa Chin for helping bring some clarity as to what was needed to be done as it became clearer to me each time I combed over her code!
*/

/* This script receives seven values from register.php: email, password, confirm, year, terms, color, submit */
// Error Handling
ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);

// Script for Debugging - prints out the values of the received variables: email, year, terms, color
print_r($_POST);

// Flag variable to track success:
$okay = TRUE;

// Validate Email Address
if (empty($_POST['email']))
{
    print '<p class="error">Please enter your email address.</p>';
    $okay = FALSE;
}

// Validate Password
if (empty($_POST['password']))
  {
      print '<p class="error">Please enter your password.</p>';
      $okay = FALSE;
  }

// Check the two passwords for equality:
if ($_POST['password'] != $_POST['confirm'])
    {
        print '<p class="error">Your confirmed password does not match the original password.</p>';
        $okay = FALSE;
    }

// Script adds validation for birthday for XX/DD/YYYY format
// Validate Birth Year
if (is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4))
    {
        // Create variable for the current year using date() function
        $year = date('Y');
        // Check that they were born before 2013
        if ($_POST['year'] < $year)
            {
                $age = $year - $_POST['year'];
                // Calculate age this year.
            }
        else
            {
                print '<p class="error">Either you entered your birth year wrong or you come from the future!</p>';
                $okay = FALSE;
            } // End of 2nd conditional


    }
else
    {
        // Else for 1st conditional
        print '<p class="error">Please enter the year you were born as four digits.</p>';
        $okay = FALSE;
    } // End of 1st conditional
// Validate month
if (empty($_POST['month']))
    {
        print '<p class="error">Please select the month of your birthday.</p>';
        $okay = FALSE;
    }
else
{
    $month = sprintf("%02d", $_POST['month']);
}
// Validate day
if (empty($_POST['day']))
    {
        print '<p class="error">Please select the day of your birthday.</p>';
        $okay = FALSE;
    }
else
{
    $day = sprintf("%02d", $_POST['day']);
}
// Variable to format birthday as XX/DD/YYYY
$birthday = $month . "/" . $day . "/" . $_POST['year'];

// Validate the terms (checkbox):
if (!isset($_POST['terms']))
    {
        print '<p class="error">You must accept the terms.</p>';
        $okay = FALSE;
    }

// Validate the colors
switch ($_POST['color']){
    case 'red':
        $color_type = 'primary';
        break;
    case 'yellow':
        $color_type = 'primary';
        break;
    case 'green':
        $color_type = 'secondary';
        break;
    case 'blue':
        $color_type = 'primary';
        break;
    default:
        print '<p class ="error">Please select your favorite color.</p>';
        $okay = FALSE;
        break;
}// End of color validation Switch

// Switch Statement for text color to match color chosen
switch ($_POST['color'])
{
    case 'red':
        $color = 'class ="red"';
        break;
    case 'yellow':
        $color = 'class ="yellow"';
        break;
    case 'green':
        $color = 'class ="green"';
        break;
    case 'blue':
        $color = 'class ="blue"';
        break;
    default:
        print '<p class ="error">Please select your favorite color.</p>';
        $okay = FALSE;
        break;
}// End of color chosen Switch

// Local variable for the color users choose
$color = $_POST['color'];
// If there were no errors, print a success message:
if ($okay)
{
    print '<p>You have successfully registered (but not really).</p>';
    print "<p>You will turn $age this year.</p>";
    print "<p>Your favorite color <span style = \"color: $color\">" . $color . "</span> is a $color_type color.</p>";
    print "<p>Your birthday is $birthday.</p>";
}

?>


</body>

</html>