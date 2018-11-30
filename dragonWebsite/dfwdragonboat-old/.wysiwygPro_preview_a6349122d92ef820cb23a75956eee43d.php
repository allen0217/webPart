<?php
if ($_GET['randomId'] != "64eUXgRgtqs92t7P4poGctyNTsb5e2Zxg_0zKeBtoPByw_FCUMeeEke8TDzB64S5") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
