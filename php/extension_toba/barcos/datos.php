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
}
?>
