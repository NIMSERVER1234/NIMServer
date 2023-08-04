<?php
if(isset($_POST['text']) && isset($_POST['namefile1234'])) {
    $text = $_POST['text'];

    $filename = realpath('./') . '/' . basename($_POST['namefile1234']) . '.json';

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
