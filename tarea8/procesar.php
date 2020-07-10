
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de reservas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="fondo">

<div style="margin-top: 40px;margin-bottom: 200px;">
<h3>lista de usuario</h3>
<table class='table'>
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Pasaporte</th>
      <th>Correo</th>
      <th>Telefono</th>
      <th>Pais</th>
      <th>Entrada</th>
      <th>Salida</th>
      <th>habitacion</th>
      

    </tr>
  </thead>
  <tbody>
<?php

include('conex/conex.php');
include('conex/conx.php');
$datos=conexion::query("select * from  hotel");
foreach($datos as $data){

    
    echo"
    
    
 
  <tbody>
  <tr>
  <td>{$data['nombre']}</td>
  <td>{$data['apellido']}</td>
  <td>{$data['pasaporte']}</td>
  <td>{$data['usuario']}</td>
  <td>{$data['telefono']}</td>

  <td>{$data['pais']}</td>
  <td>{$data['entrada']}</td>
  <td>{$data['salida']}</td>
  <td>{$data['habitation']}</td>
 
  </tr>
  

    ";
}
?>
</tbody>

</table>
</div>
  <a href="index.php"><button style="float: right" type="button" class="btn btn-success" >Atras</button></a> 
     
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
  </html>