<?php include_once "header.php"?>

<div class="container my-5">

<?php

$item = array();
$item['auctionTitle'] = $_POST['auctionTitle'];
$item['auctionDetails'] = $_POST['auctionDetails'];
$item['auctionCategory'] = $_POST['auctionCategory'];
$item['auctionStartPrice'] = $_POST['auctionStartPrice'];
$item['auctionReservePrice'] = $_POST['auctionReservePrice'] ? $_POST['auctionReservePrice'] : $_POST['auctionStartPrice'];
$item['auctionEndDate'] = $_POST['auctionEndDate'];

$item['auctionStartDate'] = date("Y-m-d H:i:s");

$sMail = $_SESSION['username'];
$query0 = "SELECT * FROM seller WHERE seller.email = '$sMail'";
$result0 = mysqli_query($GLOBALS['connection'], $query0);
$sellerId = mysqli_fetch_assoc($result0)['sellerId'];
$item['auctionReservePrice'] = (int) $item['auctionReservePrice'];
$query = "INSERT INTO auction (title,auctionDescription,category,startingPrice,reservePrice,startDate,endDate,sellerId)" .
    "VALUES ('${item['auctionTitle']}','${item['auctionDetails']}','${item['auctionCategory']}',
        '${item['auctionStartPrice']}','{$item['auctionReservePrice']}','${item['auctionStartDate']}',
        '${item['auctionEndDate']}','$sellerId')";

$result = mysqli_query($GLOBALS['connection'], $query)
or die('Error connecting to MySQL server.' . mysql_error());

echo ('<div class="text-center">Auction successfully created! <a href="mylistings.php">View your new listing.</a></div>');

?>

</div>



