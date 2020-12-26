<?php

namespace App\Admin\Repositories;

use App\Models\CatalogCarInfo as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class CatalogCarInfo extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
