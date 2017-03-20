<?php
class frm_1 extends sgpm_ei_formulario
{
	//-----------------------------------------------------------------------------------
	//---- JAVASCRIPT -------------------------------------------------------------------
	//-----------------------------------------------------------------------------------

	function extender_objeto_js()
	{
		echo "
		//---- Procesamiento de EFs --------------------------------

		{$this->objeto_js}.evt__b_buscarbase__procesar = function(es_inicial)
		{
			var barra = this.ef('barra1');
			var persona = this.ef('id_persona');
			var estado = this.ef('b_buscarbase').get_estado();
			if (estado) {
				barra.mostrar();
				persona.mostrar();
			} else {
				barra.ocultar();
				persona.ocultar();
			}
		}
		";
	}

}

?>
