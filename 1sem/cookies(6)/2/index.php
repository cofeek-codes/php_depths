<?php
session_start();
if (isset($_POST['submit'])) {
    $_SESSION['nickname'] = $_POST['nickname'];
    $_SESSION['bgcolor'] = $_POST['bgcolor'];
    header('Location: welcome.php');
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Set Preferences</title>
</head>

<body>
    <form method="post" action="">
        <label for="nickname">Nickname:</label>
        <input type="text" id="nickname" name="nickname"><br><br>
        <label for="bgcolor">Background Color:</label>
        <input type="color" id="bgcolor" name="bgcolor"><br><br>
        <input type="submit" name="submit" value="Save">
    </form>
</body>

</html>