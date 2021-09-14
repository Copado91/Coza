<?php
if (empty($_SESSION['email'] AND $_SESSION['password'])) {
	echo "<script> alert('S'il vous plait connecter vous');
		window.location.href='customerforms.php';
		</script>";
}




?>