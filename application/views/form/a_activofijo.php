<?php 
mysql_select_db("sys_activofijo");


?>

        <div class="row">
          <div class="col-lg-12">
            <h1>Activo Fijo <small>Tarjeta De Apertura</small></h1>
            <ol class="breadcrumb">
             
              <li class="active"></i><h4> Activo Fijo</h4></li>
            </ol>
            
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-6">

            <form name="fvalida" id="fvalida" method="post" role="form">

              
              <div class="form-group">
                <label>Codigo de Activo</label>
                <input  class="form-control" name="id_activo_fijo"  placeholder="Enter text">
              </div>



                  <label for="disabledSelect">Cuenta</label>
    
          <select  class="form-control" name="nombre_cuenta" onChange="submit()"> 
  
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
          <div class="form-group">
                <label>Vida Util</label>
                <input type="text" name="vida_util" id="vida_util" value="<?php echo $_POST['nombre_cuenta']; ?>" readonly>
                
              </div>

     
 
              <div class="form-group">
                <label>Nombre del Activo</label>
                <input class="form-control" name="nombre_activo">
                
              </div>

       
              <div class="form-group">
                  <label for="disabledSelect">Proveedor</label>
                  <select  class="form-control" name="data"> 
                  <option></option> 
                  <?php foreach ($cat_proveedor as $i => $nombre_provee)    
  echo '<option values="',$i,'">',$nombre_provee,'</option>';

   ?>
                  </select>
              </div>

            <div class="form-group">
                <label>Fecha de Compra</label>
                <input type="date" name="fecha_compra">
                
              </div>

              <div class="form-group">
                <label>Fecha de Ingreso</label>
                <input type="date" name="fecha_ingreso">
                
              </div>

              <div class="form-group">
                <label>Descripcion</label>
                <textarea class="form-control" rows="3"></textarea>
              </div>

  <p>
          <label>Estado del Activo</label>            
          <input type = "radio"
                 name = "radSize1"
                 id = "sizeSmall"
                 value = "small"
                 checked = "checked" />
          <label for = "sizeSmall">Nuevo</label>
          
          <input type = "radio"
                 name = "radSize1"
                 id = "sizeMed"
                 value = "medium" />
          <label for = "sizeMed">Usado</label>
           </p>
           <p></p> 
           <p></p>  
           <p>
   <label>Valor del activo</label>  
          <input type = "radio"
                 name = "radSize2"
                 id = "sizeLarge"
                 value = "large" />
          <label for = "sizeLarge">Real</label>
           <input type = "radio"
                 name = "radSize2"
                 id = "sizeMed"
                 value = "medium" />
          <label for = "sizeMed">Estimado</label>
          </p>
              <ol class="breadcrumb">
             
              <li class="active"></i><h4>Asignacion del Activo</h4></li>
              </ol>

              <div class="form-group">
                  <label for="disabledSelect">Sucursal</label>
                  <select name="data" class="form-control">
                    <option> </option>
                     <?php foreach ($cat_sucursal as $i => $nombre_sucursal)    
  echo '<option values="',$i,'">',$nombre_sucursal,'</option>'; ?>
                  </select>
              </div>

              <div class="form-group">
                  <label for="disabledSelect">Area de Asignacion</label>
                  <select name="data" class="form-control">
                    <option>  </option>
                    <?php foreach ($cat_area as $i => $nombre_area)    
  echo '<option values="',$i,'">',$nombre_area,'</option>'; ?>
                  </select>
              </div>

              <div class="form-group">
                  <label for="disabledSelect">Empleado</label>
                  <select name="data" class="form-control">
                    <option> </option>
                    <?php foreach ($cat_empleado as $i => $nombre_empleado)    
  echo '<option values="',$i,'">',$nombre_empleado,'</option>'; ?>
                  </select>
              </div>

              <ol class="breadcrumb">
             
              <li class="active"></i><h4>Depreciacion de Activo</h4></li>
              </ol>

              <div class="form-group">
                <label>Fecha de Inicio de Uso</label>
                <input type="date" name="fecha">
                
              </div>
       <div class="form-group">
                <label>Valor Original</label>
                <input class="form-control" name="valor_original" id="valor_original">
                
              </div>

              <div class="form-group">
                <label>Importe de Depreciacion</label>
                <input class="form-control" name="importe_depreciable" id="importe_depreciable">
                
              </div>

              <div class="form-group">
                <label>Valor Residual</label>
                <input class="form-control" name="valor_residual" id="valor_residual" >
                
              </div>

              <div class="form-group">
                <label>Cuota Anual</label>
                <input class="form-control" name="depreciacion_anual" >
                
              </div>

              <div class="form-group">
                <label>Cuota Mensual</label>
                <input class="form-control" name="depreciacion_mensual" >
                
              </div>
               
                 <button type="submit" class="btn btn-primary">Guardar</button>
                  <button type="button" class="btn btn-primary" value="Enviar" onClick="depreciacion()">Calcular</button>
                <button type="button" onClick=location="<?php echo base_url().'crud_activo'; ?>" class="btn btn-primary">Cancelar</button>
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


document.forms["fvalida"].depreciacion_anual.value = dep_anual;
document.forms["fvalida"].depreciacion_mensual.value = dep_mensual;

//alert(dep_anual);

//alert(dep_mensual);

    } 


</script> 
           
          
                <?= validation_errors(); ?>

      

