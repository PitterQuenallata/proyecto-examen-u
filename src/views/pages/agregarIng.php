<div class="content-wrapper">

  <section class="content-header">
    
    <h1>Administrar Usuarios</h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Tablero</li>
    
    </ol>

  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">

      </div>
      <div class="box-body">
      <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         <thead>
         <tr>
           <th style="width:10px">#</th>
           <th>Nombre</th>
           <th>Usuario</th>
           <th>Foto</th>
           <th>Perfil</th>
           <th>Estado</th>
           <th>Último login</th>
           <th>Acciones</th>

         </tr> 
         </thead>
         <tbody>
        <?php
            $item = null;
            $valor = null;
            $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
            foreach ($usuarios as $key => $value){
         
              echo ' <tr>
                      <td>1</td>
                      <td>'.$value["nombre"].'</td>
                      <td>'.$value["usuario"].'</td>';
    
                      if($value["foto"] != ""){
    
                        echo '<td><img src="'.$value["foto"].'" class="img-thumbnail" width="40px"></td>';
    
                      }else{
    
                        echo '<td><img src="vistas/img/usuarios/anonymous.png" class="img-thumbnail" width="40px"></td>';
    
                      }
    
                      echo '<td>'.$value["perfil"].'</td>';
    
                      if($value["estado"] != 0){
    
                        echo '<td><button class="btn btn-success btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="0">Activado</button></td>';
    
                      }else{
    
                        echo '<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="1">Desactivado</button></td>';
    
                      }             
    
                      echo '<td>'.$value["ultimo_login"].'</td>
                      <td>
    
                        <div class="btn-group">
                            
                          <button class="btn btn-warning btnEditarUsuario" idUsuario="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fa fa-pencil"></i></button>
    
                          <button class="btn btn-danger btnEliminarUsuario" idUsuario="'.$value["id"].'" fotoUsuario="'.$value["foto"].'" usuario="'.$value["usuario"].'"><i class="fa fa-times"></i></button>
    
                        </div>  
    
                      </td>
    
                    </tr>';
            }
    
        ?>
        </tbody>
        </table>
        Start creating your amazing application!
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        Footer
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->