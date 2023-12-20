<?php

if (isset($_POST['upload_file'])) {
    $tmp_filename = $_FILES['uploaded_file']['tmp_name'];
    $dest_filename = $_SERVER['DOCUMENT_ROOT'] . '/photo/' . $_FILES['uploaded_file']['name'];
    move_uploaded_file($tmp_filename, $dest_filename);
    header("Location: index.php");
}
