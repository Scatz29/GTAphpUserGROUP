<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html"; charset=utf-8/>
    <title>Ch. 7 Review Questions - Using Arrays</title>
</head>

<body>
<h1>Ch. 7 Review Questions - Using Arrays</h1>

     <ul>
        <li><strong>What's the difference between and <em>indexed</em> array and an <em>associative</em> array?</strong>
            <ul>
                <li>The difference between an indexed and an associative array is that for an indexed array you will have a number for the array's key and for an associative you will have a string for the array's key.</li>
            </ul>
        </li>
     </ul>

     <ul>
        <li><strong>When should you use quotation marks for an array's key or value?  When shouldn't you?</strong>
            <ul>
                <li>You should use quotation marks for an array's key or value when they are strings.</li>
                <li>You should not use quotation marks for an array's key or value when they are numbers, variables, or constants.</li>
            </ul>
        </li>
     </ul>

     <ul>
        <li><strong>How do you print a specific array element?  How do you print every array element?</strong>
            <ul>
                <li>You print a specific array element by referring to it's index like so:  print "The first item is $array[0]";</li>
                <li>You print every array element using a foreach loop that loops through every element of an array.</li>
            </ul>
        </li>
     </ul>

     <ul>
        <li><strong>What happens if you don't use the square brackets when adding an element to an array?</strong>
            <ul>
                <li>If you don't use square brackets when adding an element to an array, the new value will replace the entire existing array, leaving you with a simple string or number.  $array = 'Jim', this turns the actual array into a simple variable named $array and assigns it a value of 'Jim'.</li>
            </ul>
        </li>
     </ul>

     <ul>
        <li><strong>What function returns the number of elements in an array?</strong>
            <ul>
                <li>The count() or sizeof() functions return the number of elements in an array.</li>
            </ul>
        </li>
     </ul>

     <ul>
        <li><strong>When must you use curly brackets for printing array elements?</strong>
            <ul>
                <li>You must use curly brackets for printing array elements if you have strings for indexes as it fixes a conflict created by the quotation marks surrounding the string.  Wrapping an array element reference in curly brackets is one way to avoid parse errors.</li>
            </ul>
        </li>
     </ul>

     <ul>
        <li><strong>What is the difference between the <em>sort()</em> and <em>asort()</em> functions?  Between <em>sort()</em> and <em>rsort()</em>?</strong>
            <ul>
                <li>The difference between the sort() and asort() functions are that with sort(), you sort the values without regard to the keys and with asort() the keys are maintained.</li>
                <li>The difference between the sort() and rsort() functions are that with both of them you sort them without regard to the keys but rsort() sorts them in reverse order.</li>
            </ul>
        </li>
     </ul>

     <ul>
        <li><strong>What is the syntax for <em>explode()</em>?  For <em>implode()</em>?</strong>
            <ul>
                <li>The syntax for explode() is: $array = explode(separator, $string); $array = explode(' ', $string); or $array = explode(',', $string);</li>
                <li>The syntax for implode() is: $string = implode(glue, $array); $string = implode(' ', $array); or $string = implode(',', $array);</li>
            </ul>
        </li>
     </ul>



</body>

</html>