<?php

namespace App\Admin\Repositories;

use App\Models\CarTypeInfo as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class CarTypeInfo extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
