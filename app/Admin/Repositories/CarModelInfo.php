<?php

namespace App\Admin\Repositories;

use App\Models\CarModelInfo as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class CarModelInfo extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
