<?php
/**
 * Esta clase fue y será generada automáticamente. NO EDITAR A MANO.
 * @ignore
 */
class sgpm_autoload 
{
	static function existe_clase($nombre)
	{
		return isset(self::$clases[$nombre]);
	}

	static function cargar($nombre)
	{
		if (self::existe_clase($nombre)) { 
			 require_once(dirname(__FILE__) .'/'. self::$clases[$nombre]); 
		}
	}

	static protected $clases = array(
		'sgpm_ci' => 'extension_toba/componentes/sgpm_ci.php',
		'sgpm_cn' => 'extension_toba/componentes/sgpm_cn.php',
		'sgpm_datos_relacion' => 'extension_toba/componentes/sgpm_datos_relacion.php',
		'sgpm_datos_tabla' => 'extension_toba/componentes/sgpm_datos_tabla.php',
		'sgpm_ei_arbol' => 'extension_toba/componentes/sgpm_ei_arbol.php',
		'sgpm_ei_archivos' => 'extension_toba/componentes/sgpm_ei_archivos.php',
		'sgpm_ei_calendario' => 'extension_toba/componentes/sgpm_ei_calendario.php',
		'sgpm_ei_codigo' => 'extension_toba/componentes/sgpm_ei_codigo.php',
		'sgpm_ei_cuadro' => 'extension_toba/componentes/sgpm_ei_cuadro.php',
		'sgpm_ei_esquema' => 'extension_toba/componentes/sgpm_ei_esquema.php',
		'sgpm_ei_filtro' => 'extension_toba/componentes/sgpm_ei_filtro.php',
		'sgpm_ei_firma' => 'extension_toba/componentes/sgpm_ei_firma.php',
		'sgpm_ei_formulario' => 'extension_toba/componentes/sgpm_ei_formulario.php',
		'sgpm_ei_formulario_ml' => 'extension_toba/componentes/sgpm_ei_formulario_ml.php',
		'sgpm_ei_grafico' => 'extension_toba/componentes/sgpm_ei_grafico.php',
		'sgpm_ei_mapa' => 'extension_toba/componentes/sgpm_ei_mapa.php',
		'sgpm_servicio_web' => 'extension_toba/componentes/sgpm_servicio_web.php',
		'sgpm_comando' => 'extension_toba/sgpm_comando.php',
		'sgpm_modelo' => 'extension_toba/sgpm_modelo.php',
	);
}
?>