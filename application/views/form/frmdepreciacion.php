        <div class="row">
          <div class="col-lg-12">
            <br><br>
            <ol class="breadcrumb">
             
              <li class="active"></i><center><h4> Depreciacion de Activo Fijo</h4></center></li>
            </ol>
            
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">

            <form action="<?php echo base_url().'Sucursal/insertar_sucursal'; ?>" id="mi_form" method="post" role="form">

                     


            </form>

           </div>
        </div><!-- /.row -->


            <!-- /.row -->
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
                                            <th>Codigo de Activo</th>
                                            <th>Nombre</th>
                                            <th>Nombre Cuenta</th>
                                            <th>Depreciacion Mensual</th>
                                              <th>importe </th>
                                            <th>Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                           
                                            <?php foreach ($saldo as $saldo):?>
                                            <tr>
                                            <td><?= $saldo->id_activofijo?></td>   
                                            <td><?= $saldo->nombre_activo_fijo?></td> 
                                            <td><?= $saldo->id_cuentacontable?></td> 
                                            <td> $ <?= $saldo->cuota_mensual?></td>
                                            <td><input  name="importe_depreciable" readonly id="importe_depreciable"   value="<?= set_value('importe_depreciable');?>"> </td>
                                            <td><input  name="valor_residual" readonly id="valor_residual"   value="<?= set_value('valor_residual');?>"> </td>
                                             <td align="center"><button type="button" onclick=location="<?php echo base_url().'crud_depreciacion/depreciacion/'.$saldo->id_activofijo; ?>" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i>&nbsp;Depreciar</button></td>
                                  
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
