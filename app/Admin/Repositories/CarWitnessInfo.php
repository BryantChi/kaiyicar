<?php

namespace App\Admin\Repositories;

use App\Models\CarWitnessInfo as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class CarWitnessInfo extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
