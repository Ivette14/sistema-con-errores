          <div class="row">
          <div class="col-lg-12">
            <center><h1> Areas</h1></center>
            <ol class="breadcrumb">
             
              <li class="active"></i><h4> Agregar Area</h4></li>
            </ol>
            
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-6">

            <form method="post" role="form">
              <div class="form-group">
                <label>Nombre del Area</label>
                <input name="nombre_area" class="form-control" value="<?= set_value('nombre_area');?>">
              </div>

              <div class="form-group">
                Sucursal<select class="form-control" name="id_sucursal" value="<?= set_value('id_sucursal');?>"> 
                <?php foreach ($id_sucursales as $id_sucursal => $sucursal)    
                echo '<option values="',$id_sucursal,'">',$sucursal,'</option>';?>
              </select>

              </div> 

              <div class="form-group">
                <input type="hidden" name="post" value="1" />                
                <button type="submit" value="agregar" class="btn btn-primary">Guardar</button>
                <button type="button" onclick=location="<?php echo base_url().'crud_area'; ?>" class="btn btn-primary">Cancelar</button>                
              </div>              


            </form>

           </div>
        </div><!-- /.row -->
      <?= validation_errors(); ?>