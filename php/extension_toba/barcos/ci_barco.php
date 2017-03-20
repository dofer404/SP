<?php
require_once('extension_toba/barcos/datos.php');
class ci_barco extends sgpm_ci
{
	public $s__datos = [];
	//-----------------------------------------------------------------------------------
	//---- cuadro -----------------------------------------------------------------------
	//-----------------------------------------------------------------------------------

	function conf__cuadro(sgpm_ei_cuadro $cuadro)
	{
		$datos_cuadro = datos::obtenerListadoBarcos();
		$this->s__datos['cuadro'] = $datos_cuadro;
		$cuadro->set_datos($datos_cuadro);
	}


	function evt__cuadro__seleccion($seleccion)
	{
		$cuadro = $this->s__datos['cuadro'];
		foreach ($cuadro as $key => $value) {
			if ($cuadro[$key]['id_barco'] == $seleccion['id_barco']) {

			}
		}
	}

	function evt__nuevo()
	{
		$this->set_pantalla('pant_edicion');
	}

}
?>
