<?php
session_start();

if (isset($_SESSION['name']) && isset($_SESSION['email'])) {
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    echo "<form method='post' action='sendmail.php'>";
    echo "Кому: <input type='text' name='to' value='$email'><br>";
    echo "От кого: <input type='text' name='from' value='$email' readonly><br>";
    echo "Тема: <input type='text' name='subject'><br>";
    echo "Сообщение: <textarea name='message'></textarea><br>";
    echo "<input type='submit' value='Отправить'>";
    echo "</form>";
} else {
    echo "Личные данные не установлены.";
}
