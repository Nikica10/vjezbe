<?php

$arrayUppercase = array(
	'firstname' => 'marko',
	'lastname'  => 'marulic'
	);

foreach ($arrayUppercase as $key => $value) {
	echo ucfirst($key) . ' is ' . ucfirst($value) . '<br>';
	
}
echo '<br>';

$cars = array(
	'opel' => array(
				'corsa' => '$12.000',
				'astra' => '$18.000',
				'insignia' => '$25.000'
			),
	'ford' => array(
				'fiesta' => '$11.000',
				'focus' => '$17.000',
				'mondeo' => '$29.000'
			),
	'fiat' => array(
				'uno' => '$9.000',
				'tipo' => '$11.000',
				'bravo' => '$16.000'
			),
	);

// $cars = array_change_key_case($cars,CASE_UPPER);

// foreach ($cars as $keyCar => $value) {
// 	echo '<strong>' . $keyCar .'</strong><br>';
// 	foreach ($value as $carType => $carPrice) {
// 		echo ucfirst($carType) . ' costs ' . $carPrice . '<br>';
// 	}
// }

foreach ($cars as $keyCar => $value) {
	foreach ($value as $carType => $carPrice) {
		if ($cars[$keyCar][$carType] === '$12.000') {
			$carPrice = '$8.000';
		}	
		echo ucfirst($carType) . ' costs ' . $carPrice . '<br>';
	}
}




?>