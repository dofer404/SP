<?php
class datos
{
  static function obtenerListadoBarcos()
  {
    $datos = [
			[
        'id_barco' => 1,
				'matricula' => '124353345',
				'nombre' => 'Mickey Mouse VI',
				'empresa_consig' => 'Disney',
				'actividad' => 'Crucero Turistico',
				'nacionalidad' => 'Francesa'
			],
			[
        'id_barco' => 2,
				'matricula' => '206581765',
				'nombre' => 'Mickey Mouse III',
				'empresa_consig' => 'Disney',
				'actividad' => 'Crucero Turistico',
				'nacionalidad' => 'Estadounidense'
			],
			[
        'id_barco' => 3,
				'matricula' => '864570213',
				'nombre' => 'Gold V',
				'empresa_consig' => 'Barrick',
				'actividad' => 'Carga',
				'nacionalidad' => 'Canadiense'
			]
			];
    return $datos;
  }

  static function obtenerListadoBarcosConEntradaNoProcesada()
  {
    $datos = [
      [
        'id_barco' => 2,
				'matricula' => '206581765',
        'empresa_consig' => 'Disney',
				'barco' => 'Mickey Mouse III',
        'fecha_llegada' => '20/03/2017 13:17:05',
        'procedencia' => 'Australia',
        'estadia' => '5 Dias',
        /**
        * Hasta aqui se muestran en el cuadro
        * Lo que sigue es porque se utiliza el mismo array para
        * Cargar el formulario de la pantalla de edicion
        */
        'tipo' => 'crucero',
        'nro_entrada' => '000134519',
				'actividad' => 'Crucero Turistico',
        'nacionalidad' => 'Estadounidense'
			],
			[
        'id_barco' => 3,
				'matricula' => '864570213',
        'empresa_consig' => 'Barrick',
        'barco' => 'Gold V',
        'fecha_llegada' => '20/03/2017 13:34:16',
        'procedencia' => 'Portugal',
        'estadia' => '3 Dias',
        /**
        * Hasta aqui se muestran en el cuadro
        * Lo que sigue es porque se utiliza el mismo array para
        * Cargar el formulario de la pantalla de edicion
        */
        'tipo' => 'carga',
        'nro_entrada' => '000134520',
				'actividad' => 'Carga',
        'nacionalidad' => 'Canadiense'
			]
    ];
    return $datos;
  }

  static function obtenerServiciosDisponibles($tipo)
  {
    switch ($tipo) {
    case "carga":
        $datos = [[
          'id_servicio' => 1,
          'servicio' => 'Descarga de Contenedores',
          'precio' => '$1500',
          'duracion_estimada' => '30 Minutos',
          'tipo_duracion' => 'Minutos'
        ],
        [
          'id_servicio' => 2,
          'servicio' => 'Limpieza de cubierta',
          'precio' => '$1000',
          'duracion_estimada' => '5 Horas',
          'tipo_duracion' => 'Horas'
        ],
        [
          'id_servicio' => 3,
          'servicio' => 'Reabastecer combustible',
          'precio' => 'Variable',
          'duracion_estimada' => 'Variable',
          'tipo_duracion' => ''
        ],
        [
          'id_servicio' => 4,
          'servicio' => 'Remolque',
          'precio' => '$1000',
          'duracion_estimada' => '35 Minutos',
          'tipo_duracion' => 'Minutos'
        ]];
        break;
    case "crucero":
        $datos = [[
          'id_servicio' => 3,
          'servicio' => 'Reabastecer combustible',
          'precio' => 'Variable',
          'duracion_estimada' => 'Variable',
          'tipo_duracion' => ''
        ],
        [
          'id_servicio' => 2,
          'servicio' => 'Limpieza de cubierta',
          'precio' => '$1000',
          'duracion_estimada' => '5 Horas',
          'tipo_duracion' => 'Horas'
        ],
        [
          'id_servicio' => 4,
          'servicio' => 'Remolque',
          'precio' => 'Variable',
          'duracion_estimada' => 'Variable',
          'tipo_duracion' => ''
        ]];
        break;
    }
    return $datos;
  }
}
?>
