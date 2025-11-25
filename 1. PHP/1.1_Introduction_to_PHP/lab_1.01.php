<!DOCTYPE html> 
<html>
    <head>
        <title>Skills Lab </title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Skills Lab 1.01: XAMPP-settings</h1>

        <p> Step 1: Shut down the software and restart XAMPP. </p>

        <p> Step 2: If this doesn't work, open the mamp/conf/apache/httpd.conf file and find the line: <em>Listen 80</em>.<br> 
        Here you can use a new port, for example 8080, for Apache.<br>
        If you use a new port you will now have to specify this in your <br> browser as follows: http/localhost:8080 <br>
        When creating your PHP assignment it is useful to be able to see all error messages. </p>

        <p> Step 3: Open MAMP/conf/php8.0.0/php.ini and check that the line looks like this:
                    <br> <br>
                    command: error_report = E_ALL
                    <br> <br>
                    To protect your database, you can create a new user name and password.</p>
        <p> Step 4: Go to: <a href="http://localhost/phpmyadmin">http://localhost/phpmyadmin</a> and create a new user for your MYSQL database server</p>
    </body>
</html>