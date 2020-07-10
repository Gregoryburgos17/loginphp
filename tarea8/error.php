<?php

$base= new PDO("mysql:host=localhost; dbname=prueba","root","");
$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$sql="select * from userio WHERE correo = :login and pass=:password   and tipo='admin' OR tipo='user'"; 
$resultado=$base->prepare($sql);
//$login=htmlentities(addslashes($_POST['usuario']));
                    //$password=htmlentities(addslashes($_POST['clave']));
                    $resultado->bindValue(":login","juan");
                    $resultado->bindValue(":password","1234");
                    $resultado->execute();

                    $registro=$resultado->rowCount();
var_dump($registro);




?>
