        <div class="row">
          <div class="col-lg-12">
            <center><h1>Baja de Activo Fijo</h1></center>
            <ol class="breadcrumb">
             
              <li class="active"></i><center><h4> </h4></center></li>
            </ol>
            
          </div>
        </div><!-- /.row -->

            <!-- /.row -->
               <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                      <form  method="post" role="form">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Codigo de activo fijo</th>
                                            <th>Descripcion</th>
                                            <th>fecha De Baaja </th>
                                            <th>motivo de Baja</th>
                                            <th>Numero de Autorizacion</th>
                                            <th></th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                             <?php foreach ($activo as $activo):?>
                                            <tr>
                                             
                                            <td><?= $activo->id_activofijo?></td>   
                                            <td><?= $activo->descripcion?></td>
                                            <td> <input type="date" name="fecha_baja"></td> 
                                           <td><input name="motivo_baja" class="form-control"></td> 
                                            <td><input name="num_autorizacion" class="form-control"></td> 
                                             <td align="center"><button type="button" onclick=location="<?php echo base_url().'crud_baja/baja_activo/'.$activo->id_activofijo; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i>&nbsp;Dar De Baja</button></td>
                                           
                                            </tr>
                                          <?php endforeach ;?>
                                    
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->                           
                        </div>
                        <!-- /.panel-body -->
                     </form>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>