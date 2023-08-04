<?php
if(isset($_REQUEST['namefile1234'])) {
    $filename = $_REQUEST['namefile1234'] . '.json';

    if(file_exists($filename)) { 
        if(unlink($filename)) { 
            echo "Removed successfully.";
        } else {
            echo "Error deleting file.";
        }
    } else {
        echo "File does not exist.";
    }
} else {
    echo "ERROR";
}
?>
