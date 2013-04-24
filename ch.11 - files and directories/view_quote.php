<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html"; charset=utf-8/>
    <title>View A Quotation</title>
</head>

<body>
<h1>Random Quotation</h1>
<?php
// Script 11.3 - view_quote.php
/* This script displays and handles an HTML form.  This script reads in a file and prints a random line from it. */

// Error Handling
ini_set('display_all', 1);
error_reporting(E_ALL | E_STRICT);

// Read the file's contents into an array using the file () function:
$data = file('../quotes.txt');

// Count the number of items in the array using the count() function:
$n = count($data);

// Pick 2 random items using the rand() function:
$rand = rand(0, ($n-1));

$rand2 = rand(0, ($n-1));

// Print the quotations:
print '<p>' . trim($data[$rand]) . '</p>';

print '<p>' . trim($data[$rand2]) . '</p>';

?>



</body>

</html>