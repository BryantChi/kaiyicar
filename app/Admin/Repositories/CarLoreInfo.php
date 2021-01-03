<?php

namespace App\Admin\Repositories;

use App\Models\CarLoreInfo as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class CarLoreInfo extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
