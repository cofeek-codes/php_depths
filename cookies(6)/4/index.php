<?php


if (isset($_POST['username'])) {
    $username = $_POST['username'];

    setcookie('username', $username, time() + 3600, '/');

    setcookie('lastvisit', date("d-m-Y H:i:s"), time() + 3600, '/');

    header('Location: welcome.php');
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
</head>

<body>
    <form method="post" action="">
        Enter username: <input type="text" name="username"><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>

</html>