<html>
	<head>
		<title>Mi primera p�gina Web sin ayuda</title>

	</head>
	<body>
<?php
		$producto1="Supra 80";

?>
		<h1>Listado de productos</h1>
		<table border=10>
			<tr>
				<td>
<?php
					echo ("$producto1");
?>
				</td>
			</tr>
			<tr>
				<td>Paselite 70</td>
			</tr>
		</table>
		<br>
		<?php
				echo sqrt(9);
		    
		?>

<br>
		<?php
		
				echo rand (10,20);
		
		?>
		<br>
		<?php
		
				echo pi ();
		
		?>
		<br>
		
		<?php 
		$cadena = "hab�a una vez...";
		echo ucfirst($cadena);
			
		?>
	</body>
</html>