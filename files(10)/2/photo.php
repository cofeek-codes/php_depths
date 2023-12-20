<?php

if (isset($_POST['MAX_FILE_SIZE'])) {
    $tmp_filename = $_FILES['file_upload']['tmp_name'];
    $dest_filename = $_SERVER['DOCUMENT_ROOT'] . '/photo/' . $_FILES['file_upload']['name'];
    move_uploaded_file($tmp_filename, $dest_filename);
}
