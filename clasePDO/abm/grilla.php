<?php
	require_once('clases/producto.php');
?>
<html>
<head>
	<title>Ejemplo de ALTA-LISTADO - con archivos -</title>

	<meta charset="UTF-8">
		
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<script>
		function borrar(){
			
			var op=parseInt(document.getElementById("borrar").value);
			alert(op);
			//llamar funcion de ajax va a ir sobre una variable o pagina intermedia que en este caso se llama administracion.php
			//donde va a haber un alta baja mod, que alta llama al metodo de consulta en el php que llama al otro php que toma los datos del servidor
		}
	</script>
</head>
<body>
	<a class="btn btn-info" href="index.html">Menu principal</a>

	<div class="container">
		<div class="page-header">
			<h1>Ejemplos de Grilla</h1>      
		</div>
		<div class="CajaInicio animated bounceInRight">
			<h1>Listado de PRODUCTOS</h1>

<?php 

//$ArrayDeProductos = Producto::TraerTodosLosProductos();
$ArrayDeProductos = Producto::TraerTodosLosProductosBD();
echo "<table class='table'>
		<thead>
			<tr>
				<th>  COD. BARRA </th>
				<th>  NOMBRE     </th>
				<th>  FOTO       </th>
				<th>  BORRAR       </th>
			</tr> 
		</thead>";   	

	foreach ($ArrayDeProductos as $prod){

		echo " 	<tr>
					<td>".$prod->GetCodBarra()."</td>
					<td>".$prod->GetNombre()."</td>
					<td><img src='archivos/".$prod->GetPathFoto()."' width='100px' height='100px'/></td>
					<td><button id='borrar' value=1 onclick='borrar();' >Borrar</td>
				</tr>";
	}	
echo "</table>";		
?>
		</div>
	</div>
</body>
</html>