<?php
if ($_GET['randomId'] != "MSdPx7qBc0hB5eUgnuaeOsEIESS8Xhjlq0WLzIJe1O2rsCDFTbFvwTXwCeawpaSt") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
