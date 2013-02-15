
<?php
// get MySQL login data
include "include.php";

// enable sessions
session_start();

// connect to database
if (($connection = mysql_connect(HOST, USER, PASS)) === FALSE)
    die("Could not connect to database");

// select database
if (mysql_select_db(DB, $connection) === FALSE)
    die("Could not select database");

?>
