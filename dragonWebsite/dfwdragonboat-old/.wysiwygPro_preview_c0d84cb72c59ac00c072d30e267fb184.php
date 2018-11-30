<?php
if ($_GET['randomId'] != "QNAET3ommIyZTA9syDERCBvVjRaZvqO8RHJ2VNZ_WqO4tVUfB6CNo6iX9EuzOsmq") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
