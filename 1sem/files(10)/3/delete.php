<?php

if (isset($_POST['delete_file'])) {
    $finename = $_SERVER['DOCUMENT_ROOT'] . '/photo/' . $_POST['deleted_file'];
    unlink($finename);
    header("Location: index.php");
}
