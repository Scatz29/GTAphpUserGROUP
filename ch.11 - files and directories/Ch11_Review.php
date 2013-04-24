<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html"; charset=utf-8/>
    <title>Ch. 11 Review Questions - Files and Directories</title>
</head>

<body>
<h1>Ch. 11 Review Questions - Files and Directories</h1>

    <ul>
        <li><strong>What version of PHP are you running?</strong>
            <ul>
                <li>I'm running version 5.4.2 of PHP.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>What steps did you need to take to make a file or directory writable for your server?</strong>
            <ul>
                <li>I didn't need to take any additional steps to make a file or directory writable for my server as my version of xampp/php was already properly configured with the correct permissions turned on.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>What is the <em>Web root directory</em> (as a concept)?  What is the Web root directory for your Web site (whether on your own computer or on a live server)?</strong>
            <ul>
                <li>The Web Root Directory is the directory where your server looks for files that you want to put on the web.</li>
                <li>The Web Root Directory for my web site is C:\xampp\htdocs.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>What are two ways you can write data to a file?</strong>
            <ul>
                <li>You can write data to a file using 1) file_put_contents() function with newer versions of PHP, i.e. file_put_contents($file, $data . PHP_EOL, FILE_APPEND); or by 2) Using the legacy approach for older versions of PHP which is to first, open the file; second, write your data to it; and third, close the file; i.e. $fp = fopen($file, mode); fwrite($fp, $data . PHP_EOL); fclose($fp);</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>How do you append new data to existing files (as opposed to replacing any existing data)?</strong>
            <ul>
                <li>You use the FILE_APPEND constant as a third argument when you have data that's already in the file that you'd like to append new data to it instead of replacing it.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>How do you ensure that new data is placed on it's own line?</strong>
            <ul>
                <li>You can ensure that new data is placed on it's own line by using the special PHP constant PHP_EOL, which represents the correct end-of-line character sequence (e.g., \n or \r\n) for the current operating system.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>In order for a form to accept file uploads, what attributes must the opening <em>form</em> tag have?</strong>
            <ul>
                <li>In order for a form to accept file uploads, the opening form tag must have <em>enctype="multipart/form-data"</em> (which lets the browser know to expect different types of form data), it must always use the POST method, a special hidden input type should be added to the form (which tells the browser how large a file, in bytes, can be uploaded), and the <em>file</em> tag is used to create the necessary form field (which allows the user to select a file on their computer, which upon submission, will be uploaded to the server.  Once this has occured, you can then use PHP to handle the file).</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>In what variable will a PHP script be able to access an uploaded file?  What function is used to move the file to its final destination on the server?</strong>
            <ul>
                <li>The $_FILES variable  allows a PHP script to access an uploaded file.</li>
                <li>The move_uploaded_file() function is used to move the file to its final destination on the server.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>How does the <em>fgetcsv()</em> function differ from <em>file()</em> or <em>file_get_contents()</em>?</strong>
            <ul>
                <li>The fgetcsv() function differs from the file() or file_get_contents() functions in that it only reads parts of a file.  If you have data stored in a delineated format (commonly using a comma, hence a CSV- comma-separated-values- format), this functions breaks strings into parts, using the marked separator, and returns an array.  </li>
            </ul>
        </li>
    </ul>




</body>

</html>