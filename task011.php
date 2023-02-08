<?php
//// С If
$lang = 'en';
if($lang == 'ru'){
$arr = ["Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"];
}
elseif($lang == 'en'){
$arr = ["Monday","Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
}
foreach($arr as $k){
	echo $k." ";
}

//// С Switch Case
$lang = 'ru';
switch($lang){
	case 'ru':
		$arr = ["Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"];
		break;
	case 'en':
		$arr = ["Monday","Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
		break;
}
foreach($arr as $k){
	echo $k." ";
}

//// Без
$lang = 'en';
$arr = ["ru" => ["Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"], "en" => ["Monday","Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"]];

foreach($arr[$lang] as $k){
	echo $k." ";
};