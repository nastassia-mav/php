<?php

//EXERCISE 1
echo time();

//EXERCISE 2

echo mktime(0, 0, 0, 3, 1, 2025);

//EXERCISE 3
echo mktime(0, 0, 0, 12, 31);

//EXERCISE 4
echo time() - mktime(13, 12, 59, 3, 15, 2000);

//EXERCISE 5
echo intval((time() - mktime(7, 23, 48))/3600);


//EXERCISE 6
echo date('H:i:s, d.m.Y');

//EXERCISE 7
echo date('Y-m-d')."<br>";
echo date('d.m.Y')."<br>";
echo date('d.m.y')."<br>";
echo date('H:i:s')."<br>";

//EXERCISE 8
echo date('d.m.Y', mktime(0, 0, 0, 2, 12, 2025));

//EXERCISE 9
$week = ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"];
echo $week[date('w', mktime(0, 0, 0, 6, 6, 2006))];
echo $week[date('w', mktime(0, 0, 0, 8, 22, 1989))];


//EXERCISE 10
$months = array( 1 => 'Январь' , 'Февраль' , 'Март' , 'Апрель' , 'Май' , 'Июнь' , 'Июль' , 'Август' , 'Сентябрь' , 'Октябрь' , 'Ноябрь' , 'Декабрь' );
echo $months[date('n')];

//EXERCISE 11
echo date('t');

//EXERCISE 12
$year = 1993;
echo date('L', mktime(0, 0, 0, 0, 0, $year));

//EXERCISE 13
$date = '31.12.2011'; // Форма ввода даты
$week = ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"];
$arr = explode('.', $date);
$mktime = mktime(0, 0, 0, $arr['1'], $arr['0'], $arr['2']);
echo $mktime;
echo $week[date('w', $mktime)];


//EXERCISE 14
$date = '2025-12-31'; 
$months = array( 1 => 'Январь' , 'Февраль' , 'Март' , 'Апрель' , 'Май' , 'Июнь' , 'Июль' , 'Август' , 'Сентябрь' , 'Октябрь' , 'Ноябрь' , 'Декабрь' );
$arr = explode('-', $date);
$mktime = mktime(0, 0, 0, $arr['1'], $arr['2'], $arr['0']);
echo $mktime;
echo $months[date('n', $mktime)];

//EXERCISE 15
$date1 = '2032-08-21';
$date2 = '2022-02-08';
$arr_date1 = explode('-', $date1);
$mktime_date1 = mktime(0, 0, 0, $arr_date1['1'], $arr_date1['2'], $arr_date1['0']);
$arr_date2 = explode('-', $date2);
$mktime_date2 = mktime(0, 0, 0, $arr_date2['1'], $arr_date2['2'], $arr_date2['0']);

if ($mktime_date1 > $mktime_date2) {
	echo "Date1 больше Date2<br>";
	echo $mktime_date1." > ".$mktime_date2;
}else{
	echo "Date2 больше Date1<br>";
	echo $mktime_date2." > ".$mktime_date1;
}

//EXERCISE 16
echo date('d-m-Y', strtotime('2025-12-31'));

//EXERCISE 17
$date = '2025-12-31T12:13:59';
echo date('H:i:s d.m.Y', strtotime($date));

//EXERCISE 18
    $date = date_create('2025-12-31');
    date_modify($date, '2 days');
    date_modify($date, '3day 1 month');
    date_modify($date, '1 year');
    date_modify($date, '-3 days');
    echo date_format($date, 'd.m.Y');

//EXERCISE 19
$countDate = date('z');
$days_in_Year = date('L')?366:365;
$toNewYearDays = $days_in_Year-$countDate;
echo $toNewYearDays;

//EXERCISE 20
$date = '2026';
$arr_days = [];
for ($i=1; $i <= 12; $i++) { 
	$day_in_month = date('t', mktime(0, 0, 0, $i, 1, $date));
	for ($k=0; $k <= $day_in_month; $k++) { 
		$day_week = date('w', mktime(0, 0, 0, $i, $k, $date));
		if ($day_week == '5' and $k == 13) {
			$arr_days[$i] = $k;
		}
	}	
}
var_dump($arr_days);

//EXERCISE 21
$week = ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"];
$date = date_create(date('Y-m-d'));
date_modify($date, '-100 days');
echo $week[date_format($date, 'w')];