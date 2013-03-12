<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html"; charset=utf-8/>
    <title>No Soup For You!</title>
</head>

<body>
<h1>Mmm...soups</h1>
<?php
// Rewrite of soups2.php for pursue section
// This script creates and prints out an array.
ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);

// Create the array:
$soups = array(
                'Monday'    => 'Clam Chowder',
                'Tuesday'   => 'White Chicken Chili',
                'Wednesday' => 'Vegetarian'
                );

// Count and print the current number of elements:
$count1 = count($soups);
print "<p>The soups array originally had " . count($soups) . " elements.</p>";

// Add 3 more items to existing array
$soups['Thursday'] = 'Chicken Noodle';
$soups['Friday'] = 'Tomato';
$soups['Saturday'] = 'Cream of Broccoli';

// Count and print the number of elements again:
$count2 = count($soups);
print "<p>After adding 3 more soups, the array now has " . count($soups) . " elements.</p>";

// Print contents of the array
print_r($soups);

?>



</body>

</html>