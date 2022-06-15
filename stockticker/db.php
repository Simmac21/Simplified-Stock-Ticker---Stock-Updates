<!-- connect db -->
<?php

$conn = mysqli_connect('localhost','root','','stockticker');
if($conn){
} else {
    echo "Not connected";
}

?>
