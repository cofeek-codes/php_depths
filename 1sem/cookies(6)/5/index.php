<?php
session_start();

if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    header("Location: email.php");
    echo "Личные данные установлены.";
} else {

    echo "Данные формы не отправлены.";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Set Personal Data</title>
</head>

<body>
    <form method="post" action="">
        Enter name: <input type="text" name="name"><br>
        Enter email: <input type="text" name="email"><br>
        <input type="submit" name="submit" value="Save">
    </form>
</body>

</html>