<?php
//This file initialises the database connection. Variable set as superglobal to allow for calling it from within functions

$GLOBALS['connection'] = mysqli_connect('auctionhouse13.mysql.database.azure.com','group13@auctionhouse13','Abc123456', 'newschema')
             or die('Error connecting to MySQL server.' . mysql_error());

//$con=mysqli_init();
//mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL);
//mysqli_real_connect($con, "auctionhouse13.mysql.database.azure.com", "group13@auctionhouse13", {your_password}, {your_database}, 3306);
?>