<?php
// Pursue Ch. 9 - customize.php

// Name and start session:
session_name('Customize');
session_start();

// Handle the form if it has been submitted:
if (isset($_POST['font_size'], $_POST['font_color']))
{
    // Send the cookies:
    setcookie('font_size', $_POST['font_size'], time()+10000000, '/', '', 0);
    setcookie('font_color', $_POST['font_color'], time()+10000000, '/', '', 0);

    // Message to be printed later:
    $msg = '<p>Your settings have been entered!  Click <a href="customize.php">here</a> to refresh the page and see them in action.</p>';
} // End of submitted IF.

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html"; charset=utf-8/>
    <title>Customize Your Settings</title>
    <style type="text/css">
        body {

        <?php
          // Update page to reflect applied user preferences if submitted with $_POST array

          // Check for a font_size value:
          if (isset($_COOKIE['font_size']))
          {
              print "\t\tfont-size: " . htmlentities($_COOKIE['font_size']) . ";\n";
          }
          elseif (isset($_POST['font_size']))
          {
              print "\t\tfont-size: " . htmlentities($_POST['font_size']) . ";\n";
          }
          else
          {
              print "\t\tfont-size: medium;";
          }

          // Check for a font_color value:
          if (isset($_COOKIE['font_color']))
          {
              print "\t\tcolor: #" . htmlentities($_COOKIE['font_color']) . ";\n";
          }
          elseif (isset($_POST['font_color']))
          {
              print "\t\tcolor: #" . htmlentities($_POST['font_color']) . ";\n";
          }
          else
          {
              print "\t\tcolor: #000;";
          }

          ?>
        }

    </style>
</head>

<body>
<?php
// If cookies are sent, print message.
if (isset($msg))
{
    print $msg;
}
?>

<!-- Begin HTML form -->
<p>Use this form to set your preferences:</p>

<form action="customize.php" method="post">
    <select name="font_size">
        <option value="">Font Size</option>
        <option value="xx-small" <?php if (isset($_POST['font_size']) && $_POST['font_size'] == "xx-small") {print "selected";} elseif (isset($_COOKIE['font_size']) && $_COOKIE['font_size'] == "xx-small") {print "selected";} ?>>xx-small</option>
        <option value="x-small" <?php if (isset($_POST['font_size']) && $_POST['font_size'] == "x-small") {print "selected";} elseif (isset($_COOKIE['font_size']) && $_COOKIE['font_size'] == "x-small") {print "selected";} ?>>x-small</option>
        <option value="small" <?php if (isset($_POST['font_size']) && $_POST['font_size'] == "small") {print "selected";} elseif (isset($_COOKIE['font_size']) && $_COOKIE['font_size'] == "small") {print "selected";} ?>>small</option>
        <option value="medium" <?php if (isset($_POST['font_size']) && $_POST['font_size'] == "medium") {print "selected";} elseif (isset($_COOKIE['font_size']) && $_COOKIE['font_size'] == "medium") {print "selected";} ?>>medium</option>
        <option value="large" <?php if (isset($_POST['font_size']) && $_POST['font_size'] == "large") {print "selected";} elseif (isset($_COOKIE['font_size']) && $_COOKIE['font_size'] == "large") {print "selected";} ?>>large</option>
        <option value="x-large" <?php if (isset($_POST['font_size']) && $_POST['font_size'] == "x-large") {print "selected";} elseif (isset($_COOKIE['font_size']) && $_COOKIE['font_size'] == "x-large") {print "selected";} ?>>x-large</option>
        <option value="xx-large" <?php if (isset($_POST['font_size']) && $_POST['font_size'] == "xx-large") {print "selected";} elseif (isset($_COOKIE['font_size']) && $_COOKIE['font_size'] == "xx-large") {print "selected";} ?>>xx-large</option>
    </select>

    <select name="font_color">
        <option value="">Font Color</option>
        <option value="999" <?php if (isset($_POST['font_color']) && $_POST['font_color'] == "999") {print "selected";} elseif (isset($_COOKIE['font_color']) && $_COOKIE['font_color'] == "999") {print "selected";} ?>>Gray</option>
        <option value="0c0" <?php if (isset($_POST['font_color']) && $_POST['font_color'] == "0c0") {print "selected";} elseif (isset($_COOKIE['font_color']) && $_COOKIE['font_color'] == "0c0") {print "selected";} ?>>Green</option>
        <option value="00f" <?php if (isset($_POST['font_color']) && $_POST['font_color'] == "00f") {print "selected";} elseif (isset($_COOKIE['font_color']) && $_COOKIE['font_color'] == "00f") {print "selected";} ?>>Blue</option>
        <option value="c00" <?php if (isset($_POST['font_color']) && $_POST['font_color'] == "c00") {print "selected";} elseif (isset($_COOKIE['font_color']) && $_COOKIE['font_color'] == "c00") {print "selected";} ?>>Red</option>
        <option value="000" <?php if (isset($_POST['font_color']) && $_POST['font_color'] == "000") {print "selected";} elseif (isset($_COOKIE['font_color']) && $_COOKIE['font_color'] == "000") {print "selected";} ?>>Black</option>
    </select>

    <input type="submit" name="submit" value="Set My Preferences" />
</form>

    <p><a href="reset.php">Reset Your Settings</a></p>

    <!-- Add some text to strictly show the effects of the cookie changes-->
    <p>Cow bacon turkey pastrami beef ribs, pork belly shank shoulder bresaola ball tip shankle filet mignon capicola beef ground round. Shankle short ribs beef ribs pig, tenderloin ham hock doner meatball venison ribeye sirloin spare ribs ham. Beef pork pork chop, turkey ham biltong kielbasa ribeye corned beef short loin filet mignon ham hock drumstick fatback. Jerky corned beef pastrami doner filet mignon pork.</p>

</body>

</html>