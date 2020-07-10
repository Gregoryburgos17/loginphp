<?php
include('conex/conex.php');
include('conex/conx.php');

if($_POST){
  extract($_POST);
  $insert="insert into hotel (nombre,apellido,pasaporte,pais,telefono,entrada,salida,habitation,usuario)value ('{$cedula}','{$apellido}','{$direccion}','{$pais}','{$telefono}','{$entrada}','{$salida}','{$habitacion}','{$usuario}')";
  conexion:: ejercutar($insert);
 }


?>

        <form id="form1"  method="POST" class="needs-validation" novalidate>
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="nombre">Nombre</label>
                      <input name="cedula" type="text" class="form-control" id="cedula" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>    
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="apellido">Apellido</label>
                      <input name="apellido" type="text" class="form-control" id="apellido" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>
                  </div>

                
                    <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="direccion">pasaporte</label>
                      <input name="direccion" type="text" class="form-control" id="direccion" placeholder="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>
                       
                    <div class="col-md-4 mb-3">
                      <label for="pais">pais de origen </label>
                      <select class="form-control"id="pais" name="pais" required>
                        <option>...</option>
                        <option>RD</option>
                        <option>EEUU</option>
                        <option>japon</option>
                        <option>corea</option>
                        </select>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>
                  </div>

                    <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="direccion">telefono</label>
                      <input name="telefono" type="text" class="form-control" id="direccion" placeholder="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>
                    <div class="form-row">
                    <div class="col-md-7 mb-3">
                    <label for="direccion">fecha de entrada</label>
                       <input id="date" name="entrada" type="date">
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>   
                    </div>
                    </div>
                    <div class="form-row">
                    <div class="col-md-7 mb-3">
                    <label for="direccion">fecha de salida</label>
                       <input id="date" name="salida" type="date">
                    <div class="valid-feedback">¡Ok válido!</div>
                    <div class="invalid-feedback">Complete el campo.</div>   
                    </div>
                    </div>

                    <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="habitacion">numero de habitacion </label>
                      <input name="habitacion" type="number" class="form-control" value="1"id="pas" placeholder="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>
                       
                       
                    <div class="col-md-7 mb-5">
                      <label for="usuario">Correo</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                        </div>
                        <input name="usuario" type="email" class="form-control" id="usuario" placeholder="" aria-describedby="inputGroupPrepend" required>
                        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                      </div>
                    </div>
                  
                 
                 <div class="form-group">
                    <div class="form-check">
                      <div class="col-md-4 md-3 ">
                           <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                           <label class="form-check-label" for="invalidCheck">Acepto </label>
                           <div class="valid-feedback">¡Aceptado!</div>
                       </div>
                    </div>
                 </div>
                  <div class="col-md-4 ">
                  <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
                </form>
        </div>   
    </div>
            </div>       
        </div>                  
    </div>
      
