<?php
if(isset($_REQUEST['filename'])) {
    $filename = $_REQUEST['filename'] . '.json';

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