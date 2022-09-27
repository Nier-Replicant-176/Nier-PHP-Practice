<!--- Thank`s for https://serblog.ru! --->

<h2 id="title-time">Время</h2>

<div class="time">
<?php

date_default_timezone_set('Europe/Moscow');

$days = array(
 'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
 'Четверг', 'Пятница', 'Суббота',
);
$month = array(
  'Января', 'Февраля', 'Марта', 'Апреля',
  'Мая', 'Июня', 'Июля', 'Августа',
  'Сентября', 'Октября', 'Ноября', 'Декабря',
);
$date = 'Сегодня ' . date('d') . ' ' . $month[(date('n') - 1)] . ' ' . date('Y') . ' года. ' . $days[(date('w'))] . '. Время: ' . date('H:i');
echo $date

?>
</div>