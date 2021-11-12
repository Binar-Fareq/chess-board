<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>chess</title>
	<style>
		.main{
			height: 590px;
			width: 500px;
			background-color: darkgray;
			border: 2px solid;
			margin: 5px;
			padding: 20px;
			text-align: center;
		}
		.black{
			width: 60px;
			height: 60px;
			background-color: black;
			float: left;
			border: 1px solid;
		}
		.white{
			width: 60px;
			height: 60px;
			background-color: white;
			float: left;
			border: 1px solid;
		}
	</style>
</head>
<body><center>
	<div class="main"><h1>chess boaerd</h1>
		<?php
			for ($j=0; $j <8 ; $j++) {       # for raw

				for ($i=0; $i <8 ; $i++) {   # for column
					$x=$i+$j;
					if ($x%2==0) {
					 	echo '<div class="black"></div>';
					} 
					else
						echo "<div class='white'></div>";
				}
			}
		?>
	</div>
</center>
</body>
</html>