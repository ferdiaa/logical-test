<?php

$test = [
	'$aplikasi[1]' => 'gtAkademik',
	'$aplikasi[2]' => 'gtFinansi',
	'$aplikasi[3]' => 'gtPerizinan',
	'$aplikasi[4]' => 'ecCampuz',
	'$aplikasi[5]' => 'eOviz'
];

foreach ($test as $name => $fill) {
	echo "{$name} = $fill" . '<br>';
}