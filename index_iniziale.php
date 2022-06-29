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
	<link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <section id="app"><?php
        include __DIR__ . '/includes/mainDischi.php';
    ?></section>

    
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
	<script src="assets/script.js"></script>
</body>
</html>