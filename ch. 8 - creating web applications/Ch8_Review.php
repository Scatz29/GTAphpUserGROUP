<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html"; charset=utf-8/>
    <title>Chapter 8 Review Questions - Creating Web Applications</title>
</head>

<body>
<h1>Chapter 8 Review Questions - Creating Web Applications</h1>

    <ul>
        <li><strong>What is the difference between <em>include()</em> and <em>required()</em>?</strong>
            <ul>
                <li>The difference between include() and require() is that with include() the script will continue to run if it can't find the file and with require() the script will stop/terminate all together when the file is not found.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>Why can you put PHP code into an included file even when it uses an <em>.html</em> extension?</strong>
            <ul>
                <li>You can put PHP code into an included file even when it uses an .html extension because anything outside of the included file will be treated as HTML anyway as if it were already part of the parent script, regardless of extension.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>What are the differences between <em>relative</em> and <em>absolute</em> references to a file?</strong>
            <ul>
                <li>The differences between relative and absolute references to a file are that a relative path indicates where a file is in relation to it's parent file i.e., include('file.php'); and an absolute path is a complete specific address i.e., include('C:inetpub\wwwfiles\file.php');.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>How do you define a constant?  Are constant names case-sensitive or case-insensitive?  How do you check if a constant has been defined?</strong>
            <ul>
                <li>Constants are defined without the dollar sign and usually in all caps, although not required and by using the define() function, i.e. define ('CONSTANT', value);.</li>
                <li>Constants are case-sensitive.</li>
                <li>You can check if a constant has been defined by using a conditional and if it hasn't, you can use a default value.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>What is the <em>epoch</em>?  What is a <em>timestamp</em>?</strong>
            <ul>
                <li>The epoch is January 1, 1970.</li>
                <li>A timestamp is a number representing how many seconds have passed since midnight on the epoch, January 1, 1970.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>What is the significance of <em>$_SERVER['REQUEST_METHOD']</em>?</strong>
            <ul>
                <li>The significance of $_SERVER['REQUEST_METHOD'] is that you can use it to check the $_SERVER array to see if a form has been submitted when using PHP to validate a form on the same page.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>How do you have a form element "remember" previously submitted values?</strong>
            <ul>
                <li>You can have a form element "remember" previously submitted values by making them "sticky" by setting the value attribute of text inputs.  The use of conditionals can greatly reduce problems and make it a better process overall.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>How can you see a PHP error that occurs within a form element (e.g., when presetting a form's element's value)?</strong>
            <ul>
                <li>You can see a PHP error that occurs within a form element by adding a CSS error class to make errors stand out and using conditionals.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>What does the <em>"headers already sent"</em> error mean?  How can it be prevented?</strong>
            <ul>
                <li>The "headers already sent" error means that text has already been sent to the browser when you are trying to use some other way to do so such as header(), setcookie(), and session_start().</li>
                <li>It can be prevented by using output buffering using the ob_start() function and at the conclusion of the script by calling the ob_end_flush() function.</li>
            </ul>
        </li>
    </ul>

    <!-- <ul>
        <li><strong></strong>
            <ul>
                <li></li>
            </ul>
        </li>
    </ul> -->



</body>

</html>