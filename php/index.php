<!DOCTYPE html>
<html lang="en">

<head>
	<?php include './includes/head.html'; ?>

	<link rel="stylesheet" href="css/aboutmeStyle.css">
	<link rel="stylesheet" href="css/dreamsStyle.css">
	<link rel="stylesheet" href="css/mypassionsStyle.css">
	<link rel="stylesheet" href="css/erreur404.css">
	<link rel="stylesheet" href="css/style.css">

</head>


<body>
	<?php include './includes/header.html'; ?>
	<?php include './includes/nav.html'; ?>


	<?php

	if (isset($_GET['pname'])) {
		$page = $_GET['pname'];

		if ($page === 'aboutme.html') {
			include './includes/aboutme.html';
		} else if ($page === 'dreams.html') {
			include './includes/dreams.html';
		} else if ($page === 'passions.html') {
			include './includes/passions.html';
		} else {
			include './includes/erreur404.html';
		}
	} else {
		include './includes/home.html';
	}
	?>


	<?php include './includes/footer.html'; ?>
</body>

</html>