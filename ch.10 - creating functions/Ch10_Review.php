<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html"; charset=utf-8/>
    <title>Ch. 10 Review Questions - Creating Functions</title>
</head>

<body>
<h1>Ch. 10 Review Questions - Creating Functions</h1>
    <ul>
        <li><strong>What is the basic syntax of a user-defined function?</strong>
            <ul>
                <li>The basic syntax of a user-defined function is function function_name() { statement(s);}.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>What naming rules must your own functions abide by?</strong>
            <ul>
                <li>You can use roughly the same naming rules for user-defined functions as you do with variables with the exception of leaving off the initial dollar sign.  Try to create meaningful function names though.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>What naming rules must function arguments abide by?</strong>
            <ul>
                <li>The naming rules function arguments must abide by are that they must be in the form of variables.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>How do you provide a default value for a function's argument?</strong>
            <ul>
                <li>You can provide a default value for a function's argument by assigning the value to the argument in the function definition.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>In the example code in the "Understanding Variable Scope" section of the chapter, why does the code use <em>\$n</em>?  What would happen if that backslash wasn't there?</strong>
            <ul>
                <li>The code uses \$n so that the literal $n will be printed out.</li>
                <li>If the backslash wasn't there, it would print out the value assigned to $n instead.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>What is variable scope?  What scope does a function argument variable have?</strong>
            <ul>
                <li>Variable scope is the realm in which a variable exists.</li>
                <li>The scope a function argument variable has is that it exists only within that function itself and aren't available outside of it.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>What scope does a variable in an included file have?  Note: This is a tricky one!</strong>
            <ul>
                <li>A variable in an included file has global scope.</li>
            </ul>
        </li>
    </ul>



</body>

</html>