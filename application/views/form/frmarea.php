 <div class="row">
          <div class="col-lg-12">
            <center><h1> Areas</h1></center>
            <ol class="breadcrumb">
             
              <li class="active"></i><center><h4> Edicion de Areas</h4></center></li>
            </ol>
            
          </div>
        </div><!-- /.row -->

            <!-- /.row -->
        <div class="form-group"> <button type="button" onclick=location="<?php echo base_url().'crud_area/Agregar'; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>&nbsp;Agregar</button></div>       
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
                                            <th>Nombre de la Area</th>
                                            <th>Sucursal</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            
                                            <?php foreach ($areas as $area):?>
                                            <tr>
                                            <td><?= $area->nombre_sucursal?></td>   
                                            <td><?= $area->telefono_sucursal?></td>
                                            <td><a href="<?= base_url().'crud_area/Editar/'.$area->id_area?>">Editar</a></td>
                                            <td><a href="<?= base_url().'crud_area/Eliminar/'.$area->id_area?>">Eliminar</a></td> 
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