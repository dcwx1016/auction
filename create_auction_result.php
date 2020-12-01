<?php include_once "header.php"?>
<?php include_once "function.php"?>
<script type="text/javascript">
 $(window).on('load',function(){
 $('#auctionResult').modal('show');
 });
</script>

<div class="container my-5">
<?php
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



