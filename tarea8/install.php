<?php
$mensaje= array();
$txt="";
if($_POST){

  $txt=$_POST['datos'];
   $datos=explode(';',$txt);

   $ok=true;
   
   if(count($datos)!=4)
   {
      
     $mensaje[]="datos incompletos";
     $ok=false;
   }
      if($ok){
        
     $link=mysqli_connect($datos[0],$datos[1],$datos[2]);

     if($link==false){
       $mensaje[]="tenemos un problema con la conexion";
     }
     else{
     $sql="CREATE DATABASE {$datos[3]}";
     mysqli_query($link, $sql);
     //utiliza la base de datos
     mysqli_query($link,"USE {$datos[3]}");
     //ejecuta el sql
     $sql="DROP TABLE IF EXISTS `hotel`;";
     mysqli_query($link,$sql);
     //crea la tabla
     $sql="CREATE TABLE `hotel` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `nombre` varchar(100) NOT NULL,
      `apellido` varchar(100) NOT NULL,
      `pasaporte` varchar(100) NOT NULL,
      `pais` varchar(100) NOT NULL,
      `telefono` varchar(100) NOT NULL,
      `entrada` date NOT NULL,
      `salida` date NOT NULL,
      `habitation` int(11) NOT NULL,
      `usuario` varchar(100) NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;";
      mysqli_query($link,$sql);
    //crea los datos
  

    $info="<?php
    define('BD_HOST','{$datos[0]}');
    define('BD_USER','{$datos[1]}');
    define('BD_PASS','{$datos[2]}');
    define('BD_NAME','{$datos[3]}');
    ?>" ;

    file_put_contents("conex/conex.php",$info);
    echo"
    <script>
    alert('base de datos intalada');
    window.location='index.php';
    </script>
    ";
     }
   }
$mensaje=implode("<br/>",$mensaje);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>instalador magico</title>
    <style>
    .asg_error{
      font-weight:bold;
      color:red;
    }
    </style>
</head>
<body>
<h3>El futuro es hoy</h3>
<center><p> Digite: servidor;usuario;clave ;basedatos seguir el orden. </p></center>
<form  method="post">
<div class="asg_error">
<?php  echo $mensaje;  ?>
</div>
<div class="container">
    <div class="">
    <input value="<?php  echo $txt; ?>" type="text" name="datos" id="datos" class="form-control" />
    </div>
</div>
<button type="submit" class="btn btn-primary">Instalar</button>
</form>

    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>