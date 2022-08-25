<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zipcodes extends Model
{
    use HasFactory;
    protected $fillabel = [
        'd_codigo'
        ,'d_asenta'
        ,'d_tipo_asenta'
        ,'d_mnpio'
        ,'d_estado'
        ,'d_ciudad'
        ,'d_CP'
        ,'c_estado'
        ,'c_oficina'
        ,'c_CP'
        ,'c_tipo_asenta'
        ,'c_mnpio'
        ,'id_asenta_cpcons'
        ,'d_zona'
        ,'c_cve_ciudad'
    ];
}

