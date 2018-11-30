<?php
if ($_GET['randomId'] != "MY18orGgKNIzbpDzI56Z4MasG15ooVTHIqS4pnc1gpuOupmpYpOzbM9MjHrG_6Ep") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
