<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Reactivo
 * @package App\Models
 * @version February 10, 2020, 8:17 pm UTC
 *
 * @property string pregunta
 * @property integer grado_inicial
 * @property integer grado_final
 * @property string tipo
 */
class Reactivo extends Model
{

    public $table = 'reactivos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'pregunta',
        'grado_inicial',
        'grado_final',
        'tipo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'pregunta' => 'string',
        'grado_inicial' => 'integer',
        'grado_final' => 'integer',
        'tipo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pregunta' => 'required'
    ];

    
}
