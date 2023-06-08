


<!DOCTYPE html>
<html lang="en">
<?php include './includes/head.html'; ?>

<body>
<?php include './includes/header.html'; ?>
<?php include './includes/nav.html'; ?>

	
	<?php

if (isset($_GET ['pname'])){
	$page = $_GET['pname'];

    if ($page ==='aboutme.html'){
		include './includes/aboutme.html';
	}
	else if ($page === 'dreams.html'){
		include './includes/dreams.html';
	}
	else if ($page ==='passions.html'){
		include './includes/passions.html';
	}

} else { 
	include './includes/home.html';
}
    ?>
	

	<?php include './includes/footer.html'; ?>
</body>

</html>
