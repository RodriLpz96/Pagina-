<!DOCTYPE html>
<html lang="en">
<?php
        include_once 'conexion.php';
        if(isset($_GET['delete_id']))
        {
            $mysqli = new mysqli($hotsdb,$usuariodb,$clavedb,$basededatos);
            $sql_query="DELETE FROM camisaas WHERE id=".$_GET['delete_id'];
            $resultado=$mysqli->query($sql_query);
            header("Location: $_SERVER[PHP_SELF]");
        }
    
        if(isset($_POST['botonenviar']))
        {
            $id = $_POST['id'];
            $marca = $_POST['marca'];
            $modelo = $_POST['modelo'];
            $talla = $_POST['talla'];
            $color = $_POST['color'];
            $precio = $_POST['precio'];
            
            $mysqli = new mysqli($hostdb,$usuariodb,$clavedb,$basededatos);
            $sql_query = "INSERT INTO camisaas VALUES('$id','$marca','$modelo','$talla','$color','$precio')";
            if($resultado=$mysqli->query($sql_query))
            {
                ?>
                    <script type="text/javascript">
                        alert('Informacion Exitosa');
                        window.location.href='catalago.php';
                    </script>
                <?php
            }
        }
    ?>
<head>
	<link rel="stylesheet" type="text/css" href="tabla1.css">
	<meta charset="UTF-8">
	<title>Amazing Shirts</title>
	<script type="text/javascript" >
    function eliminar_id(id)
    {
        if(confirm('¿Desea suprimir?'))
        {
          	  window.location.href='catalago.php?delete_id='+id;
        }
    }
    </script>
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="animate.css">
	<link rel="stylesheet" href="secciones.css">
	<script src="https://use.fontawesome.com/502b7294a9.js"></script>
	<link rel="stylesheet" href="redes.css">
	<link rel="stylesheet" href="tabla.css">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
              <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<div class="red">
	<div id="facebook"><a href="https://www.facebook.com/rodrigo.lopezrodriguez.336" target="none" class="fa fa-facebook"></a></div>
	<div id="youtube"><a href="#" class="fa fa-youtube-play"></a></div>
	<div id="twitter"><a href="#" class="fa fa-twitter"></a></div>
	<div id="correo"><a href="#" class="fa fa-envelope"></a></div>
	
</div>
<header>
<!-- Menu -->
	<div class="ancho">
		<div class="logo">
			<p><a href="index.html">Amazing shirts</a></p>
		</div>
		<nav>
			<ul>
				<li><a href="index.html">Inicio</a></li>
				<li><a href="quienessomos.html">Quienes Somos</a></li>
				<li><a href="#">Catalago</a></li>
				<li><a href="contacto.html">Contacto</a></li>
				<li><a href="clientes.html">Clientes</a></li>
			</ul>
		</nav>
	</div>
</header>
<div class="contenedor">
		        <ul>
				     <li>
					 <br>
					 <br>
					 <br>
					 <br>
					 <br>
					 <br>
					 </li>
					    <section >
			<div>
                <center><table  ></center>
                <tr>
                    <th>id</th>
					<th>marca</th>
                    <th>modelo</th>
                    <th>talla</th>
                    <th>color</th>
					<th>precio</th>
		</tr>
                <?php
								include_once 'conexion.php';
								$mysqli = new mysqli($hostdb,$usuariodb,$clavedb,$basededatos);
								if ($mysqli -> connect_errno) {
								die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno(). ") " . $mysqli -> mysqli_connect_error());			
								}
								else
								{
								$sql_query="SELECT * FROM camisaas";
								$resultado=$mysqli->query($sql_query);
								while($registro = $resultado->fetch_assoc()) 
								{
								?>
									
								<tr>
									<td><?php echo $registro["id"]; ?></td>
									<td><?php echo $registro["marca"]; ?></td>
									<td><?php echo $registro["modelo"]; ?></td>
									<td><?php echo $registro["talla"]; ?></td>
									<td><?php echo $registro["color"]; ?></td>
									<td><?php echo $registro["precio"]; ?></td>
                                </tr>
								<td><a href="javascript:eliminar_id('<?php echo $registro["id"]; ?>')"><button type="submit" name="botonborrar"><strong>Borrar</strong></button></a></td>
						<?php
						}
				    }
				 ?>
				</table>
            </div>
    </section>	
    <br>
    <br>
    <br>
    <br>
    <section>
	<div>
		<header>
				<form method="post">
               <center> <table>                          
                <tr>
                   
                        <input type="text" name="id" placeholder="camisas" required/>
                    
                        <input type="text" name="marca" placeholder="ingresar marca" required />
                        <input type="text" name="modelo" placeholder="ingresar modelo" required />
                        <input type="text" name="talla" placeholder="ingresar talla" required />
                        <input type="text" name="color" placeholder="ingresar color" required />
						 <input type="text" name="precio" placeholder="ingresar precio" required />
                </tr>
                <tr>
                        <td><button type="submit" name="botonenviar"><strong>Enviar</strong></button></td>
                </tr>
                </table></center>
                </form>
        </header>									
    </div>
	</section>
					</li>
					 
				</ul>
		   </div>
<div class="ancho-letras">
	<div class="letras-slider">
		<p class="animated slideInUp"></p>
	</div>
</div>
<div id="particles-js"></div>
<section class="wap">
	<section class=""> 
	
<script src="particles.js"></script>
<script src="app.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="alto.js"></script>
</body>
</html>