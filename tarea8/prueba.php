<?php
include('conex/conex.php');
include('conex/conx.php');

if($_POST){
 extract($_POST);
 $insert="insert into cliente (apellido)value ('{$cedula}')";
 conexion:: ejercutar($insert);
}


?>




<form   method="POST"class="needs-validation" novalidate>
  
  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="nombre">cedula</label>
                      <input name="cedula" type="text" class="form-control" id="cedula" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>    
                    </div>
  
  <button type="submit" class="btn btn-primary">enviar</button>
  <a  class='btn'  href="inicio.php" ><button type="button"   class="btn btn-success">atras</button></a>
</form>
</div>   
    </div>
            </div>       
        </div>                  
    </div>