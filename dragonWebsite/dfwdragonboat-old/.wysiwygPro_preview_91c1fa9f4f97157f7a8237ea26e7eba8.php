<?php
if ($_GET['randomId'] != "X1GqQfiibDd3ExnNyBFNPNizf9WyvwEKYunI7zu4wzolQj4glrYeyHz3Zs8j62w_") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
