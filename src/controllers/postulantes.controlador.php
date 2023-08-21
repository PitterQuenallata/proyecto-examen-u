<?php

class ControladorPostulantes
{


    /*=============================================
	MOSTRAR CATEGORIAS
	=============================================*/

    static public function ctrMostrarPostulantes($item, $valor)
    {

        $tabla = "paquetes";

        $respuesta = ModeloPostulantes::mdlMostrarPostulantes($tabla, $item, $valor);

        return $respuesta;
    }

    /*=============================================
	CREAR CATEGORIAS
	=============================================*/

    static public function ctrCrearPostulantes()
    {
        // echo "fdsf";
        if (isset($_POST["nuevoPaquete"])) {

            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoPaquete"])) {

                $tabla = "paquetes";

                $datos = $_POST["nuevoPaquete"];

                $respuesta = ModeloPostulantes::mdlIngresarPostulantes($tabla, $datos);

                if ($respuesta == "ok") {

                    echo '<script>

					swal({
						  type: "success",
						  title: "La categoría ha sido guardada correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "postulantes";

									}
								})

					</script>';
                }
            } else {

                echo '<script>

					swal({
						  type: "error",
						  title: "¡La categoría no puede ir vacía o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
							if (result.value) {

							window.location = "postulantes";

							}
						})

			  	</script>';
            }
        }
    }
}
