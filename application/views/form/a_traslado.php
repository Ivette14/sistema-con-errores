id_sucursal <div class="row">
  <div class="col-lg-12">
     <br><br>
            <ol class="breadcrumb">
             
              <li class="active"></i><h4> Traslado de Activo Fijo</h4></li>
            </ol>
            
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-6">

            <form method="post" role="form">
              <div class="form-group">
                <label>Codigo Traslado de Activo </label>
                <input name="codigo_traslado" class="form-control" value="<?= set_value('codigo_traslado');?>">
              </div>

               <div class="form-group">
                <label>Codigo Activo </label>
                <input name="codigo_activo" class="form-control" value="<?= set_value('codigo_activo');?>">
              </div>

              <div class="form-group">
                <label>Motivo de Traslado </label>
                <input name="motivo_traslado" class="form-control" value="<?= set_value('motivo_traslado');?>">
              </div>

              <div class="form-group">
                <label>Fecha de Traslado </label>
                <input type="date" name="fecha_traslado" class="form-control" value="<?= set_value('fecha_traslado');?>">
              </div>              

              <div class="form-group">
                <select name="id_sucursal" class="form-control" id="id_sucursal">
          <?php 
              foreach($sucursal as $fila)
              {
          ?>
            <option value="<?=$fila -> id_sucursal ?>"><?=$fila -> nombre_sucursal ?></option>
          <?php
              }
          ?>        
              </select>
              </div> 

          <div class="form-group">
                <select name="id_sucursal_r" class="form-control" id="id_sucursal_r">
          <?php 
              foreach($sucursal as $fila)
              {
          ?>
            <option value="<?=$fila -> id_sucursal ?>"><?=$fila -> nombre_sucursal ?></option>
          <?php
              }
          ?>        
              </select>
              </div> 

              <div class="form-group">
                <input  type="hidden" name="post" value="1" />                
                <button type="submit" value="Agregar" class="btn btn-primary">Guardar</button>
                <button type="button" onclick=location="<?php echo base_url().'crud_traslado'; ?>" class="btn btn-primary">Cancelar</button>
              </div>              
            </form>

           </div>
        </div><!-- /.row -->
      <?= validation_errors(); ?>