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

            <form role="form" method="POST">

              

              <div class="form-group">
                <label>Codigo de Activo</label>
                <input class="form-control" placeholder="Enter text">
              </div>

                <div class="form-group">
                  <label for="disabledSelect">Cuenta</label>
                  
               <select class="form-control" name='data' >
                <option>  </option>
  <?php foreach ($cat_cuentas_contables as $i => $nombre_cuenta)    
  echo '<option values="',$i,'">',$nombre_cuenta,'</option>'; ?>

                </select>

                 </div> 

              <div class="form-group">
                <label>Nombre del Activo</label>
                <input class="form-control">
                
              </div>

              <div class="form-group">
                <label>Valor Original</label>
                <input class="form-control">
                
              </div>

              <div class="form-group">
                  <label for="disabledSelect">Proveedor</label>
                  <select  class="form-control" name="data"> 
                  <option></option> 
                  <?php foreach ($cat_proveedor as $i => $nombre_provee)    
  echo '<option values="',$i,'">',$nombre_provee,'</option>'; ?>
                  </select>
              </div>


              <div class="form-group">
                <label>Fecha de Compra</label>
                <input type="date" name="fecha">
                
              </div>

              <div class="form-group">
                <label>Fecha de Ingreso</label>
                <input type="date" name="fecha">
                
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
                <label>Importe de Depreciacion</label>
                <input class="form-control">
                
              </div>

              <div class="form-group">
                <label>Valor Residual</label>
                <input class="form-control">
                
              </div>

              <div class="form-group">
                <label>Vida Util</label>
                <input class="form-control">
                
              </div>

              <div class="form-group">
                <label>Años de Uso</label>
                <input class="form-control">
                
              </div>

              <div class="form-group">
                <label>Cuota Anual</label>
                <input class="form-control">
                
              </div>

              <div class="form-group">
                <label>Cuota Mensual</label>
                <input class="form-control">
                
              </div>


                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="submit" class="btn btn-primary">Calcular</button>
                <button type="button" onclick=location="<?php echo base_url().'direccion/hrefaf'; ?>" class="btn btn-primary">Cancelar</button>

              </fieldset>

            </form>

         