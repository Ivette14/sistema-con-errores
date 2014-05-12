        <div class="row">
          <div class="col-lg-12">
            <center><h1>Activo Fijo</h1></center>
            <ol class="breadcrumb">
             
              <li class="active"></i><center><h4> Edicion de Activo Fijo</h4></center></li>
            </ol>
            
          </div>
        </div><!-- /.row -->

            <!-- /.row -->
        <div class="form-group"> <button type="button" onclick=location="<?php echo base_url().'direccion/hrefa_activo'; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>&nbsp;Nuevo</button></div>       
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                      <form action="" id="tabla_sucursal" method="post" role="form">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nombre del Activo</th>
                                            <th> Valor Original</th>
                                            <th>Fecha Compra</th>
                                            <th>Estado</th>
                                            <th>Fecha Ingreso</th>
                                            <th>Vida Util</th>
                                            <th>Descripcion</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                            <?php foreach ($activo as $activo):?>
                                            <tr>
                                            <td><?= $activo->nombre_activo_fijo?></td>   
                                            <td><?= $activo->fecha_compra?></td> 
                                            <td><?= $activo->estado?></td> 
                                            <td><?= $activo->fecha_ingreso?></td>
                                            <td><?= $activo->vida_util ?></td>
                                            <td><?= $activo->descripcion ?></td>
                                            <td align="center"><button type="button" onclick=location="<?php echo base_url().'crud_activo/editar/'.$activo->id_activofijo; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i>&nbsp;Editar</button></td>
                                            <td align="center"><button type="button" onclick=location="<?php echo base_url().'crud_activo/eliminar/'.$activo->id_activofijo; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i>&nbsp;Eliminar</button></td> 
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