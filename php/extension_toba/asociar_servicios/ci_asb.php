<?php
require_once('extension_toba/datos.php');
class ci_asb extends sgpm_ci
{
  public $s__datos = [];
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
    $this->s__datos['cuadro_2'] = datos::obtenerServiciosDisponibles();
    $cuadro->set_datos($this->s__datos['cuadro_2']);
	}

	//-----------------------------------------------------------------------------------
	//---- frm_1 ------------------------------------------------------------------------
	//-----------------------------------------------------------------------------------

	function conf__frm_1(sgpm_ei_formulario $form)
	{
    $seleccion = $this->s__datos['seleccion'];
    $datos = $this->s__datos['cuadro'];


    foreach ($datos as $key => $value) {
      if ($datos[$key]['nro_entrada'] == $seleccion['nro_entrada']) {
        $form->set_titulo('Datos para el la entrada Nro: ' . $datos[$key]['nro_entrada']);
        $form->set_datos($datos[$key]);
      }
    }
	}

}
?>
