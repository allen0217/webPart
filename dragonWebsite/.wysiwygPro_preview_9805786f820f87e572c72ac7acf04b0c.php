<?php
if ($_GET['randomId'] != "D3my0SkyYoTBLVYXdAdeUx04ivW46uNJvG5rjdcv9DOxlyc3ECe1eO68r8DeWxVO") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
