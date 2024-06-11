<?php

/**
 * This is where the connection is initialized
 * 
 * This connection variable will be used in multiple files
 * to execute queries and do checks
 * 
 * @author Jake
 * @copyright 2019 N/A
*/

// The sql server host
$host = "sql112.infinityfree.com";

// The username of the sql user
$user = "if0_36714055";

// The password of the sql user
$pass = "8sdc8SddU5R6";

// The name of the database
$database = "if0_36714055_user";

// Creating the connection
$connection = new mysqli($host, $user, $pass, $database);

