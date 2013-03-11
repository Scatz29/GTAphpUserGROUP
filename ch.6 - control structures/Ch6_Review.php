<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html"; charset=utf-8/>
    <title>Ch. 6 Review Questions - Control Structures</title>
</head>

<body>
<h1>Ch. 6 Review Questions - Control Structures</h1>

    <ul>
        <li><strong>Why is it important to have a user confirm their password during the registration process?</strong>
            <ul>
                <li>It's important to have a user confirm their password during the registration process because password input types hide the actual text a user inputs and you want the user to be sure they entered the password they meant to enter by confirming it a second time.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>What is the basic structure of an <code>if</code> conditional in PHP?  An <code>if-else</code> conditional?  An <code>if-elseif</code>?  An <code>if-elseif-else</code>?</strong>
            <ul>
                <li>The basic structure of an <code>if</code> conditional in PHP is: <code>if (condition) {statement(s);}</code></li>
                <li>The basic structure of an <code>if-else</code> conditional in PHP is: <code>if (condition) {statement(s);} else {other_statement(s);}</code></li>
                <li>The basic structure of an <code>if-elseif</code> conditional in PHP is: <code>if (condition1) {statement(s);} elseif (condition2) {other_statement(s);}</code></li>
                <li>The basic structure of an <code>if-elseif-else</code> conditional in PHP is: <code>if (condition1) {statement(s);} elseif (condition2) {other_statement(s);} else {other_other_statement(s);}</code></li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>What are the differences between the <em>empty()</em> and <em>isset()</em> functions?</strong>
            <ul>
                <li>The differences between the <em>empty()</em> and <em>isset()</em> functions are that with <em>empty()</em> you are just checking to see if a variable has an "empty" value (either nothing being entered, a value of 0, or a value of FALSE) and with <em>isset()</em> you are checking if a variable returns TRUE if a variable has any value (including 0, FALSE, or an empty string).</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>What is the assignment operator?  What is the equality operator?</strong>
            <ul>
                <li>The assignment operator is "=".</li>
                <li>The equality operator is "==".</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>Without knowing anything about <em>$var</em>, will the following conditional be TRUE or FALSE?  Why? <br />

        <code>if ($var = 'donut') {</code></strong>
            <ul>
                <li>Even without knowing anything about <em>$var</em>, the conditional is TRUE. </li>
                <li>It is TRUE because the assignment operator is being used to give <em>$var</em> the value of 'donut'.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>What do these operators mean?<br /></strong>
          <ol>
              <li>&&</li>
                  <ul><li>&& means "AND"</li></ul>
              <li>||</li>
                  <ul><li>|| means "OR"</li> </ul>
              <li>!</li>
                  <ul><li>! means "NOT"</li></ul>
          </ol>
        </li>
    </ul>

    <ul>
        <li><strong>What is the syntax of a <code>switch</code> conditional>  When is a <code>switch</code> most commonly used?</strong>
            <ul>
                <li>The syntax code for a switch conditional is <br />
                <code>switch ($var) {
                  case value1:
                        statement(s)1;
                        break;
                  case value2:
                        statement(s)2;
                        break;
                  default:
                        statement(s)3;
                        break;
                }</code></li>
                <li>Switch is most commonly used when you want to simplify complicated if-elseif conditionals.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>What is the syntax of a <code>for</code> loop?</strong>
            <ul>
                <li>The syntax of a for loops is <br />
                <code>for (initial expression; condition; closing expression) {statement(s);}</code></li>
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