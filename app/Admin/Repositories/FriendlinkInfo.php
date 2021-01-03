<?php

namespace App\Admin\Repositories;

use App\Models\FriendlinkInfo as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class FriendlinkInfo extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
