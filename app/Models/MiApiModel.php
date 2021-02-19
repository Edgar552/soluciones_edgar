<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiApiModel extends Model
{
	protected $table='temporal';
	
	protected $primaryKey='id';
	
	protected $guarded=[]; //PARA DESHABILITAR LA SEGURIDAD DE LARAVEL Y HACER EFECTIVA LA FUNCION "VALIDATED "  EN EL CONTROLADOR
}
