<?php
if ($_GET['randomId'] != "0dudbaX5y_NLmkknZ02Ffqg0EDC6YGdXDBQq9OcVezzLJernBwHjZqrybUmLpWUb") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
