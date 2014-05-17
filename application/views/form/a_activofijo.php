<?php 
mysql_select_db("sys_activofijo");


?>

        <div class="row">
          <div class="col-lg-12">
<<<<<<< HEAD

            <h1>Activo Fijo <small>Tarjeta De Apertura</small> </h1><center><img src="<?php echo base_url().'seteo/logos/im/prestar.jpg'; ?>"></center>
           <br><br>
            </i>
=======
            <h1>Activo Fijo <small>Tarjeta De Apertura</small></h1>
            <ol class="breadcrumb">
             
              <li class="active"><h4> Activo Fijo</h4></li>
            </ol>
            
>>>>>>> e2dbd9935b80ce028f9ac9f4a14a1a9a851176f1
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-6">

            <form  name="fvalida" id="fvalida" method="post" role="form"  >

              <div class="form-group">
            
                  <label for="disabledSelect">Cuenta</label>
    
          <select value="<?= set_value('id_cuentacontable');?>" class="form-control" name="nombre_cuenta" onChange="submit()"> 
  
                  <?php
                  $sql="SELECT * FROM cat_cuentas_contables";
                  $rec=mysql_query($sql);
           
                   while ($row=mysql_fetch_array($rec))
                   {
            echo "<option value='".$row['vida_util']."' ";
                 if($_POST['nombre_cuenta']==$row['vida_util'])

                  echo "SELECTED";
                  echo ">";
                  echo $row['nombre_cuenta'];
                  echo "</option>";
                
                } 
                  
                   ?>   

                  </select>

