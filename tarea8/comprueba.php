<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
          try {
            
               $base= new PDO("mysql:host=localhost; dbname=prueba","root","");
               $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
               $sql="select * from userio WHERE correo = :login and pass=:password   and tipo=:tipos OR tipo=:tipos"; 
               
                    $resultado=$base->prepare($sql);
                    $login=htmlentities(addslashes($_POST['usuario']));
                    $password=htmlentities(addslashes($_POST['clave']));
                    $resultado->bindValue(":login",$login);
                    $resultado->bindValue(":password",$password);
                    $resultado->bindValue(":tipos",$password);
                    $resultado->execute();
               $registro=$resultado->rowCount();
               if($registro !=0){
                echo"
                <script>
                window.location='index.php';
                </script>
                ";
                

               }else{
                   header("location:login.php");
               }
           

          } catch (Exception  $th) {
               die("ERROR DE CONEXION".$th->getMessage());
          }


    ?>
</body>
</html>