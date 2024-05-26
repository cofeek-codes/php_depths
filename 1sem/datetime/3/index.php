<!DOCTYPE html>
<html lang="ru">

   <head>
      <meta charset="UTF-8">
      <title>Календарь</title>
   </head>

   <body>

      <form action="" method="post">
         <label for="year">Год:</label>
         <select name="year" id="year">
            <?php for ($y = 2000; $y <= 2020; $y++) : ?>
               <option value="<?php echo $y; ?>" <?php if (isset($_POST['year']) && $_POST['year'] == $y) echo ' selected'; ?>>
                  <?php echo $y; ?>
               </option>
            <?php endfor; ?>
         </select>

         <label for="month">Месяц:</label>
         <select name="month" id="month">
            <?php for ($m = 1; $m <= 12; $m++) : ?>
               <option value="<?php echo $m; ?>" <?php if (isset($_POST['month']) && $_POST['month'] == $m) echo ' selected'; ?>>
                  <?php echo $m; ?>
               </option>
            <?php endfor; ?>
         </select>

         <input type="submit" value="Показать календарь">
      </form>

      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $year = $_POST['year'];
         $month = $_POST['month'];


         echo "<table border='1'>";
         echo "<tr><th>Воскресенье</th><th>Понедельник</th><th>Вторник</th><th>Среда</th><th>Четверг</th><th>Пятница</th><th>Суббота</th></tr>";
         $daysInMonth = date('t', mktime(0, 0, 0, $month, 1, $year));
         $currentDay = date('w', mktime(0, 0, 0, $month, 1, $year));

         for ($i = 0; $i < $currentDay; $i++) {
            echo "<td></td>";
         }

         for ($day = 1; $day <= $daysInMonth; $day++) {
            echo "<td>$day</td>";
            if (($currentDay + $day) % 7 == 6) {
               echo "</tr>";
            }
         }

         echo "</table>";
      }
      ?>
   </body>

</html>
