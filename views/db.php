<?php

/**
 * Configuration for: Database Connection
 *
 * 
 *
 **/
 
 
/**
 * This script connects to MySQL using the db_connection object.
 * This can be included in web pages where a database connection is needed.
 * Customize these to match your MySQL database connection details.
 * This info should be available from within your hosting panel.
 */
 
define("DB_HOST", "localhost");
define("DB_NAME", "login");
define("DB_USER", "root");
define("DB_PASS", "");
 
//Variables for PDO user and pass (comment section)
$user = "root";
$pass = "";
/**
 * PDO options / configuration details.
 * I'm going to set the error mode to "Exceptions".
 * I'm also going to turn off emulated prepared statements.
 */
$pdoOptions = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
);



?>
