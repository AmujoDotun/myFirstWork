<?php
$name       = @trim(stripslashes($_POST['name'])); 
$email      = @trim(stripslashes($_POST['email'])); 
$subject    = @trim(stripslashes($_POST['subject'])); 
$message    = @trim(stripslashes($_POST['message'])); 
// $to   		= 'samuelamujo@gmail.com';//replace with your email

//connecting to database
$dbc = mysqli_connect('localhost', 'roots', '', 'web_tech')
or die('Error connecting to database serve');
$query = "INSERT INTO webtech(name, email, subject, message) " .
"VALUE('$name', '$email', '$subject', '$message')";
// mysqli_query(database_connection, query);
mysqli_query($dbc, $query)
or die('Error quering database');
// $result = mysqli_query($dbc, $query)
// mysqli_close(database_connection);

echo 'You have successfully submit your request.<br />';
echo 'welcome'.$name .'<br />';
echo 'You email address is'.$email .'<br />';
echo 'Subject of your mail is'.$subject .'<br />';
echo 'Your message is as follow'.$message .'<br />';

mysqli_close($dbc);

?>