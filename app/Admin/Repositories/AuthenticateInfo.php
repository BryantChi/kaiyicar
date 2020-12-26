<?php

namespace App\Admin\Repositories;

use App\Models\AuthenticateInfo as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class AuthenticateInfo extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
