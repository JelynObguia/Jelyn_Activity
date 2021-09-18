<?php

namespace App\Repositories;

use App\Models\employees;
use App\Repositories\BaseRepository;

/**
 * Class employeesRepository
 * @package App\Repositories
 * @version September 18, 2021, 1:02 pm UTC
*/

class employeesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'FirstName',
        'LastName',
        'Birthdate',
        'NameOfEmployer',
        'Position'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return employees::class;
    }
}
