<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style="background: #e1fcfa; color: #782ab8">
	<!--header-->
	<div class="col-12" style="background: #782ab8; color: #e1fcfa">
		<div class="row">
			<div class="col-1 ml-3 pt-2 pb-2">
				<h4 class="font-weight-bold">K-POP SHOP</h4>
			</div>
			<div class="mx-auto col-8 pt-4">
				<div class=" row">	
					<a href="" style="color: #e1fcfa"> <h5 class="ml-4 mr-4"> Бесплатная доставка</h5> </a>
					<a href="" style="color: #e1fcfa; background: purple"> <h5> Любимые товары</h5> </a>
					<a href="" style="color: #e1fcfa"> <h5 class="ml-4"> О нас</h5> </a>
					<a href="admin.php" style="color: #e1fcfa"> <h5 class="ml-4"> Админ панель</h5> </a>
				</div>
			</div>
			
		</div>		
	</div>

	<!--бэк-->
	<div class="col-12" style="background: #934bce; color: #e1fcfa">
		<div class="row">
			<div class="col-7">
				<h1 class="col-5" style="margin-left: 230px; margin-top: 70px">Cамый уютный к-поп онлайн магазин!</h1>
			</div>
			<div class="col-5 text-right">
				<img src="img/logo.png" class="w-100 ">
			</div>
		</div>		
	</div>

	<div class="col-8 text-center mx-auto mt-4 ">
		<h2 class="mb-3" style="">K-pop staff</h2>

		<div class="row">	

			<div class="col-3 text-center mt-3">	
				<img src="img/1.jpg" class="w-100">
				<h6 class="mt-2">	
					"THE ALBUM" версия 4
				</h6>
				<h6>1 406 руб</h6>
				<button class="btn btn-primary" style="background: #782ab8; border: #782ab8">Купить</button>
			</div>

			<div class="col-3 ml-4 text-center mt-3">	
				<img src="img/2.jpg" class="w-100">
				<h6 class="mt-2">	
					"Square up" pink ver
				</h6>
				<h6>1 147 руб</h6>
				<button class="btn btn-primary" style="background: #782ab8; border: #782ab8">Купить</button>
			</div>

			<div class="col-5 ml-4">	
				<img src="img/3.jpg" class="w-100">
			</div>

		</div>

		<div class="row">

			<div class="col-5 ml-4 mt-3">	
				<img src="img/4.jpg" class="w-100">
			</div>	

			<div class="col-3 text-center mt-3">	
				<img src="img/5.jpg" class="w-100">
				<h6 class="mt-2">	
					"Feel special"
				</h6>
				<h6>2 748 руб</h6>
				<button class="btn btn-primary" style="background: #782ab8; border: #782ab8">Купить</button>
			</div>

			<div class="col-3 ml-4 text-center mt-3">	
				<img src="img/6.jpg" class="w-100">
				<h6 class="mt-2">	
					"Twicecoaster: Lane 2"
				</h6>
				<h6>2 147 руб</h6>
				<button class="btn btn-primary" style="background: #782ab8; border: #782ab8">Купить</button>
			</div>

		</div>

		<div style="margin-left: 100px">
		<div class="row">			
			<div class="col-3 text-center mt-3 ml-4">
				<?php 
					$connect = mysqli_connect("127.0.0.1", "root", "", "kpop_shop");
					$zapros_text = "SELECT * FROM products";										
					$zapros = mysqli_query($connect, $zapros_text);

					$result1 = $zapros->fetch_assoc();
					$result2 = $zapros->fetch_assoc();
					$result3 = $zapros->fetch_assoc();
					$result4 = $zapros->fetch_assoc();
					$result5 = $zapros->fetch_assoc();
					$result6 = $zapros->fetch_assoc();

					echo "<img src='". $result1["img"] ."' class='w-100'>";
				?>	
				
				<h6 class="mt-2">	
					<?php 
						echo $result1["name"]
					 ?>
				</h6>
				<h6>
					<?php 
						echo $result1["price"]
					 ?> 
				 </h6>
			</div>	

			<div class="col-3 text-center mt-3 ml-4">	
				<?php 
					echo "<img src='". $result2["img"] ."' class='w-100'>";
				?>
				<h6 class="mt-2">	
					<?php 
						echo $result2["name"]
					 ?>
				</h6>
				<h6>
					<?php 
						echo $result2["price"]
					 ?>
				</h6>
			</div>

			<div class="col-3 text-center mt-3 ml-4">	
				<?php 
					echo "<img src='". $result3["img"] ."' class='w-100'>";
				?>
				<h6 class="mt-2">	
					<?php 
						echo $result3["name"]
					 ?>
				</h6>
				<h6>
					<?php 
						echo $result3["price"]
					 ?>
				</h6>
			</div>

		</div>
		</div>

		<div style="margin-left: 100px">
		<div class="row">			
			<div class="col-3 text-center mt-3 ml-4">
				<?php
					echo "<img src='". $result4["img"] ."' class='w-100'>";
				?>	
				
				<h6 class="mt-2">	
					<?php 
						echo $result4["name"]
					 ?>
				</h6>
				<h6>
					<?php 
						echo $result4["price"]
					 ?> 
				 </h6>
			</div>	

			<div class="col-3 text-center mt-3 ml-4">	
				<?php 
					echo "<img src='". $result5["img"] ."' class='w-100'>";
				?>
				<h6 class="mt-2">	
					<?php 
						echo $result5["name"]
					 ?>
				</h6>
				<h6>
					<?php 
						echo $result5["price"]
					 ?>
				</h6>
			</div>

			<div class="col-3 text-center mt-3 ml-4">	
				<?php 
					echo "<img src='". $result6["img"] ."' class='w-100'>";
				?>
				<h6 class="mt-2">	
					<?php 
						echo $result6["name"]
					 ?>
				</h6>
				<h6>
					<?php 
						echo $result6["price"]
					 ?>
				</h6>
			</div>

		</div>
		</div>

	</div>
	


</body>
</html>