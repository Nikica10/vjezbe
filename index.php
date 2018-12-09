<?php

$arrayUppercase = array(
	'firstname' => 'marko',
	'lastname'  => 'marulic'
	);

foreach ($arrayUppercase as $key => $value) {
	echo ucfirst($key) . ' is ' . ucfirst($value) . '<br>';
	
}
echo '------------------------<br>';

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
$newCarsArray = [];
foreach ($cars as $keyCar => $value) {
	$newCarsArray[] = $keyCar;
	foreach ($value as $carType => $carPrice) {
		if ($cars[$keyCar][$carType] === '$12.000') {
			$carPrice = '$8.000';
		}	
		//echo ucfirst($carType) . ' costs ' . $carPrice . '<br>';
		$newCarsArray[] = $carType;
		$newCarsArray[] = $carPrice;
	}

}


//var_dump($newCarsArray);
echo "<pre>", var_dump($newCarsArray), "</pre>";

echo '------------------------<br>';

$num = array(
	'1' => array(1,2,3,4,5,6,7,8,9,10), 
	'2' => array(1,2,3,4,5,6,7,8,9,10),
	'3' => array(1,2,3,4,5,6,7,8,9,10),
	'4' => array(1,2,3,4,5,6,7,8,9,10),
	'5' => array(1,2,3,4,5,6,7,8,9,10),
	'6' => array(1,2,3,4,5,6,7,8,9,10),
	'7' => array(1,2,3,4,5,6,7,8,9,10),
	'8' => array(1,2,3,4,5,6,7,8,9,10),
	'9' => array(1,2,3,4,5,6,7,8,9,10),
	'10' => array(1,2,3,4,5,6,7,8,9,10)
	);


foreach ($num as $key => $value) {
	echo $key . '<br>';
	foreach ($value as $num2) {
		echo $key . 'x' . $num2 . '=' . $key * $num2 . '<br>';
	}
}



?>