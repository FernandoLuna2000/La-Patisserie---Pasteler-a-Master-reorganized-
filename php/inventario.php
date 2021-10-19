<?php
$mysqli = new mysqli ("localhost", "BDA", "Lapatti", "patisserie");
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="../css/EstiloAgragar.css" rel="stylesheet" href="/css/master.css">
    <link rel="shortcut icon" type="Images/logo_patisseria.png" href="../Images/logo_patisseria.png">
    <title>Inventario</title>
  </head>
  <body>
    <main class="col-sm-12 text-center">
      <header>
        <img src="../Images/logo_patisseria.png" width="250px" position="center">
        <h2>Inventario</h2>
      </header>
      <div class="col-sm-12 row justify-content-center h-100">
        <div class=" col-sm-8 align-self-center text-center">
          <table class="table table-striped" >
        		<tr>
        			<th>IdProducto</th>
        			<th>nombre</th>
        			<th>Precio</th>
        			<th>Tipoadorno</th>
        			<th>Tiporelleno</th>
              <th>numPersonas</th>
              <th>existencia</th>
              <th>Imagen</th>
        		</tr>
        		<?php
            $sql="SELECT * from producto";
        		$result=mysqli_query($mysqli,$sql);
        		while($mostrar=mysqli_fetch_array($result)){
        		 ?>
        		<tr>
        			<td><?php echo $mostrar['idProducto'] ?></td>
        			<td><?php echo $mostrar['nombre'] ?></td>
        			<td>$<?php echo $mostrar['precio'] ?></td>
        			<td><?php echo $mostrar['tipoAdorno'] ?></td>
        			<td><?php echo $mostrar['tipoRelleno'] ?></td>
              <td><?php echo $mostrar['numPersonas'] ?></td>
              <td><?php echo $mostrar['existencia'] ?> Pzs</td>
              <td></td>
        </td>
        		</tr>
        	<?php
        	}
        	 ?>
        	</table>
        </div>

      </div>
    </main>
      <div class="container col-sm-9 text-right">
        <a type="button" class="btn btn-secondary" name="button" href="../php/index.php">Regresar</a>
        <a type="button" class="btn btn-danger" name="button" href="../Pagina Principal.html">Salir</a>
          </div>
      <script src="../js/Jquery.js" type="text/javascript"></script>
      <script src="../js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>
