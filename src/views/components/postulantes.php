<div class="content">
    <div class="">
        <div class="">
            <div class="">
                <div class="">
                    <h4 class="">ADMINISTRAR POSTULANTES</h4>

                    <p class="">
                        <button type="button" class="btn btn-outline-secondary btn-fw" data-toggle="modal" data-target="#agregar-paquete" data-whatever="@mdo">Agregar Postulante

                        </button>
                    </p>
                    <div class="">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Postulante </th>


                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $item = null;
                                $valor = null;
                                $usuarios = ControladorPostulantes::ctrMostrarPostulantes($item, $valor);
                                foreach ($usuarios as $key => $value) {

                                    echo ' <tr>
                                <td>1</td>
                                <td>' . $value["paquete"] . '</td>
                                
                                
                                </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
<!-- 
            modal -->
            <div class="modal fade" id="agregar-paquete"tabindex="-1" role="dialog"  aria-hidden="true" >
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form role="form" method="post">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span></button>

                            </div>
                            <div class="modal-body">

                            <div class="input-group-text">
                                <i class="tim-icons icon-single-02" style="margin-right: 10px"></i>
                                <input type="" name="nuevoPaquete" class="" >
                            </div>  


                            </div>
                            <div class="modal-footer">
                                <button type="button" aria-label="breadcrumb"  class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>

                            </div>
                            <?php

                            $crearCategoria = new ControladorPostulantes();
                            $crearCategoria->ctrCrearPostulantes();

                            ?>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        </div>

        <!-- Button trigger modal -->
<!--  -->
    </div>