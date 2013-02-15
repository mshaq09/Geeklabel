<?php
    // get MySQL login data
    include_once "constants.php";

    // enable sessions
    session_start();

    // if username and password were submitted, check them
    if ($_POST["username"] != "" && $_POST["password"] != "")
    {
        // connect to database
        if (($connection = mysql_connect(HOST, USER, PASS)) === FALSE)
            die("Could not connect to database");
    
        // select database
        if (mysql_select_db(DB, $connection) === FALSE)
            die("Could not select database");

      //  prepare SQL
       $sql = sprintf("SELECT 1 from users WHERE username = '%s' AND password = '%s'",($_POST['username']),
			($_POST['password']));

        // execute query
        $result = mysql_query($sql);
        if ($result === FALSE)
            die("Could not query database");

        // check whether we found a row
        if (mysql_num_rows($result) == 1)
        {
                // remember that user's logged in
                $_SESSION["login"] = TRUE;
                // redirect user to home page, using absolute path, per
                // http://us2.php.net/manual/en/function.header.php
                $host = $_SERVER["HTTP_HOST"];
                $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
                header("Location: http://$host$path/home.php");
                exit; 
        }
        		// redirect user to home page, using absolute path, per
                // http://us2.php.net/manual/en/function.header.php
                $host = $_SERVER["HTTP_HOST"];
                $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
                header("Location: http://$host$path/index.php");
                exit;
                }
    
    // redirect user to home page, using absolute path, per
    // http://us2.php.net/manual/en/function.header.php
    $host = $_SERVER["HTTP_HOST"];
    $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
    header("Location: http://$host$path/index.php");
    exit;
?>
