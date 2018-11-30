<?php
if ($_GET['randomId'] != "1vyCZPm_RA8Isx8FBoiyboTw26BRAcb0DhJpR6nmKaJf0F8Vw3sIzKyjWR3_Kukh") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
