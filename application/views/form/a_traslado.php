 <div class="row">
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
                <input name="motivo_taslado" class="form-control" value="<?= set_value('motivo_taslado');?>">
              </div>

              <div class="form-group">
                <label>Fecha de Traslado </label>
                <input type="date" name="fecha" name="fecha_traslado" class="form-control" value="<?= set_value('fecha_traslado');?>">
              </div>

              <div class="form-group">
                <label>Solicitud de Traslado </label>                
                <input type="radio" name="solicitud_traslado" id="optionsRadios1" value="<?= set_value('solicitud_traslado');?>"> Ok
              </div>

              <div class="form-group">
                <label>Emisor de Traslado </label>
                <input name="emisor_traslado" class="form-control" value="<?= set_value('emisor_traslado');?>">
              </div>

              <div class="form-group">
                <label>Receptor de Traslado </label>
                <input name="receptor_traslado" class="form-control" value="<?= set_value('receptor_traslado');?>">
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