<?php
include __DIR__ . '/db/data.php';

header('Content-Type: application/json');

// echo json_encode($arr_dischi);


if (isset($_GET['genre'])) {
	if ($_GET['genre'] === 'all') {
		$arr_filtered = $arr_dischi;
	} else {
		$array_filtered = [];
		foreach ($arr_dischi as $disc) {
			if (strtolower($disc['genre']) === strtolower($_GET['genre'])) {
				$arr_filtered[] = $disc;
			}
		}
	}

	echo json_encode([
		'success'	=> true,
		'response'	=> $arr_filtered
	]);

} else {

	echo json_encode([
		'success'	=> false,
	]);
}