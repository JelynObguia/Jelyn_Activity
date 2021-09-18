<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class employees
 * @package App\Models
 * @version September 18, 2021, 1:02 pm UTC
 *
 * @property string $FirstName
 * @property string $LastName
 * @property string $Birthdate
 * @property string $NameOfEmployer
 * @property string $Position
 */
class employees extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'employees';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'FirstName',
        'LastName',
        'Birthdate',
        'NameOfEmployer',
        'Position'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'FirstName' => 'string',
        'LastName' => 'string',
        'Birthdate' => 'date',
        'NameOfEmployer' => 'string',
        'Position' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'FirstName' => 'nullable|string|max:40',
        'LastName' => 'nullable|string|max:40',
        'Birthdate' => 'nullable',
        'NameOfEmployer' => 'nullable|string|max:80',
        'Position' => 'nullable|string|max:40',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
