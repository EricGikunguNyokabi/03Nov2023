

<?php
$dbhost = 'localhost:8080';
$dbuser = 'root';
$dbpass = '';
$dbname = 'grocerydb';

$link = mysql_connect("localhost:8080","root","","grocerydb");
if (!$link) {
    die('Connection to Server Failed!: ' . mysql_error());
}
echo 'Connection OK'; mysql_close($link);
?>