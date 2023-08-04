<?php
if(isset($_POST['text']) && isset($_POST['filename'])) {
    $text = $_POST['text'];

    $filename = realpath('./') . '/' . basename($_POST['filename']) . '.json';

    if(file_exists($filename)) {
        echo htmlentities("The file already exists.");
    } else {
        if(file_put_contents($filename, $text) !== false) {
            echo "File created successfully.";
        } else {
            echo "Error creating file.";
        }
    }

    try {
        if(isset($file)) {
            fclose($file);
        }
    } catch (Exception $e) {

    }
}
?>
