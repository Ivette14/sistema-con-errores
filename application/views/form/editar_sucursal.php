<div class="row">
          <div class="col-lg-12">
            <center><h1>Sucursales</h1></center>
            <ol class="breadcrumb">
             
              <li class="active"></i><h4> Editar Sucursal</h4></li>
            </ol>
            
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-6">

            <form method="post" role="form">
              <div class="form-group">
                <label>Nombre de la Sucursal</label>
                <input name="nombre_sucursal" class="form-control" value="<?= set_value('nombre_sucursal',$dato['nombre_sucursal']);?>">
              </div>

               <div class="form-group">
                <label>Telefono</label>
                <input name="telefono_sucursal" class="form-control" value="<?= set_value('telefono_sucursal',$dato['telefono_sucursal']);?>">
              </div>

              <div class="form-group">
                <label>Direccion</label>
                <input name="direccion_sucursal" class="form-control" value="<?= set_value('direccion_sucursal',$dato['direccion_sucursal']);?>">
              </div>

              <div class="form-group">
                  <label for="disabledSelect">Dapartamento</label>
                  <select id="disabledSelect" name="departamento" class="form-control" value="<?= set_value('departamento',$dato['departamento']);?>">>
                  <option>Seleccione un Dapartamento</option>
                  <option>San</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
                  <option>11</option>
                  <option>12</option>
                  <option>13</option>
                  <option>14</option>
                </select>
              </div>
 

              <div class="form-group">
              	<input  type="hidden" name="post" value="1" />    			
                <button type="submit" value="Editar" class="btn btn-primary">Guardar</button>
                <button type="button" onclick=location="<?php echo base_url().'crud/index'; ?>" class="btn btn-primary">Cancelar</button>
              </div>   


            </form>

    </div>
</div>