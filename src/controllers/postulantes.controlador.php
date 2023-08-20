<?php

class ControladorPaquetes
{


    /*=============================================
	MOSTRAR CATEGORIAS
	=============================================*/

    static public function ctrMostrarPaquetes($item, $valor)
    {

        $tabla = "paquetes";

        $respuesta = ModeloPaquetes::mdlMostrarPaquetes($tabla, $item, $valor);

        return $respuesta;
    }

    /*=============================================
	CREAR CATEGORIAS
	=============================================*/

    static public function ctrCrearPaquetes()
    {
        // echo "fdsf";
        if (isset($_POST["nuevoPaquete"])) {

            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoPaquete"])) {

                $tabla = "paquetes";

                $datos = $_POST["nuevoPaquete"];

                $respuesta = ModeloPaquetes::mdlIngresarPaquetes($tabla, $datos);

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
