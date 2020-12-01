<?php include_once "header.php"?>
<?php echo ('<div class="text-center">Auction successfully created! <a href="mylistings.php">View your new listing.</a></div>'); ?>
<div class="container my-5">
<?php
include_once "function.php";

if (isDataValid()) {
    $newItem = getItem();

    if (checkRepetition($newItem)) {
        saveToDatabase($newItem);
        echo "<h2>item added</h2>";
        printItem($newItem);
    }

}
// If all is successful, let user know.
echo ('<div class="text-center">Auction successfully created! <a href="mylistings.php">View your new listing.</a></div>');
?>
</div>



