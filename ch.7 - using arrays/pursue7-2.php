<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html"; charset=utf-8/>
    <title>Pursue 7-2 Assignment</title>
</head>

<body>
<?php
// pursue7-2.php - script that creates and displays a multidimensional arrays
$rec_sports = array(1 =>'Ping Pong', 'Golf', 'Bowling', 'Swimming');

$contact_sports = array(1 => 'Basketball', 'Lacrosse', 'Soccer');

$collision_sports = array(1 => 'Hockey', 'Football', 'Rugby');

// display contents of the rec_sports array
print "<p>RECREATION SPORTS:</p>";
foreach($rec_sports as $type => $sport)
{
  print "<p>$type- $sport</p>\n";
}

// display contents of the contact_sports array
print "<p>CONTACT SPORTS:</p>";
foreach($contact_sports as $type => $sport)
{
  print "<p>$type- $sport</p>\n";
}

// display contents of the collision_sports array
print "<p>COLLISION SPORTS:</p>";
foreach($collision_sports as $type => $sport)
{
  print "<p>$type- $sport</p>\n";
}

?>



</body>

</html>