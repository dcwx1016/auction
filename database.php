<?php
//This file initialises the database connection. Variable set as superglobal to allow for calling it from within functions

$GLOBALS['connection'] = mysqli_connect('auctionhouse13.mysql.database.azure.com', 'group13@auctionhouse13', 'Abc123456', 'auction_house')
or die('Error connecting to MySQL server.' . mysql_error());
mysqli_set_charset($connection, 'utf8mb4');
