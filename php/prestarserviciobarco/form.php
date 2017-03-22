<?php
class form extends sgpm_ei_formulario
{

	//-----------------------------------------------------------------------------------
	//---- JAVASCRIPT -------------------------------------------------------------------
	//-----------------------------------------------------------------------------------

	function extender_objeto_js()
	{
		echo "
		//---- Procesamiento de EFs --------------------------------
		
		{$this->objeto_js}.evt__estado__procesar = function(es_inicial)
		{
			document.getElementById('ci_512000005_procesar').disabled=true;
		}
		";
	}

}
?>