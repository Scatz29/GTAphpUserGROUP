<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html"; charset=utf-8/>
    <title>Ch. 12 Review Questions</title>
</head>

<body>
<h1>Ch. 12 Review Questions</h1>

    <ul>
        <li><strong>What version of MySQL are you using?  What valuse do you personally use to connect to MySQL?</strong>
            <ul>
                <li>I am using MySQL Version 5.5 on my setup.</li>
                <li>The value I personally use to connect to MySQL is usually $db but I've stuck with $dbc for the exercises in this book.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>How does a PHP script connect to a MySQL server?  How does it disconnect?</strong>
            <ul>
                <li>A PHP script connects to a MySQL server by using the mysql_connect() function that uses the syntax of $dbc = mysql_connect('hostname', 'username', 'password');.</li>
                <li>A PHP script disconnect from a MySQL server by using the mysql_close() function that uses the syntax of mysql_close($dbc);.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>What is the error suppression operator?  What does it do?</strong>
            <ul>
                <li>The error suppression operator is the @ sign preceeding a function name and has the syntax of @function_name();.</li>
                <li>The error suppression operator (@) suppresses or prevents any error messages or warnings the function might invoke.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>What function returns MySQL-reported errors?</strong>
            <ul>
                <li>The function that returns MySQL-reported errors is mysql_error(); and has the syntax of mysql_error($dbc);.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>What debugging techniques should you use when having problems with a PHP script that interacts with MySQL?</strong>
            <ul>
                <li>The debugging techniques you should use when having problems with a PHP script that interacts with MySQL are to have your scripts give informative reports about errors that occur using the mysql_error() function or you may just want to us some PHP tools for handling errors such as the error suppression operator (@).</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>How do you select which database to use?</strong>
            <ul>
                <li>You select which database to use by using the mysql_select_db() function that uses the syntax of mysql_select_db('somedb', $dbc);.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>What SQL command is used to create a table?  To add new records?  To retrieve records?  To modify records?  To remove records?</strong>
            <ul>
                <li>The SQL command used to create a table is CREATE.  The syntax is CREATE TABLE tablename (column2 definition, column2 definition, etc.).</li>
                <li>The SQL command used to add new records is INSERT.  The syntax is INSERT INTO tablename VALUES (value1, value2, value3, etc.) or INSERT INTO tablename VALUES (column1_name, column2_name) VALUES (value1, value2).</li>
                <li>The SQL command used to retrieve records is  SELECT.  The syntax is SELECT what columns FROM what table, i.e. SELECT name, email FROM users;.</li>
                <li>The SQL command used to modify records is UPDATE.  The syntax is UPDATE tablename SET column1_name=value, column2_name=value2 WHERE some_column=value, i.e. UPDATE users SET first_name='Jimmy', age=7 WHERE user_id=142;.</li>
                <li>The SQL command used to remove records is DELETE.  The syntax is DELETE FROM tablename WHERE column=value, or DELETE FROM tablename WHERE column=value LIMIT 1;.</li>
            </ul>
        </li>
    </ul>

    <ul>
        <li><strong>What function should string values be run through to prevent SQL injection attacks?</strong>
            <ul>
                <li>The function string values should be run through to prevent SQL injection attacks is mysql_real_escape_string() function.</li>
            </ul>
        </li>
    </ul>

</body>

</html>