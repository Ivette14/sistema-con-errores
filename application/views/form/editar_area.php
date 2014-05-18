          <div class="row">
          <div class="col-lg-12">
           <br><br>
            <ol class="breadcrumb">
             
              <li class="active"></i><h4> Editar Area</h4></li>
            </ol>
            
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-6">

            <form method="post" role="form">

              <div class="form-group">
                <label>Nombre del Area</label>
                <input name="nombre_area" class="form-control" value="<?= set_value('nombre_area',$dato['nombre_area']);?>">
              </div>

              <div class="form-group">
                <select name="id_sucursal" class="form-control" id="id_sucursal" value="<?= set_value('id_sucursal',$dato['id_sucursal']);?>">
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
                <input type="hidden" name="post" value="1" />                
                <button type="submit" value="editar" class="btn btn-primary">Guardar</button>
                <button type="button" onclick=location="<?php echo base_url().'crud_area'; ?>" class="btn btn-primary">Cancelar</button>                
              </div>              


            </form>

           </div>
        </div><!-- /.row -->
      <?= validation_errors(); ?>