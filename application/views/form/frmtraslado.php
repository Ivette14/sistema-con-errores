        <div class="row">
          <div class="col-lg-12">
            <br><br>
            <ol class="breadcrumb">
             
              <li class="active"></i><center><h4> Traslados de Activo Fijo</h4></center></li>
            </ol>
            
          </div>
        </div><!-- /.row -->

            <!-- /.row -->
        <div class="form-group"> <button type="button" onclick=location="<?php echo base_url().'crud_traslado/Agregar'; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>&nbsp;Agregar</button></div>       
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                      <form method="post" role="form">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Codigo Traslado de Activo</th>
                                            <th>Codigo de Activo</th>
                                            <th>Motivo de Traslado</th>
                                            <th>Fecha de Traslado</th>                                            
                                            <th>Emisor de Traslado</th>
                                            <th>Receptor de Traslado</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php foreach ($traslados as $traslado):?>
                                            <tr>
                                            <td><?= $traslado->codigo_traslado?></td>   
                                            <td><?= $traslado->id_activofijo?></td> 
                                            <td><?= $traslado->motivo_traslado?></td> 
                                            <td><?= $traslado->fecha_traslado?></td>                                            
                                            <td><?= $traslado->nombre_sucursal?></td>
                                            <td><?= $traslado->nombre_sucursal?></td>
                                             <td align="center"><button type="button" onclick=location="<?php echo base_url().'crud_area/editar/'.$traslado->id_traslado_activo; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i>&nbsp;Editar</button></td>
                                            <td align="center"><button type="button" onclick=location="<?php echo base_url().'crud_area/eliminar/'.$traslado->id_traslado_activo; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i>&nbsp;Eliminar</button></td> 
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