</div>
<div class="form-group">
                <label>Vida Util</label>
                <input type="text" name="vida_util" readonly id="vida_util"  value=" <?php echo $_POST['nombre_cuenta']; ?>" >
                
              </div>

 <div class="form-group">
                <label>Codigo de Activo</label>
                
                <input class="form-control" name="id_activofijo"   value="<?= set_value('id_activofijo');?>">
              </div>          
 
              <div class="form-group">
                <label>Nombre del Activo</label>
                <input class="form-control" name="nombre_activo_fijo" value="<?= set_value('nombre_activo_fijo');?>">
                
              </div>

       
              <div class="form-group">
                  <label for="disabledSelect">Proveedor</label>
           <select  class="form-control" name="nombre_provee" onChange="submit()"> 
  
                  <?php
                  $sql="SELECT * FROM cat_proveedor";
                  $rec=mysql_query($sql);              
                   while ($row=mysql_fetch_array($rec))
                   {
            echo "<option value='".$row['id_proveedor']."' ";
                 if($_POST['nombre_provee']==$row['id_proveedor'])
                  echo "SELECTED";
                  echo ">";
                  echo $row['nombre_provee'];
                  echo "</option>";
                
                } 
                  
                   ?>   

                  </select>
                   <input  type="hidden" name="id_proveedor" readonly id="id_proveedor"  value=" <?php echo $_POST['nombre_provee']; ?>" >
              </div>

            <div class="form-group">
                <label>Fecha de Compra</label>
                <input class="date" type="date" name="fecha_compra" value="<?= set_value('fecha_compra');?>">
                
              </div>

              <div class="form-group">
                <label>Fecha de Ingreso</label>
                <input class="date" type="date" name="fecha_ingreso" value="<?= set_value('fecha_ingreso');?>">
                
              </div>

              <div class="form-group">
                <label>Descripcion</label>
                <textarea class="form-control" name="descripcion" rows="3" value="<?= set_value('descripcion');?>"></textarea>
              </div>

  <p>
          <label>Estado del Activo</label>            
          <input type = "radio"
                 name = "estado"
                 id = "estado"
                 value="<?= set_value('nuevo');?>"
                 checked = "checked" />
          <label for = "sizeSmall">Nuevo</label>
          
          <input type = "radio"
                 name = "estado"
                 id = "estado"
                 value="<?= set_value('usado');?>"
                />
          <label for = "sizeMed">Usado</label>
           </p>
           <p></p> 
           <p></p>  
           <p>
   <label>Valor del activo</label>  
          <input type = "radio"
                 name = "tipo_valor"
                 id = "tipo_valor"
                 checked = "checked"
                 value="<?= set_value('Real');?>"
                 />
          <label for = "sizeLarge">Real</label>
           <input type = "radio"
                 name = "tipo_valor"
                 id = "tipo_valor" 
                 value="<?= set_value('estimado');?>"
                  />
          <label for = "sizeMed">Estimado</label>
          </p>
              <ol class="breadcrumb">
             
              <li class="active"></i><h4>Asignacion del Activo</h4></li>
              </ol>

              <div class="form-group">
                  <label for="disabledSelect">Sucursal</label>
                     <select  class="form-control" name="nombre_sucursal" onChange="submit()" > 
  
                  <?php
                  $sql="SELECT * FROM cat_sucursal";
                  $rec=mysql_query($sql);              
                   while ($row=mysql_fetch_array($rec))
                   {
            echo "<option value='".$row['id_sucursal']."' ";
                 if($_POST['nombre_sucursal']==$row['id_sucursal'])
                  echo "SELECTED";
                  echo ">";
                  echo $row['nombre_sucursal'];
                  echo "</option>";
                
                } 
                  
                   ?>   

                  </select>

                   <input  type="hidden" name="id_sucursal" readonly id="id_sucursal"  value=" <?php echo $_POST['nombre_sucursal']; ?>" >
              </div>

              <div class="form-group">
                  <label for="disabledSelect">Area de Asignacion</label>
                        <select  class="form-control" name="nombre_area" onChange="submit()"  > 
  
                  <?php
                  $sql="SELECT * FROM cat_area";
                  $rec=mysql_query($sql);              
                   while ($row=mysql_fetch_array($rec))
                   {
            echo "<option value='".$row['id_area']."' ";
                 if($_POST['nombre_area']==$row['id_area'])
                  echo "SELECTED";
                  echo ">";
                  echo $row['nombre_area'];
                  echo "</option>";
                
                } 
                  
                   ?>   

                  </select>
                    <input  type="hidden" name="id_area" readonly id="id_area"  value=" <?php echo $_POST['nombre_area']; ?>" >
              </div>

              <div class="form-group">
                  <label for="disabledSelect">Empleado</label>
                       <select  class="form-control" name="nombre_empleado" onChange="submit()"      > 
  
                  <?php
                  $sql="SELECT * FROM cat_empleado";
                  $rec=mysql_query($sql);              
                   while ($row=mysql_fetch_array($rec))
                   {
            echo "<option value='".$row['id_empleado']."' ";
                 if($_POST['nombre_empleado']==$row['id_empleado'])
                  echo "SELECTED";
                  echo ">";
                  echo $row['nombre_empleado'];
                  echo "</option>";
                
                } 
                  
                   ?>   

                  </select>
                    <input  type="hidden" name="id_empleado" readonly id="id_empleado"  value=" <?php echo $_POST['nombre_empleado']; ?>" >
              </div>

              <ol class="breadcrumb">
             
              <li class="active"></i><h4>Depreciacion de Activo</h4></li>
              </ol>

              <div class="form-group">
                <label>Fecha de Inicio de Uso</label>
                <input type="date" name="fecha_inicio_uso"      value="<?= set_value('fecha_inicio_uso');?>">
                
              </div>


       <div class="form-group">
                <label>Valor Original</label>
                <input class="form-control" name="valor_original"     value="<?= set_value('valor_original');?>">
                
              </div>

              <div class="form-group">
                <label>Importe de Depreciacion</label>
                <input class="form-control" name="importe_depreciable" id="importe_depreciable"      value="<?= set_value('importe_depreciable');?>">
                
              </div>

              <div class="form-group">
                <label>Valor Residual</label>
                <input class="form-control" name="valor_residual" id="valor_residual"      value="<?= set_value('valor_residual');?>">
                
              </div>

              <div class="form-group">
                <label>Cuota Anual</label>
                <input class="form-control" readonly  name="cuota_anual"      value="<?= set_value('cuota_anual');?>" >
                
              </div>

              <div class="form-group">
                <label>Cuota Mensual</label>
                <input class="form-control" readonly  name="cuota_mensual"      value="<?= set_value('cuota_mensual');?>">
                
              </div>
               
                <input  type="hidden" name="post" value="1" />                
                <button type="submit" value="agregar" class="btn btn-primary">Guardar</button>
                  <button type="button"  class="btn btn-primary" value="Enviar" onClick="depreciacion()">Calcular</button>
                <button type="button"   onClick=location="<?php echo base_url().'crud_activo'; ?>" class="btn btn-primary">Cancelar</button>
     </fieldset>
</form>
<script type="text/javascript">

function depreciacion() {


var vida_util = document.forms['fvalida'].vida_util.value;
var importe_depreciable = document.forms['fvalida'].importe_depreciable.value;
var valor_residual = document.forms['fvalida'].valor_residual.value;
var meses = (vida_util) * 12;
var parte1 = (importe_depreciable) - (valor_residual);



var dep_anual =  (parte1) / (vida_util); 
 var dep_mensual =  (parte1) / (meses); 


document.forms["fvalida"].cuota_anual.value = dep_anual;
document.forms["fvalida"].cuota_mensual.value = dep_mensual;

//alert(dep_anual);

//alert(dep_mensual);

    } 


</script> 
</div>
</div>
           
          
                <?= validation_errors(); ?>

      

