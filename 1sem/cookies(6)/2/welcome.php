<?php
session_start();
$greeting = "Welcome";
if (isset($_SESSION['nickname'])) {
    $greeting .= ", " . $_SESSION['nickname'];
}
$bgcolor = isset($_SESSION['bgcolor']) ? $_SESSION['bgcolor'] : "#FFFFFF";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Welcome</title>
    <style>
        body {
            background-color: <?php echo $bgcolor; ?>;
        }
    </style>
</head>

<body>
    <h1><?php echo $greeting; ?></h1>
    <p>This is the welcome page. Your background color preference has been set.</p>
</body>

</html>