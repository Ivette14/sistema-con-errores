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

            <form role="form">

              

              <div class="form-group">
                <label>Codigo de Activo</label>
                <input class="form-control" placeholder="Enter text">
              </div>

                <div class="form-group">
                  <label for="disabledSelect">Cuenta Contable</label>
                  <select id="disabledSelect" class="form-control">
                    <option>Seleccione una Cuenta</option>
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
                  <select id="disabledSelect" class="form-control">
                    <option>Seleccione un Proveedor</option>
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

              <div class="form-group">
                <label>Estado del Activo</label>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    Nuevo
                  </label>
                </div>
               <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    Usado
                  </label>
                </div>               
              </div>

              <div class="form-group">
                <label>Valor del Activo</label>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    Real
                  </label>
                </div>
               <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    Estimado
                  </label>
                </div>               
              </div>

              <ol class="breadcrumb">
             
              <li class="active"></i><h4>Asignacion del Activo</h4></li>
              </ol>

              <div class="form-group">
                  <label for="disabledSelect">Sucursal</label>
                  <select id="disabledSelect" class="form-control">
                    <option>Seleccione una Sucursal</option>
                  </select>
              </div>

              <div class="form-group">
                  <label for="disabledSelect">Area de Asignacion</label>
                  <select id="disabledSelect" class="form-control">
                    <option>Seleccione una Area</option>
                  </select>
              </div>

              <div class="form-group">
                  <label for="disabledSelect">Empleado</label>
                  <select id="disabledSelect" class="form-control">
                    <option>Seleccione un Empleado</option>
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

         