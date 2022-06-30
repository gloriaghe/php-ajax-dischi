<?php

include_once __DIR__ . '/db/data.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dischi</title>
	<!-- font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="app">

		<header>
			<i class="fab fa-spotify" id="iconaSpotify"></i>
		</header><?php
		
		include __DIR__ . '/includes/mainDischi.php';

	?></section>  
</body>
</html>