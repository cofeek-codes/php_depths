<?php

$greeting = "Welcome";
if (isset($_COOKIE['nickname'])) {
    $greeting .= ", " . $_COOKIE['nickname'];
}
$bgcolor = isset($_COOKIE['bgcolor']) ? $_COOKIE['bgcolor'] : "#FFFFFF";
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
</body>

</html>