<?php





if ($_SERVER["REQUEST_METHOD"] == "POST") {    
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $now = new DateTime();
    $birthday = new DateTime("{$year}-{$month}-{$day}");    
    $interval = $now->diff($birthday);
    echo "До вашего дня рождения осталось:<br>";
    echo "Дней: {$interval->days}<br>";
    echo "Часов: {$interval->h}<br>";
    echo "Минут: {$interval->i}<br>";
    echo "Секунд: {$interval->s}";
} else {?>
    <form method="post">
        День: <input type="number" name="day" min="1" max="31"><br>
        Месяц: <input type="number" name="month" min="1" max="12"><br>
        Год: <input type="number" name="year"><br>
        <input type="submit" value="Рассчитать">
    </form>
<?php }?>


