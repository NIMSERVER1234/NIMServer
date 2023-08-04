<?php
if(isset($_POST['text']) && isset($_POST['filename'])) {
    $text = $_POST['text'];

    $filename = realpath('./') . '/' . basename($_POST['filename']) . '.json';

        if(file_put_contents($filename, $text) !== false) {
            echo "Edited successfully.";
        } else {
            echo "An error occurred.";
        }

    try {
        if(isset($file)) {
            fclose($file);
        }
    } catch (Exception $e) {

    }
}
?>