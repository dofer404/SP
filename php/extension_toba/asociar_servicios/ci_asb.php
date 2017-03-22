<?php
require_once('extension_toba/datos.php');
class ci_asb extends sgpm_ci
{
  public $s__datos = [];
  public $s__conjuntoServicios = array();

	//-----------------------------------------------------------------------------------
	//---- Configuraciones --------------------------------------------------------------
	//-----------------------------------------------------------------------------------

	function conf__pant_edicion(toba_ei_pantalla $pantalla)
	{
    $seleccion = $this->s__datos['seleccion'];
    $datos = $this->s__datos['cuadro'];
    foreach ($datos as $key => $value) {
      if ($datos[$key]['nro_entrada'] == $seleccion['nro_entrada']) {
        $this->s__datos['form_1']['titulo_paracargar'] = ('Datos para el la entrada Nro: ' . $datos[$key]['nro_entrada']);
        $this->s__datos['form_1']['datos_paracargar'] = $datos[$key];
      }
    }
	}

	//-----------------------------------------------------------------------------------
	//---- Eventos ----------------------------------------------------------------------
	//-----------------------------------------------------------------------------------

	function evt__nuevo()
	{
    $this->set_pantalla('pant_edicion');
	}

	//-----------------------------------------------------------------------------------
	//---- cuadro -----------------------------------------------------------------------
	//-----------------------------------------------------------------------------------

	function conf__cuadro(sgpm_ei_cuadro $cuadro)
	{
    $this->s__datos['cuadro'] = datos::obtenerListadoBarcosConEntradaNoProcesada();
    $cuadro->set_datos($this->s__datos['cuadro']);
	}

	function evt__cuadro__seleccion($seleccion)
	{
    $this->s__datos['seleccion'] = $seleccion;
    $this->set_pantalla('pant_edicion');
	}

	//-----------------------------------------------------------------------------------
	//---- cuadro_2 ---------------------------------------------------------------------
	//-----------------------------------------------------------------------------------

	function conf__cuadro_2(sgpm_ei_cuadro $cuadro)
	{
    $datosBarco = $this->s__datos['form_1']['datos_paracargar'];
    $tipoBarco = $datosBarco['tipo'];
    $this->s__datos['cuadro_2'] = datos::obtenerServiciosDisponibles($tipoBarco);
    $cuadro->set_titulo('Servicios disponibles para las embarcaciones que realizan actividades de tipo: ' . $datosBarco['actividad']);
    $cuadro->set_datos($this->s__datos['cuadro_2']);
	}

	//-----------------------------------------------------------------------------------
	//---- frm_1 ------------------------------------------------------------------------
	//-----------------------------------------------------------------------------------

	function conf__frm_1(sgpm_ei_formulario $form)
	{
    $titulo = $this->s__datos['form_1']['titulo_paracargar'];
    $datos = $this->s__datos['form_1']['datos_paracargar'];
    $form->set_titulo($titulo);
    $form->set_datos($datos);
	}

	function conf__frm_ml_servicios_a_asociar(sgpm_ei_formulario_ml $form_ml)
	{
    $form_ml->desactivar_agregado_filas();
	}

	function evt__cuadro_2__asociar($seleccion)
	{
    $cuadro = $this->s__datos['cuadro_2'];
    $form_ml = $this->dep('frm_ml_servicios_a_asociar');

    foreach ($cuadro as $key => $value) {
      if ($cuadro[$key]['id_servicio'] == $seleccion['id_servicio']) {
        /* Agregamos el servicio al frm_ml---------------------------*/
        $servicio = [
          'id_servicio' => $cuadro[$key]['id_servicio'],
          'servicio' => $cuadro[$key]['servicio'],
          'cantidad' => 1,
          'precio' => $cuadro[$key]['precio']
        ];
        array_push($this->s__conjuntoServicios, $servicio);
        $form_ml->set_datos($this->s__conjuntoServicios);
        /* Hasta aca-------------------------------------------------*/
      }
    }
	}

	function conf_evt__cuadro_2__asociar(toba_evento_usuario $evento, $fila)
	{
    $cuadro = $this->dep('cuadro_2')->get_datos();
    $serviciosAsociados = $this->s__conjuntoServicios;
    /*Aca se debe ocultar el boton de asociar servicio que se clickeo
    * No se me ocurre como utilizar el argumento fila para saber en que fila
    * debo ocultar el evento
    */
    foreach ($cuadro as $key1 => $value) {
      foreach ($serviciosAsociados as $key2 => $value) {
        if ($cuadro[$key1]['id_servicio'] = $serviciosAsociados[$key2]['id_servicio']) {
        }
      }
    }
	}

}
?>
