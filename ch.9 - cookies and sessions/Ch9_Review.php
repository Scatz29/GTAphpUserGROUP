<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html"; charset=utf-8/>
    <title>Ch. 9 Review Quesions - Cookies and Sessions</title>
</head>

<body>
<h1>Ch. 9 Review Questions - Cookies and Sessions</h1>

    <ul>
        <li><strong>Where does a cookie store data?  Where does a session store data?  Which is generally more secure?</strong>
            <ul>
                <li>A cookie stores data in the client's browser but only the site that originally sent a cookie can read it.</li>
                <li>A session stores data on the server.</li>
                <li>Sessions are generally more secure because data isn't transmitted back and forth between the client and server repeatedly.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>Name two debugging techniques when trying to solve issues involving cookies.</strong>
            <ul>
                <li>One debugging technique when trying to solve cookie issues is to print out the variable values in your PHP scripts.</li>
                <li>Another debugging technique when trying to solve cookie issues is for you to know how to work with cookies in your web browser.  You'll want your browser to notify you when a cookie is being sent.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>How do the <em>path</em> and <em>domain</em> arguments to the <em>setcookie()</em> function affect the accessibility of the cookie?</strong>
            <ul>
                <li>The path and domain arguments affect the accessibility of the setcookie() function by limiting the cookie to a specific folder in a web site (the path) or to a specific domain.</li>
                <li>path example - setcookie(name, value, time()+3600, '/subfolder/');</li>
                <li>domain example - setcookie (name, value, time()+3600, '', 'forum.example.com');</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>How do you delete a cookie?</strong>
            <ul>
                <li>You delete a cookie by setting the cookie a second time and leaving the value blank or setting the value to FALSE. You can also set an expiration date that is in the past, i.e., setcookie ('username', FALSE, time()-600);</li>
                <li>delete cookie example - setcookie ('username', ''); or setcookie ('username', FALSE);</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>What function must every page call if it needs to assign or access session data?</strong>
            <ul>
                <li>Every page must call the session_start() function if it needs to assign or access session data.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>Why do sessions also use cookies (by default)?</strong>
            <ul>
                <li>Sessions also use cookies (by default) because the session_start() function will attempt to send a session ID cookie the first time the session is started and subsequent PHP pages will use this cookie to retrieve the session ID and access the session information.</li>
            </ul>
        </li>
    </ul>



</body>

</html>