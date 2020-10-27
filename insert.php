<?php 
	header('Location: index.php');

	$connect = mysqli_connect("127.0.0.1", "root", "", "kpop_shop");

	$text_zaprosa_vstavit = "INSERT INTO products(name, price, img) 
							VALUES('{$_GET["name"]}', '{$_GET["price"]}', '{$_GET["img"]}')";

	$zapros_vstavit = mysqli_query($connect, $text_zaprosa_vstavit);

?>