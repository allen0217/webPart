<?php
if ($_GET['randomId'] != "Ixx32ASW5HEa3SBBNkC3heX3xZX0cIzdCpEn0Ja3_2HYf47HejVLjAyEvWx5TtC7") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
