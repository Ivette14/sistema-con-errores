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

            <form action="<?php echo base_url().'area/insertar_area'; ?>" method="post" role="form">
              <div class="form-group">
                <label>Nombre del Area</label>
                <input name="nombre_area" class="form-control">
              </div>

              <div class="form-group">
                  <label for="disabledSelect">Sucursal</label>
                  <select id="disabledSelect" name="sucursal" class="form-control">
                  <option>Seleccione una Sucursal</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
 

              <div class="form-group">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="button" onclick=location="<?php echo base_url().'direccion/hrefarea'; ?>" class="btn btn-primary">Cancelar</button>                
              </div>              


            </form>

           </div>
        </div><!-- /.row -->