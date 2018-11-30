<?php
if ($_GET['randomId'] != "gcg7CtEywBREc8s1Ah2XrmE2Xg0Ckq0l2ueLKygO_vshazQdXGiq42teHKU1iqxW") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
